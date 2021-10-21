<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostFormRequest;
use App\Models\Post;
use Illuminate\Auth\Events\Validated;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //


    public function store(PostFormRequest $request )
    {
        // return $request;
        $validated = $request->validated();
        return $validated;
        Post::create($validated);
        // $request->validate([
        //     'body' => 'required|max:255|string|min:10',
        //     'likes' => 'required|integer',
        //     'views' => 'required|integer',
        //     'user_id' => 'required|integer'
        // ]);

        // Validator::make([

        // ]);

        
    }


    public function index()
    {
    return view('posts.add-post');
    }
}
