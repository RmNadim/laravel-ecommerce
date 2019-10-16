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

Route::get('/',[
        'uses' => 'FrontController@index',
        'as' => '/'
    ]
);

Route::get('/category/products/{id}',[
        'uses' => 'FrontController@category',
        'as' => 'category'
    ]
);

Route::get('/product-details/{id}/{name}',[
    'uses' => 'FrontController@productDetails',
    'as' => 'product-details'
]);

Auth::routes();

Route::get('/home', [
    'uses' => 'HomeController@index',
    'as' => 'home'
    ]
);

Route::get('/category/add', [
    'uses' => 'CategoryController@index',
    'as' => 'add-category'
]);

Route::post('/category/save',[
    'uses' => 'CategoryController@saveCategory',
    'as' => 'new-category'
]);

Route::get('/category/manage',[
    'uses' => 'CategoryController@manageCategory',
    'as' => 'manage-category'
]);

Route::get('/category/unpublished/{id}',[
    'uses' => 'CategoryController@unpublishedCategory',
    'as' =>  'unpublished-category'
]);


Route::get('/category/published/{id}',[
    'uses' => 'CategoryController@publishedCategory',
    'as' =>  'published-category'
]);


Route::get('/category/edit/{id}',[
    'uses' => 'CategoryController@editCategory',
    'as' =>  'edit-category'
]);

Route::post('/category/update',[
    'uses' => 'CategoryController@updateCategory',
    'as' => 'update-category'
]);

Route::get('/category/delete/{id}',[
   'uses' => 'CategoryController@deleteCategory',
    'as' => 'delete-category'
]);
/*category end*/

/*brand start*/
Route::get('/brand/add', [
    'uses' => 'BrandController@index',
    'as' => 'add-brand'
]);

Route::post('/brand/save',[
    'uses' => 'BrandController@saveBrand',
    'as' => 'new-Brand'
]);

Route::get('/brand/manage',[
    'uses' => 'BrandController@manageBrand',
    'as' => 'manage-brand'
]);

Route::get('/brand/unpublished/{id}',[
    'uses' => 'BrandController@unpublishedBrand',
    'as' =>  'unpublished-brand'
]);


Route::get('/brand/published/{id}',[
    'uses' => 'BrandController@publishedBrand',
    'as' =>  'published-brand'
]);

Route::get('/brand/edit/{id}',[
    'uses' => 'BrandController@editBrand',
    'as' =>  'edit-brand'
]);

Route::post('/brand/update',[
    'uses' => 'BrandController@updateBrand',
    'as' => 'update-brand'
]);

Route::get('/brand/delete/{id}',[
    'uses' => 'BrandController@deleteBrand',
    'as' => 'delete-brand'
]);

/*brand end*/

/*product start*/

Route::get('/product/add', [
    'uses' => 'ProductController@index',
    'as' => 'add-product'
]);

Route::post('/product/save', [
    'uses' => 'ProductController@saveProduct',
    'as' => 'new-product'
]);

Route::get('/product/manage', [
    'uses' => 'ProductController@manageProduct',
    'as' => 'manage-product'
]);

Route::get('/product/unpublished/{id}',[
    'uses' => 'ProductController@unpublishedProduct',
    'as' =>  'unpublished-product'
]);


Route::get('/product/published/{id}',[
    'uses' => 'ProductController@publishedProduct',
    'as' =>  'published-product'
]);


Route::get('/product/edit/{id}',[
    'uses' => 'ProductController@editProduct',
    'as' =>  'edit-product'
]);

Route::post('/product/update',[
    'uses' => 'ProductController@updateProduct',
    'as' => 'update-product'
]);

Route::get('/product/delete/{id}',[
    'uses' => 'ProductController@deleteProduct',
    'as' => 'delete-product'
]);