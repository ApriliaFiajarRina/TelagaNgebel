<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::orderBy('published_at', 'desc')->get();

        return view('blog', ['blogs' => $blogs]);
    }
}
