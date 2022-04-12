<?php

namespace App\Http\Controllers\Admin\Post;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\Store;
use App\Http\Requests\Admin\Post\Update;


class UpdateController extends Controller
{
   public function __invoke(Update $request, Post $post){



    $data = $request->validated();

$post->update($data);

return view('admin.posts.show', compact('post'));

   }
}
