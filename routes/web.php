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



Route::get('/','Frontend\PagesController@index')->name('index');
Route::get('/contact','FAQController@index')->name('contact');
Route::post('/contact/store', 'FAQController@store')->name('contact.store');
Route::get('/about','Frontend\PagesController@about')->name('about');
Route::get('/help','Frontend\PagesController@help')->name('help');

Route::get('/product_index','Frontend\ProductsController@index');
Route::get('/product_index/{slug}','Frontend\ProductsController@show')->name('user.products.show');
Route::get('/search', 'Frontend\PagesController@search')->name('search');
Route::get('/product_index/category/{id}', 'Frontend\CategoriesController@show')->name('user.categories.show');
Route::get('/product_index/categories', 'Frontend\CategoriesController@index')->name('user.categories.index');



Route::get('/admin_index', 'Backend\PagesController@index')->name('admin.index');
Route::get('/admin_index/login', 'Auth\Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('/admin_index/login/submit', 'Auth\Admin\LoginController@login')->name('admin.login.submit');
Route::post('/admin_index/logout/submit', 'Auth\Admin\LoginController@logout')->name('admin.logout');
Route::get('admin/password/reset', 'Auth\Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('admin/password/resetPost', 'Auth\Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('admin/password/reset/{token}', 'Auth\Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');
Route::post('admin/password/reset', 'Auth\Admin\ResetPasswordController@reset')->name('admin.password.reset.post');

// Admin Routes
Route::group(['prefix' => 'admin'], function(){
  
  // Orders Routes
  Route::group(['prefix' => '/orders'], function(){
    Route::get('/', 'Backend\OrdersController@index')->name('admin.orders');
    Route::get('/view/{id}', 'Backend\OrdersController@show')->name('admin.order.show');
    Route::post('/delete/{id}', 'Backend\OrdersController@delete')->name('admin.order.delete');

    Route::post('/completed/{id}', 'Backend\OrdersController@completed')->name('admin.order.completed');

    Route::post('/paid/{id}', 'Backend\OrdersController@paid')->name('admin.order.paid');
    Route::post('/charge-update/{id}', 'Backend\OrdersController@chargeUpdate')->name('admin.order.charge');

    Route::get('/invoice/{id}', 'Backend\OrdersController@generateInvoice')->name('admin.order.invoice');

  });

  //design orders
  Route::group(['prefix' => '/designorder'], function(){
    Route::get('/', 'Backend\DesignCheckoutController@index')->name('admin.designorder');
    Route::get('/view/{id}', 'Backend\DesignCheckoutController@show')->name('admin.designorder.show');
    Route::post('/delete/{id}', 'Backend\DesignCheckoutController@delete')->name('admin.designorder.delete');


  });

  // Product Routes
  Route::group(['prefix' => '/products'], function(){
    Route::get('/', 'Backend\ProductsController@index')->name('admin.products');
    Route::get('/create', 'Backend\ProductsController@create')->name('admin.product.create');
    Route::get('/edit/{id}', 'Backend\ProductsController@edit')->name('admin.product.edit');

    Route::post('/store', 'Backend\ProductsController@store')->name('admin.product.store');

    Route::post('/product/edit/{id}', 'Backend\ProductsController@update')->name('admin.product.update');
    Route::post('/product/delete/{id}', 'Backend\ProductsController@delete')->name('admin.product.delete');
  });


  // Category Routes
  Route::group(['prefix' => '/categories'], function(){
    Route::get('/', 'Backend\CategoriesController@index')->name('admin.categories');
    Route::get('/create', 'Backend\CategoriesController@create')->name('admin.category.create');
    Route::get('/edit/{id}', 'Backend\CategoriesController@edit')->name('admin.category.edit');

    Route::post('/store', 'Backend\CategoriesController@store')->name('admin.category.store');

    Route::post('/category/edit/{id}', 'Backend\CategoriesController@update')->name('admin.category.update');
    Route::post('/category/delete/{id}', 'Backend\CategoriesController@delete')->name('admin.category.delete');
  });

  // Brand Routes
  Route::group(['prefix' => '/brands'], function(){
    Route::get('/', 'Backend\BrandsController@index')->name('admin.brands');
    Route::get('/create', 'Backend\BrandsController@create')->name('admin.brand.create');
    Route::get('/edit/{id}', 'Backend\BrandsController@edit')->name('admin.brand.edit');

    Route::post('/store', 'Backend\BrandsController@store')->name('admin.brand.store');

    Route::post('/brand/edit/{id}', 'Backend\BrandsController@update')->name('admin.brand.update');
    Route::post('/brand/delete/{id}', 'Backend\BrandsController@delete')->name('admin.brand.delete');
  });

  //FAQ

  Route::group(['prefix' => '/faq'], function(){
    Route::get('/', 'Backend\FAQController@index')->name('admin.faq');
    Route::post('/delete/{id}', 'Backend\FAQController@delete')->name('admin.faq.delete');
  });
});


  // User Routes
Route::group(['prefix' => 'user'], function(){
Route::get('/token/{token}', 'Frontend\VerificationController@verify')->name('user.verification');

});

// Cart Routes
Route::group(['prefix' => 'carts'], function(){
Route::get('/', 'Frontend\CartsController@index')->name('carts');
Route::post('/store', 'Frontend\CartsController@store')->name('carts.store');
Route::post('/update/{id}', 'Frontend\CartsController@update')->name('carts.update');
Route::post('/delete/{id}', 'Frontend\CartsController@destroy')->name('carts.delete');
});

// Checkout Routes
Route::group(['prefix' => 'checkout'], function(){
Route::get('/', 'Frontend\CheckoutsController@index')->name('checkouts');
Route::post('/store', 'Frontend\CheckoutsController@store')->name('checkouts.store');
});


//Checkout for designs
Route::group(['prefix' => 'checkout_design'], function(){
Route::get('/', 'Frontend\CheckoutsController@design_index')->name('checkoutsDesign');
Route::post('/store', 'Frontend\CheckoutsController@design_store')->name('checkoutsDesign.store');
});


//user
Route::post('/dashboard','Frontend\userDesignController@dashboard')->name('user.kamiz_design');
Route::get('/dashboard','Frontend\UsersController@dashboard')->name('user.dashboard');
Route::get('/profile', 'Frontend\UsersController@profile')->name('user.profile');
Route::post('/profile/update', 'Frontend\UsersController@profileUpdate')->name('user.profile.update');


// Checkout Routes
Route::get('/kamiz_design', 'Frontend\DesignCheckoutController@kamiz_index')->name('user.designs.kamiz_design');

Route::post('/kamiz_design/store', 'Frontend\DesignCheckoutController@kamiz_store')->name('kamiz.store');

Route::get('/salwar_design', 'Frontend\DesignCheckoutController@salwar_index')->name('user.designs.salwar_design');

Route::post('/salwar_design/store', 'Frontend\DesignCheckoutController@kamiz_store')->name('salwar.store');

Route::get('/salwar_kamiz_design', 'Frontend\DesignCheckoutController@salwar_kamiz_index')->name('user.designs.salwar_kamiz_design');

Route::post('/salwar_kamiz_design/store', 'Frontend\DesignCheckoutController@kamiz_store')->name('salwar_kamiz.store');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


