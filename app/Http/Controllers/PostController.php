<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        $function = Post::all();
        return view ('home2',['function'=>$function]);
    }
    public function Contact(){
        $function = Post::all();
        return view('Contact',['function'=>$function]);
    }
    public function OurTeam(){
        $function = Post::all();
        return view('OurTeam',['function'=>$function]);
    }
    public function Catalogs(){
        $function = Post::all();
        return view('Catalogs',['function'=>$function]);
    }
}
