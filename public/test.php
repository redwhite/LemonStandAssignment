<?php


require '../vendor/autoload.php';

// Development settings
error_reporting(E_ALL);
ini_set('display_errors', 1);

$app = new \Slim\Slim(array(
    'view' => new \Slim\Views\Twig(),
    'templates.path' => '../views'
));

$app->view->parserExtensions = array(
    new \Slim\Views\TwigExtension(),
);


$config = array(
    'shop' => 'bananastore.lemonstand.com',
    'key' => 'jGdAR9cf7FP20m8sRGUUYvOZ8yZpN07OcNKfqMeR',
    'secret' => 'xzrLmln5Mj3I5B6jk2achsgIN03lQVgvRKREuzYa',
    'token' => 'J41dYOgkkAmlFAPuEJU8sPxSI6YLPMEKwRi5XsOj'
);

// Create the LemonStand API Client
$lemonstand = new \LemonStand\sdk\Client($config);

$app->get('/', function () use ($app, $lemonstand, $config) {
    $app = \Slim\Slim::getInstance();

    // Make the call to the LemonStand API
    $products = $lemonstand->get('/products');

    // Check to see if the request returned successfully
    if (!$products['success']) {
        throw new \Exception($products['error']['message']);
    }
    
    
    
    // Psss the products into the view
    echo $app->view()->render('results.html', array('products' => $products['data'], 'shop' => $config['shop']));
});

$app->run();
