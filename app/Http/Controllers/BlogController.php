<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index(){
        $data = Blog::getData();
        return view('blog', ['data' => $data]);
    }

    public function viewById($id){
        $single = Blog::byId($id);
        return view('singleBlog', ['data' => $single]);
    }
    
}
