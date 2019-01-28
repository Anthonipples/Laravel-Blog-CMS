<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function index(){
        $title = 'Create a blog post';
        return view('posts/create')->with('title',$title);
    }
}
