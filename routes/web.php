<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProviderController;
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



Auth::routes();
Route::get('/', [HomeController::class, 'welcome'])->name('welcome');
Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('/orders', [HomeController::class, 'Orders'])->name('orders')->middleware('auth');
Route::get('/addOrders', [HomeController::class, 'addOrders'])->name('addOrders')->middleware('auth');
Route::post('CreateOrder',[HomeController::class,'CreateOrder'])->name('CreateOrder')->middleware('auth');
Route::post('DeleteOrder/{id}',[HomeController::class,'DeleteOrder'])->name('DeleteOrder')->middleware('auth');
Route::post('AcceptOrder/{id}',[HomeController::class,'AcceptOrder'])->name('AcceptOrder')->middleware('auth');

Route::get('/productts', [HomeController::class, 'productts'])->name('productts');
Route::get('/details/{id}', [HomeController::class, 'details'])->name('details');


Route::get('/profile', [HomeController::class, 'profile'])->name('profile')->middleware('auth');
Route::post('SaveProfile',[HomeController::class,'SaveProfile'])->name('SaveProfile')->middleware('auth');

//Providers Routes

Route::get('/providers', [ProviderController::class, 'getprovider'])->name('providers')->middleware('auth');
Route::post('AddProvider',[ProviderController::class,'AddProvider'])->name('AddProvider')->middleware('auth');
Route::get('CreateProvider',[ProviderController::class,'CreateProvider'])->name('CreateProvider')->middleware('auth');
Route::post('/DeleteProvider/{id}',[ProviderController::class,'DeleteProvider'])->middleware('auth');


//Products Routes
Route::get('/notavailable',[ProductController::class,'NotAvaialable'])->name('notavailable')->middleware('auth');
Route::post('/Available/{id}',[ProductController::class,'Avaialable'])->name('Available')->middleware('auth');

Route::get('/products',[ProductController::class,'index'])->name('productsIndex')->middleware('auth');
Route::get('/Addproduct',[ProductController::class,'create'])->name('addProduct')->middleware('auth');
Route::get('/Editproduct/{id}',[ProductController::class,'edit'])->name('editProduct')->middleware('auth');

Route::post('Createproduct',[ProductController::class,'StoreProduct'])->name('CreateProduct')->middleware('auth');
Route::post('Deleteteproduct/{id}',[ProductController::class,'deleteProduct'])->name('DeleteProduct')->middleware('auth');
Route::post('/UpdateProduct/{id}',[ProductController::class,'UpdateProduct'])->middleware('auth');
Route::post('NotAvailable/{id}',[ProductController::class,'NotAvailableProduct'])->name('NotAvailable')->middleware('auth');

Route::get('products/list', [ProductController::class, 'getProducts'])->name('productsList');



