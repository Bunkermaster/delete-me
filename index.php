<?php
    $loader = require 'vendor/autoload.php';
    $loader->add('Controller\\', __DIR__);
    $loader->add('Repository\\', __DIR__);
    $loader->add('Entity\\', __DIR__);
    $front = new Controller\Front();
