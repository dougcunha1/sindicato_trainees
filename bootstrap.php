<?php

use Core\App;
use Core\Container;
use Core\Database;

$container = new Container();

$container->bind('Core\Database', function () {
        
    $json = file_get_contents(base_path('config.json'));

    $config = json_decode($json, true);

    return new Database($config['database']);
});

App::setContainer($container);
