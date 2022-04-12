<?php

namespace App\Http\Controllers\Admin\Post;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;


class IndexController extends Controller
{
   public function __invoke(){

                
    $posts = Post::all();
    
return view('admin.posts.index', compact('posts'));

   }
}
