<?php

/** @var \Laravel\Lumen\Routing\Router $router */




/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

// Generate Application Key 
$router->get('/key', 'ExampleController@generateKey');

$router->post('/foo', 'ExampleController@fooExample');

$router->get('/user/{id}', 'ExampleController@getUser');

$router->get('/post/cat1/{cat1}/cat2/{cat2}', 'ExampleController@getPost');

$router->get('/profile', ['as' => 'profile', 'uses' => 'ExampleController@getProfile']);

$router->get('/profile/action', ['as' => 'profile.action', 'uses' => 'ExampleController@getProfileAction']);

// $router->get('/foo', function () {
//     return 'Hello, GET Method';
// });

// $router->post('/bar', function () {
//     return 'Hello, POST Method';
// });


// // the router allows you to register routes that respond to any HTTP verb:
// $router->get('/get', function () {
//     return 'GET';
// });
// $router->post('/post', function () {
//     return 'POST';
// });
// $router->put('/put', function () {
//     return 'PUT';
// });
// $router->patch('/patch', function () {
//     return 'PATCH';
// });
// $router->delete('/delete', function () {
//     return 'Delete';
// });
// $router->options('/options', function () {
//     return 'OPTIONS';
// });

// // -----------------------------------
// $router->get('/user/{id}', function ($id) {
//     return 'User id : = ' . $id;
// });


// // contoh penggunaan multiple parameter
// // penamaan parameter yang ada di dalam function boleh sembarangan, karena dia hanya tergantung urutan paramter yang dikirimkan.
// // artinya, parameter function pertama untuk paramater pertama yang dikirimkan
// $router->get('/post/{postId}/comments/{commentId}', function ($postId, $commentId) {
//     return 'Post ID = ' . $postId . 'Comment ID = ' . $commentId;
// });

// // cara memberikan parameter optional
// $router->get('/optional[/{param}]', function ($param = null) {
//     return $param;
// });

// // pneggunaan nama alias dalam route
// $router->get('profile', function () {
//     return redirect()->route('route.profile');
// });

// $router->get('profile/idstack', ['as' => 'route.profile', function () {
//     return 'Route IDStack';
// }]);


// // Mengelompokkan route
// $router->group(['prefix' => 'admin', 'middleware' => 'auth', 'namespace' => ''], function () use ($router) {
//     $router->get('home', function () {
//         return 'Home Admin';
//     });

//     $router->get('profile', function () {
//         return 'Profile Admin';
//     });
// });

$router->get('/admin/home', ['middleware' => 'age', function () {
    return 'Old Enough';
}]);


$router->get('/fail', function () {
    return "Not yet mature";
});
