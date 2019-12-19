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

Route::get('/salwar_kamiz_design','Frontend\userDesignController@salwar_kamiz')->name('user.designs.salwar_kamiz');
Route::get('/salwar_design','Frontend\userDesignController@salwar')->name('user.designs.salwar');
Route::get('/kamiz_design','Frontend\userDesignController@kamiz')->name('user.designs.kameez');


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

  // kameez_front Routes
  Route::group(['prefix' => '/kameez_front'], function(){
    Route::get('/', 'Backend\KameezFrontController@index')->name('admin.kameez_front');
    Route::get('/create', 'Backend\KameezFrontController@create')->name('admin.kameez_front.create');
    Route::get('/edit/{id}', 'Backend\KameezFrontController@edit')->name('admin.kameez_front.edit');

    Route::post('/store', 'Backend\KameezFrontController@store')->name('admin.kameez_front.store');

    Route::post('/kameez_front/edit/{id}', 'Backend\KameezFrontController@update')->name('admin.kameez_front.update');
    Route::post('/kameez_front/delete/{id}', 'Backend\KameezFrontController@delete')->name('admin.kameez_front.delete');
  });

  // kameez_back Routes
  Route::group(['prefix' => '/kameez_back'], function(){
    Route::get('/', 'Backend\KameezBackController@index')->name('admin.kameez_back');
    Route::get('/create', 'Backend\KameezBackController@create')->name('admin.kameez_back.create');
    Route::get('/edit/{id}', 'Backend\KameezBackController@edit')->name('admin.kameez_back.edit');

    Route::post('/store', 'Backend\KameezBackController@store')->name('admin.kameez_back.store');

    Route::post('/kameez_back/edit/{id}', 'Backend\KameezBackController@update')->name('admin.kameez_back.update');
    Route::post('/kameez_back/delete/{id}', 'Backend\KameezBackController@delete')->name('admin.kameez_back.delete');
  });

  // neck_front Routes
  Route::group(['prefix' => '/neck_front'], function(){
    Route::get('/', 'Backend\NeckFrontController@index')->name('admin.neck_front');
    Route::get('/create', 'Backend\NeckFrontController@create')->name('admin.neck_front.create');
    Route::get('/edit/{id}', 'Backend\NeckFrontController@edit')->name('admin.neck_front.edit');

    Route::post('/store', 'Backend\NeckFrontController@store')->name('admin.neck_front.store');

    Route::post('/neck_front/edit/{id}', 'Backend\NeckFrontController@update')->name('admin.neck_front.update');
    Route::post('/neck_front/delete/{id}', 'Backend\NeckFrontController@delete')->name('admin.neck_front.delete');
  });

  // neck_back Routes
  Route::group(['prefix' => '/neck_back'], function(){
    Route::get('/', 'Backend\NeckBackController@index')->name('admin.neck_back');
    Route::get('/create', 'Backend\NeckBackController@create')->name('admin.neck_back.create');
    Route::get('/edit/{id}', 'Backend\NeckBackController@edit')->name('admin.neck_back.edit');

    Route::post('/store', 'Backend\NeckBackController@store')->name('admin.neck_back.store');

    Route::post('/neck_back/edit/{id}', 'Backend\NeckBackController@update')->name('admin.neck_back.update');
    Route::post('/neck_back/delete/{id}', 'Backend\NeckBackController@delete')->name('admin.neck_back.delete');
  });

  // sleeves Routes
  Route::group(['prefix' => '/sleeves'], function(){
    Route::get('/', 'Backend\SleevesController@index')->name('admin.sleeves');
    Route::get('/create', 'Backend\SleevesController@create')->name('admin.sleeves.create');
    Route::get('/edit/{id}', 'Backend\SleevesController@edit')->name('admin.sleeves.edit');

    Route::post('/store', 'Backend\SleevesController@store')->name('admin.sleeves.store');

    Route::post('/sleeves/edit/{id}', 'Backend\SleevesController@update')->name('admin.sleeves.update');
    Route::post('/sleeves/delete/{id}', 'Backend\SleevesController@delete')->name('admin.sleeves.delete');
  });

  // bottom Routes
  Route::group(['prefix' => '/bottom'], function(){
    Route::get('/', 'Backend\BottomController@index')->name('admin.bottom');
    Route::get('/create', 'Backend\BottomController@create')->name('admin.bottom.create');
    Route::get('/edit/{id}', 'Backend\BottomController@edit')->name('admin.bottom.edit');

    Route::post('/store', 'Backend\BottomController@store')->name('admin.bottom.store');

    Route::post('/bottom/edit/{id}', 'Backend\BottomController@update')->name('admin.bottom.update');
    Route::post('/bottom/delete/{id}', 'Backend\BottomController@delete')->name('admin.bottom.delete');
  });

  // Slider Routes
  Route::group(['prefix' => '/sliders'], function(){
    Route::get('/', 'Backend\SlidersController@index')->name('admin.sliders');
    Route::post('/store', 'Backend\SlidersController@store')->name('admin.slider.store');
    Route::post('/slider/edit/{id}', 'Backend\SlidersController@update')->name('admin.slider.update');
    Route::post('/slider/delete/{id}', 'Backend\SlidersController@delete')->name('admin.slider.delete');
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
/*Route::group(['prefix' => 'checkout_design'], function(){
Route::get('/', 'Frontend\CheckoutsController@design_index')->name('checkoutsDesign');
Route::post('/store', 'Frontend\CheckoutsController@design_store')->name('checkoutsDesign.store');
});*/


//user
Route::post('/dashboard','Frontend\userDesignController@dashboard')->name('user.kamiz_design');
Route::get('/dashboard','Frontend\UsersController@dashboard')->name('user.dashboard');
Route::get('/profile', 'Frontend\UsersController@profile')->name('user.profile');
Route::post('/profile/update', 'Frontend\UsersController@profileUpdate')->name('user.profile.update');


// Checkout Routes
Route::get('/kamiz_design', 'Frontend\DesignCheckoutController@kamiz_index')->name('user.designs.kamiz_design');

Route::post('/kamiz_design/store', 'Frontend\DesignCheckoutController@kamiz_store')->name('kamiz.store');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


