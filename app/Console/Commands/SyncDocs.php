<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SyncDocs extends Command
{
    protected $signature = 'packages:sync-docs';
    protected $description = 'Synchronize packages documentation files';

    private $packages;

    public function __construct()
    {
        parent::__construct();

        $this->packages = [
            'laravel-html-bootstrap-4' => function ($content) {
                $content = preg_replace('/```\$php([^`]*)```/', "<div class=\"my-3\">$1</div>", $content);
                return $content;
            },
        ];
    }


    public function handle()
    {
        foreach ($this->packages as $package => $contentFilter)
        {
            $dest = \base_path("resources/views/docs/$package");
            $this->rrmdir($dest);
            if (!mkdir($dest, 0777, true) && !is_dir($dest))
            {
                throw new \RuntimeException(sprintf('Directory "%s" was not created', $dest));
            }

            $docsRoot = base_path("packages/marvinlabs/$package/docs");
            $docFiles = scandir($docsRoot, SCANDIR_SORT_NONE);
            foreach ($docFiles as $filePath)
            {
                if (!\ends_with($filePath, '.md'))
                {
                    continue;
                }

                $fileName = \basename($filePath);
                $fileName = \str_replace('.md', '.md.blade.php', $fileName);

                $content = \file_get_contents($docsRoot . '/' . $filePath);
                \file_put_contents("$dest/$fileName", $contentFilter($content));
            }
        }
    }

    private function rrmdir($dir)
    {
        if (is_dir($dir))
        {
            $objects = scandir($dir, SCANDIR_SORT_NONE);
            foreach ($objects as $object)
            {
                if ($object !== '.' && $object !== '..')
                {
                    if (is_dir($dir . '/' . $object))
                    {
                        $this->rrmdir($dir . '/' . $object);
                    }
                    else
                    {
                        unlink($dir . '/' . $object);
                    }
                }
            }
            rmdir($dir);
        }
    }
}
