<?php

$database = require 'core/bootstrap.php';

$router = new Router;

require 'routes.php';

var_dump($_SERVER);

//require $router->direct('contact');
