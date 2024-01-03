<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $nom="nathan";
        return view("blog.index", compact("nom"));
    }
}
