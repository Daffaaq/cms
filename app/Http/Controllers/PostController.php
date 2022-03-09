<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        $function = Post::all();
        return view ('home',['function'=>$function]);
    }
}
