<?php

use App\Http\Controllers\Web\BlogController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/clear', function (){

    Artisan::call('route:clear');
    Artisan::call('config:clear');
	Artisan::call('cache:clear');
    return 'cache cleared';
});

Auth::routes([
    //  'login'     =>true,   //    login Routes
    'register'  => true,     // Registration Routes...
    'verify'    => true,       // Email Verification Routes...
    'reset'     => true,        // Password Reset Routes...
]);

Route::get('/test', function(){
    return view('index');
});

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth','verified', 'admin']], function () {

    Route::get('/', 'HomeController@index')->name('home');

    Route::get('get-orders', 'OrdersController@getOrders')->name('orders.get');
    Route::resource('orders', 'OrdersController');

    // Invoices
    Route::resource('invoices', 'InvoicesController');

    // Contacts
    Route::get('get-contacts', 'ContactController@getContacts')->name('contacts.get');
    Route::resource('contacts', 'ContactController');

    // Services
    Route::post('services/slug', 'ServiceController@getSlug')->name('services.getSlug');
    Route::resource('services', 'ServiceController');

    // Blogs
    Route::post('blogs/slug', 'BlogsController@getSlug')->name('blogs.getSlug');
    Route::resource('blogs', 'BlogsController');
    // Customers
    Route::resource('setting', 'WebSettingController');

    // Customers
    Route::resource('customers', 'CustomersController');


});

Route::group(['prefix' => 'customer', 'as' => 'customer.', 'namespace' => 'Customer', 'middleware' => [ 'auth', 'verified', 'customer']], function () {

    Route::get('/', 'HomeController@index')->name('home');

    // Orders
    Route::resource('orders', 'OrdersController');

    // Invoices
    Route::resource('invoices', 'InvoicesController');

    // Profile
    Route::resource('profile', 'ProfileController')->only(['index', 'update']);
    // Change
    Route::get('change-password', 'ProfileController@changePassword')->name('profile.change-password');
    Route::post('change-password', 'ProfileController@changePasswordUpdate')->name('profile.change-password.change');
});

Route::group(['prefix' => 'profile', 'as' => 'profile.', 'namespace' => 'Auth', 'middleware' => ['auth']], function () {
    // Change password
    if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))) {
        Route::get('password', 'ChangePasswordController@edit')->name('password.edit');
        Route::post('password', 'ChangePasswordController@update')->name('password.update');
        Route::post('profile', 'ChangePasswordController@updateProfile')->name('password.updateProfile');
        Route::post('profile/destroy', 'ChangePasswordController@destroy')->name('password.destroyProfile');
    }
});

// web routes;

Route::group(['namespace'=> 'Web'], function(){
    Route::get('/', 'PagesController@index')->name('home');
     Route::view('/disclaimer','pages.legal.disclaimer')->name('disclaimer');
    // Route::view('/sitemap','pages.legal.sitemap')->name('sitemap');
    // Route::view('/revision-policy','pages.legal.revision')->name('revision');
    // Route::view('/refund-policy', 'pages.legal.refund')->name('refund');
    Route::view('/reviews','pages.reviews')->name('reviews');
    Route::view('/privacy-policy', 'pages.legal.privacy')->name('privacy');
    Route::view('/terms-and-condition', 'pages.legal.terms')->name('terms');
    Route::get('/pricing','PagesController@price')->name('price');
    Route::get('/about-us' ,'PagesController@about')->name('about');
    Route::get('/sitemap','PagesController@sitemap')->name('sitemap');
    Route::get('/samples','PagesController@samples')->name('samples');
    Route::post('/get-fare',    "PagesController@getFare")->name('get.fare');
    Route::get('/refund-policy',    "PagesController@refund_policy")->name('refund-policy');
    Route::get('/revision-policy',    "PagesController@revision_policy")->name('revision-policy');

    Route::get('invoice', 'OrderController@invoice')->name('invoice');

    // ContactController
    Route::get('/contact-us',    "ContactController@create")->name('contact');
    Route::post('/contact',   "ContactController@store")->name('contact.store');

    //Order
    Route::get('/order' , 'OrderController@create')->name('order');
    Route::post('/order' , 'OrderController@store')->name('order.store');
    Route::get('/order-now' , 'OrderController@order')->name('orders');

   
   
 // Blogs"

    Route::get('/blogs','BlogController@create')->name('blog');
    Route::get('blogs/{slug}',           'BlogController@show')->name('blogs.show');
    Route::get('blogs/category/{slug}', "BlogController@category")->name('blogs.category');
    Route::get('blogs/s', "BlogController@search")->name('blogs.search');

});


