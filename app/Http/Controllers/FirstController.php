<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\product;
use Illuminate\Http\Request;

class FirstController extends Controller
{
 public function MainPage()
 {
    $categories = Category::all();
    return view('welcome',['categories'=>$categories]);
 }
 public function GetAllCategoriywithProducts()
 {
    $categories = Category::all();
    $products = Product::all();

    return view('categories.category',['products' =>$products,'categories'=>$categories]);
}
public function GetCategoryProducts($catid = null){
 if ($catid)
{
    $products = Product::where('category_id' , $catid)->get();
    return view('product' , ['products'=>$products]);
}
else
{
    $products = Product::where('category_id' , $catid)->get();
    return view('product' , ['products'=>$products]);}
}
}