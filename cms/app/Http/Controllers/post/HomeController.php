<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    public function index(){
        $posts=Post::all();
        return view('index', ['posts'=>$posts]);
    }
}
