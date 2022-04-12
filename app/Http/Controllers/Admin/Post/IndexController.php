<?php

namespace App\Http\Controllers\Admin\Post;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;


class IndexController extends Controller
{
   public function __invoke(){


    $posts = Post::all();


return view('admin.posts.index', compact('posts'));

   }
}
