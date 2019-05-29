<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use RuntimeException;

class TestLogging extends Command
{
    protected $signature = 'test:logging';
    protected $description = 'Test the discord logger package by sending a few log messages to the configured channel';

    public function handle()
    {
        Log::debug('This should not be logged');
        Log::info('This is a sample info message');
        Log::warning('This is a sample warning message with some long text which should span over multiple lines');
        Log::error('This is an error with extra', ['foo' => 'bar']);
        Log::critical('Some exception',[
            'exception' => new RuntimeException('This is an uncaught exception that should be logged')]);
    }
}
