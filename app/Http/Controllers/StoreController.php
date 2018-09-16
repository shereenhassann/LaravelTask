<?php

namespace App\Http\Controllers;

use App\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function  show(){

        $store = DB::table('stores')->get();
        return view('store.show', compact('stores'));

    }

    public function store(Request $request){

        $store = new Store();
        $store->title = $request->title;
        $store->save();
        return back();

    }

    public function delete(Store $store){

        $store->delete();
        return back();
    }
}
