<?php

namespace App\Http\Controllers\Admin\Post;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\Store;

class StoreController extends Controller
{
   public function __invoke(Store $request){
     

$data = $request->validated();


$tags = $data['tags'];
unset($data['tags']);


$post = Post::firstOrCreate($data);
$post->tags()->attach($tags);

return redirect()->route('admin.post.index');

   }
}
