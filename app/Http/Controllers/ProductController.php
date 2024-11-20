<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function AddProduct()
    {
        $allcategories = Category::all();
        return view('product.addproducts',['allcategories'=>$allcategories]);
    }


    public function StoreProduct(Request $request)
    {
         $validatedData = $request->validate([
        'name' => ['required', 'unique:products', 'max:100'],
        'category_id'=>['required'],
        'price' => ['required', 'numeric'],
        'quantity' => ['required', 'integer'],
        'subject'=>['required'],
        'description'=>['required'],
        'imagepath'=>['required']
    ]);

    $newProduct = new Product();
    $newProduct->name = $validatedData['name'];
    $newProduct->price = $validatedData['price'];
    $newProduct->quantity = $validatedData['quantity'];
    $newProduct->description = $request->description ;
    $newProduct->imagepath = $request->imagepath;
    $newProduct->category_id = $request->category_id;

    $newProduct->save();
    return redirect()->route('product.addproducts')->with('success', 'تم تسجيل المنتج بنجاح');
    }
}
