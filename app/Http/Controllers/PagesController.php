<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function  show(){

        $pages = DB::table('pages')->get();
        return view('pages.show', compact('pages'));

    }

    public function onepage( $page){

        return view('pages.onepage', compact('page'));
    }

    public function store(Request $request){

        $page = new Page;
        $page->title = $request->title;
        $page->save();
        return back();

    }

    public function delete(Page $page){

        $page->delete();
        return back();
    }
}
