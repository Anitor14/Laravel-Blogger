<?php

namespace App;

use App\Model\Like;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class PostLikeController extends Model
{
    // public function __construct(){

    //     $this->middleware(['auth']);
    // }
    public function store( Post $post, Request $request){
        if($post->likedBy($request->user())){
            return response(null,409);
        };
        // if($post->likedBy($request->$user()))
        $post->likes()->create([
            'user_id'=> $request->user()->id,
            
        ]);
        return back();
    }
    public function demolish(Post $post, Request $request){
        $request->user()->likes()->where('post_id', $post->id)->delete();
        // dd($post);
        return back();
    }

}
