<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Transformers\PostTransformer;
use Auth;

class PostController extends Controller
{
    public function add(Request $request, Post $post)
    {
        $this->validate($request, [
            'content' => 'required|min:10'
        ]);

        $post = $post->create([
            'user_id' => Auth::user()->id,
            'content' => $request->content
        ]);


        $response =  fractal()
            ->item($post)
            ->transformWith(new PostTransformer)
            ->toArray();

        return response()->json($response, 201);
    }

    public function update(Request $request, Post $post)
    {

        $this->authorize('update', $post);

        if (!$request->get('content')) {
            return response()->json(['error' => 'Content must be filled'], 401);
        }
        $post->content = $request->get('content');
        $post->save();

        $response = fractal()
            ->item($post)
            ->transformWith(new PostTransformer)
            ->toArray();

        return response()->json($response, 201);
    }

    public function delete(Post $post)
    {

        $this->authorize('delete', $post);

        $post->delete();
        return response()->json(['success' => 'post deleted'], 201);
    }
}
