<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{

	return View::make('hello');
});

Route::get('query', function()
{
    

    $config = array(
        'shop' => '',
        'key' => '',
        'secret' =>'',
        'token' => ''
    );

    // Create the LemonStand API Client
    $lemonstand = new \LemonStand\sdk\Client($config);
    
    
    // Make the call to the LemonStand API
    $products = $lemonstand->get('/products');

    // Check to see if the request returned successfully
    if (!$products['success']) {
        throw new \Exception($products['error']['message']);
    }
    
    $testdata = $products['data'];    
    return View::make('result')->with('testdata',$testdata);
    //return var_dump($products);
});

Route::get('display',function(){
    $data = Product::all()->toArray();
    return View::make('display')->with('data',$data);
});

