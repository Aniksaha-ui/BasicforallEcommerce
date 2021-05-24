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

Route::get('/', function () {
    return view('pages.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/user/logout','HomeController@logout')->name('user.logout');


//Admin Route

Route::get('admin/home', 'AdminController@index');
Route::get('admin','Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('admin','Admin\LoginController@login');

Route::get('admin/logout','AdminController@Logout')->name('admin.logout');



//Catagories

Route::get('/catagory','Admin\Category\CategoryController@category')->name('category');
Route::post('/admin/store/category','Admin\Category\CategoryController@storecategory')->name('store.category');
Route::get('delete/category/{id}','Admin\Category\CategoryController@Deletecategory');
Route::get('edit/category/{id}','Admin\Category\CategoryController@Editcategory');
Route::post('update/category/{id}','Admin\Category\CategoryController@Updatecategory');


//Brands
Route::get('admin/brand','Admin\Category\BrandController@Brand')->name('brands');
Route::post('/admin/store/brand','Admin\Category\BrandController@storeBrand')->name('store.brand');
Route::get('delete/brand/{id}','Admin\Category\BrandController@DeleteBrand');	
Route::get('edit/brand/{id}','Admin\Category\BrandController@EditBrand');
Route::post('update/brand/{id}','Admin\Category\BrandController@UpdateBrand');



//subcategory

Route::get('admin/sub/catagory','Admin\Category\SubCategoryController@SubCategories')->name('sub.category');
Route::post('/admin/store/subcat','Admin\Category\SubCategoryController@StoreSubCat')->name('store.subcategory');
Route::get('delete/subcategory/{id}','Admin\Category\SubCategoryController@DeleteSubCat');	
Route::get('edit/subcategory/{id}','Admin\Category\SubCategoryController@EditSubCat');
Route::post('update/subcategory/{id}','Admin\Category\SubCategoryController@UpdateSubCat');


//Coupon 

Route::get('admin/sub/coupon','Admin\Category\CouponController@Coupon')->name('admin.coupon');
Route::post('/admin/store/coupon','Admin\Category\CouponController@StoreCoupon')->name('store.coupon'); 
Route::get('delete/coupon/{id}','Admin\Category\CouponController@DeleteCoupon');
Route::get('edit/coupon/{id}','Admin\Category\CouponController@EditCoupon');
Route::post('update/coupon/{id}','Admin\Category\CouponController@UpdateCoupon');


//Newslater

Route::get('admin/newslater','Admin\Category\CouponController@Newslater')->name('admin.newslater');
Route::get('delete/newslater/{id}', 'Admin\Category\CouponController@DeleteSub');

// from show subcategory with ajax
Route::get('get/subcategory/{category_id}', 'Admin\ProductController@GetSubcat');


//Product ALL Route

Route::get('admin/product/all','Admin\ProductController@index')->name('all.product');
Route::get('admin/product/add','Admin\ProductController@create')->name('add.product');
Route::post('admin/store/product', 'Admin\ProductController@store')->name('store.product');

Route::get('inactive/product/{id}', 'Admin\ProductController@inactive');
Route::get('active/product/{id}', 'Admin\ProductController@active');
Route::get('delete/product/{id}', 'Admin\ProductController@DeleteProduct');

//Fontend all route

Route::post('store/newslater', 'FontEndController@StoreNewslater')->name('store.newslater');



