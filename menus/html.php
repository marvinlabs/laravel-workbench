<?php

use MarvinLabs\Menus\Facades\Menu;
use MarvinLabs\Menus\Menu\Items\Heading;
use MarvinLabs\Menus\Presenters\Html\RawHtmlPresenter;
use MarvinLabs\Menus\Support\Links\UrlLink;
use MarvinLabs\Menus\Support\Links\VoidLink;

Menu::make('html', function($menu) {
    $menu->setPresenter(new RawHtmlPresenter());

    $menu->addHeading('Item 1', 3);
    $menu->addHeading('Item 2', 4, function (Heading $item) {
        $item->addLink('Item 2.1', new VoidLink());
        $item->addLink('Item 2.2', new UrlLink('/test'));
    });
    $menu->addDivider();
    $menu->addHeading('Item 3', 3);
});