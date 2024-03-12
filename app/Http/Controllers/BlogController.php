<?php

namespace App\Http\Controllers;

use App\Models\Blog;

class BlogController extends Controller
{
    protected Blog $blog;

    public function __construct()
    {
        $this->blog = new Blog();
    }

    public function index()
    {
        $blogs = $this->blog->latest()->get();
        $most_blogs = $this->blog->orderByDesc('views')->limit('3')->get();
        return view('blog.blog',compact('blogs','most_blogs'));
    }

    public function single($blog_id)
    {
        $blog = $this->blog->find($blog_id);
        $most_blogs = $this->blog->orderByDesc('views')->limit('3')->get();
        return view('blog.blog-single',compact('blog','most_blogs'));
    }
}
