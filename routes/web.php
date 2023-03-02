<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SubCategoryController;

// fontend
Route::get('/', [FrontendController::class, 'index'])->name('index');

// others
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

//Users
Route::get('/users', [UserController::class, 'users'])->name('users');
Route::get('/user/delete/{user_id}', [UserController::class, 'user_delete'])->name('user.delete');
Route::get('/user/edit', [UserController::class, 'user_edit'])->name('user.edit');
Route::post('/user/profile/update', [UserController::class, 'user_profile_update'])->name('update.profile.info');
Route::post('/user/password/update', [UserController::class, 'user_password_update'])->name('update.password');
Route::post('/user/photo/update', [UserController::class, 'user_photo_update'])->name('update.photo');

//Category
Route::get('/category', [CategoryController::class, 'category'])->name('category');
Route::post('/category/store', [CategoryController::class, 'category_store'])->name('category.store');
Route::get('/category/delete/{category_id}', [CategoryController::class, 'category_delete'])->name('category.delete');
Route::get('/category/edit/{category_id}', [CategoryController::class, 'category_edit'])->name('category.edit');
Route::post('/category/update', [CategoryController::class, 'category_update'])->name('category.update');
Route::get('/category/restore/{category_id}', [CategoryController::class, 'category_restore'])->name('category.restore');
Route::get('/category/permanent/delete/{category_id}', [CategoryController::class, 'category_del'])->name('category.del');
Route::post('/category/checked/delete', [CategoryController::class, 'category_checked_delete'])->name('check.delete');

//Sub Category
Route::get('/subcategory', [SubCategoryController::class, 'subcategory'])->name('subcategory');
Route::post('/subcategory/store', [SubCategoryController::class, 'subcategory_store'])->name('subcategory.store');
Route::get('/subcategory/edit/{subcategory_id}', [SubCategoryController::class, 'subcategory_edit'])->name('subcategory.edit');
Route::post('/subcategory/update', [SubCategoryController::class, 'subcategory_update'])->name('subcategory.update');

// Brand
Route::get('/brand',[BrandController::class, 'brand'])->name('brand');
Route::post('/brand/store',[BrandController::class, 'brand_store'])->name('brand.store');


// Products
Route::get('/add/product',[ProductController::class, 'add_product'])->name('add.product');
Route::post('/getSubcategory',[ProductController::class, 'getSubcategory']);
Route::post('/product/store',[ProductController::class, 'product_store'])->name('product.store');
Route::get('/product/list',[ProductController::class, 'product_list'])->name('product.list');
Route::get('/product/edit/{product_id}',[ProductController::class, 'product_edit'])->name('product.edit');
Route::post('/product/update',[ProductController::class, 'product_update'])->name('product.update');

// Pruduct delete
Route::get('/product/delete',[ProductController::class, 'product_delete'])->name('product.delete');

