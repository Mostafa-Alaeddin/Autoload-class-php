<?php
//    use class
    use App\GoodbyeWorld;
    use App\HelloWorld;

//    added config file
    require_once realpath(__DIR__ . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'config.php');

//    create new class hello world
    $hello_world = new HelloWorld();
    echo $hello_world() . PHP_EOL;


//    create class goodbye world
    $goodbye_world = new GoodbyeWorld();
    echo $goodbye_world() . PHP_EOL;