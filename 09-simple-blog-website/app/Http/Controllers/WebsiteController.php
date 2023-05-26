<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index(){
        return view('website.home.index', [
            'blogs' => Blog::all(),
        ]);
    }

    public function detail($id){
        return view('website.detail.index', [
            'blog' => Blog::find($id),
        ]);
    }
}
