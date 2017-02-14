<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/',[
    'uses'=>'PageController@home',
    'as'=>'page.home'
]);

Route::get('/products',[
    'uses'=>'PageController@products',
    'as'=>'page.products'
]);

Route::get('/category/{category}',[
    'uses' => 'ProductController@byCategory',
    'as' => 'category'
]);

Route::get('/product{id}',[
    'uses' => 'ProductController@show',
    'as'=> 'page.product'
]);

Route::get('/product-to-cart/{id}',[
    'uses' => 'ProductController@productToCart',
    'as' => 'cart'
]);

Route::get('/account/',[
    'uses'=>'PageController@account',
    'as'=>'page.account'
]);

Route::get('/cart',[
    'uses'=>'ProductController@cart',
    'as'=>'page.cart'
]);

Route::get('/cart/reduce/{id}',[
    'uses' => 'ProductController@cartReduceOne',
    'as' => 'cart.reduceByOne'
]);

Route::get('/cart/reduce-product/{id}',[
    'uses' => 'ProductController@cartRemoveItem',
    'as' => 'cart.removeItem'
]);

//Route::get('/checkout-info',[
//    'uses' => 'ProductController@checkoutInfo',
//    'as' => 'product.checkoutInfo'
//]);

Route::get('/contact',[
    'uses' => 'PageController@contact',
    'as' => 'page.contact'
]);

//Route::post('/sendmail',function(\Illuminate\Http\Request $request,\Illuminate\Mail\Mailer $mailer){
//$mailer->to($request->input('email'))->send(new \App\Mail\MyMail($request->input('message'),$request->input('name')));
//    return redirect()->back()->with('mailed','You have sent the mail');
//})->name('send-mail');

Route::post('/sendmail',[
    'uses' => 'ProductController@sendMail',
    'as' => 'send-mail'
]);


//Route::get('/signin',[
//    'uses' => 'UserController@getSignin',
//    'as' => 'user.signin'
//]);
//
//Route::get('/signup',[
//    'uses' => 'UserController@getSignup',
//    'as' => 'user.signup'
//]);

Route::get('/logout',[
    'uses' => 'UserController@logout',
    'as' => 'user.logout'
]);

Route::post('/find/{title}',[
    'uses' => 'ProductController@find',
    'as' => 'product.find'
]);

Route::get('/word',[
    'uses' => 'ProductController@word',
    'as' => 'word'
]);

//Route::get('/user/create',[
//    'uses' => 'UserController@create',
//    'as' => 'user.create'
//]);
//
//Route::get('/product/create',[
//    'uses' => 'ProductController@create',
//    'as' => 'user.create'
//]);

//Route::resource('/user','UserController');
//Route::resource('/product','ProductController');

Route::group(['prefix'=>'admin','middleware'=>['auth','admin']],function(){
    Route::resource('/user','UserController');
    Route::resource('/product','ProductController');
    Route::get('/status/{id}',[
        'uses' => 'UserController@changeStatus',
        'as' => 'change.status'
    ]);
    Route::get('/order/{id}',[
        'uses' => 'UserController@getOrder',
        'as' => 'page.order'
    ]);

});

Route::group(['middleware'=>'auth'],function(){
    Route::resource('/address','AddressController');
    Route::resource('/payment','CheckoutController');
    Route::get('/product/delete/{id}',[
        'uses' => 'ProductController@delete',
        'as' => 'product.delete'
    ]);


});



Auth::routes();

Route::get('/home', 'HomeController@index');


