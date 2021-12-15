<?php
// Require composer autoloader
require __DIR__ . '/vendor/autoload.php';

// Create Router instance
$router = new \Bramus\Router\Router();

// Define routes
$router->get('/', function() {
    print "Hello, World!\n";
});
$router->get('/([0-9]+)-([a-z-]+).html', function($digit, $name) {
    print "$digit, $name\n";
});

// $router->get('pattern', function() { /* ... */ });
// $router->post('pattern', function() { /* ... */ });
// $router->put('pattern', function() { /* ... */ });
// $router->delete('pattern', function() { /* ... */ });
// $router->options('pattern', function() { /* ... */ });
// $router->patch('pattern', function() { /* ... */ });

// Run it!
$router->run();
