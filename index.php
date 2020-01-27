<?php

/*
 * Nick Gadomskiy
 * 1/27/20
 * templating practice
 */

// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Require the autoload file
require('vendor/autoload.php');

// Create an instance of the Base class
$f3 = Base::instance();

// Define a default route
$f3->route('GET /', function() {
    echo "<h1>Welcome</h1>";
});

// Run fat free
$f3->run();