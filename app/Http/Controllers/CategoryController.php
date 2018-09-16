<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function  show(){

        $category = DB::table('categories')->get();
        return view('category.show', compact('categories'));

    }

    public function store(Request $request){

        $category = new Category();
        $category->title = $request->title;
        $category->save();
        return back();

    }

    public function delete(Category $category){

        $category->delete();
        return back();
    }
}