<?php

    use App\HelloWorld;

    require_once realpath(__DIR__ . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'config.php');

    $hello_world = new HelloWorld();
    $hello_world();