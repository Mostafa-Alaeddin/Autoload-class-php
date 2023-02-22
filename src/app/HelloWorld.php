<?php

    namespace App;

    class HelloWorld
    {
        /**
         * @return string
         */
        public function __invoke(): string
        {
            return "Hello World !";
        }
    }