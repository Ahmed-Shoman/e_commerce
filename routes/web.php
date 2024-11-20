<?php

use App\Http\Controllers\FirstController;
use App\Http\Controllers\ProductController;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

route::get('/',[FirstController::class , 'MainPage']);
route::get('/category',[FirstController::class,'GetAllCategoriywithProducts'])->name('category.index');
route::get('/products',[FirstController::class,'GetCategoryProducts'])->name('products.show');
route::get('/addproduct',[ProductController::class,'AddProduct']) ->name('product.addproducts');
Route::post('/storeproduct', [ProductController::class, 'StoreProduct'])->name('storeproduct');