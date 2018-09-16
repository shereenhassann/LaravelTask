<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{

    public function  show(){

        $category = DB::table('products')->get();
        return view('product.show', compact('products'));

    }

    public function store(Request $request){

        $product= new Product();
        $product->title = $request->title;
        $product->save();
        return back();

    }

    public function delete(Product $product){

        $product->delete();
        return back();
    }
}
