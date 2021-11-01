<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::group(['prefix' => App\Http\Middleware\LocaleMiddleware::getLocale()], function () {


    # Auth
    Route::match(['get', 'post'], '/login', [
        'as' => 'login',
        'uses' => 'AuthController@login'
    ]);

    Route::match(['get', 'post'], '/registration', [
        'as' => 'registration',
        'uses' => 'AuthController@registration'
    ]);

    Route::match(['get', 'post'], '/remember-password', [
        'as' => 'remember-password',
        'uses' => 'AuthController@rememberPassword'
    ]);

    Route::get('/logout', [
        'as' => 'logout',
        'uses' => 'AuthController@logout'
    ]);

    # Account

    Route::group(['as' => 'account.', 'prefix' => 'account', 'middleware' => ['checkUser']], function () {

        Route::get('/', [
            'as' => 'home',
            'uses' => 'AccountController@index'
        ]);


    });


    # Pages/ Menu route
    Route::get('/', [
        'as' => 'home',
        'uses' => 'HomeController@home'
    ]);

    Route::get('/setlocale/{lang}', [
        'uses' => 'PageController@setLocaleLanguage'
    ])->name('setlocale');

    Route::get('/info/{slug}', [
        'as' => 'info',
        'uses' => 'PageController@detail'
    ]);


    // Search
    Route::get('/search', [
        'as' => 'search',
        'uses' => 'SearchController@index'
    ]);

    // Series
    Route::get('/serii-de-produse/{categorySlug}', [
        'as' => 'series',
        'uses' => 'SeriesController@index'
    ]);

    Route::get('/seria/{slug}', [
        'as' => 'series-detail',
        'uses' => 'SeriesController@detail'
    ]);

    Route::post('/seria/{slug}/sendRev', [
        'as' => 'series-detail-review',
        'uses' => 'SeriesController@detailSender'
    ]);


    #Category

    Route::get('/category', [
        'as' => 'category',
        'uses' => 'CategoryController@index'
    ]);

    Route::get('/category/{slug}', [
        'as' => 'categoryDetail',
        'uses' => 'CategoryController@detail'
    ]);

    #Blog>news
    Route::get('/news', [
        'as' => 'news',
        'uses' => 'NewsController@index'
    ]);

    Route::get('/blog/{id}-{slug}', [
        'as' => 'news-detail',
        'uses' => 'NewsController@detail'
    ]);


    # Contact use
    Route::match(['get'], '/contacts', [
        'as' => 'contacts',
        'uses' => 'PageController@contacts'
    ]);
    Route::post('/sendContactForm', [
        'as' => 'sendContactForm',
        'uses' => 'PageController@sendContactForm'
    ]);

    # About us
    Route::get('/despre-noi', [
        'as' => 'despre-noi',
        'uses' => 'PageController@aboutUs'
    ]);
    Route::get('/about-us', [
        'as' => 'about-us',
        'uses' => 'PageController@aboutUs'
    ]);


    #Cart

    Route::get('/cart', [
        'as' => 'cart',
        'uses' => 'CartController@index'
    ]);
    Route::get('/cart/confirm', [
        'as' => 'cart-confirm',
        'uses' => 'CartController@confirm'
    ]);

    Route::post('/do-checkout', [
        'as' => 'doCheckout',
        'uses' => 'CartController@doCheckout'
    ]);

    Route::get('/success-order', [
        'as' => 'success-order',
        'uses' => 'CartController@successOrder'
    ]);

    Route::get('/checkout', [
        'as' => 'cart-checkout',
        'uses' => 'CartController@checkout'
    ]);



});

#Api
Route::group(['prefix'=>'api/v1'], function(){

    // Add To Cart
    Route::post('cart/add-to-cart','Api\V1\CartController@addToCart')->name('addToCart');

    // Remove from Cart
    Route::post('cart/remove-from-cart','Api\V1\CartController@removeFromCart')->name('removeFromCart');

    // Hit Plus on Cart
    Route::post('cart/plus-to-cart','Api\V1\CartController@plusToCart')->name('plusToCart');

    // Hit Minus on Cart
    Route::post('cart/minus-to-cart','Api\V1\CartController@minusToCart')->name('minusToCart');

    // updateCartProductQt
    Route::post('cart/updateCartProductQt','Api\V1\CartController@updateCartProductQt')->name('updateCartProductQt');


    // filterProducts
    Route::post('series/filterSeries','Api\V1\SeriesController@filterSeries')->name('filterSeries');

    //Subscribe

    Route::post('subscribeNow','Api\V1\SubscribeController@subscribeNow')->name('subscribe');

});


Route::group(['prefix' => 'admin'], function () {
    Admin::routes();
});

Route::get('/linkstorage', function () {
    Artisan::call('storage:link');
});
