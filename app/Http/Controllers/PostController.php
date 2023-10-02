<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;

use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    public function index(Post $post)
    {
        $user = \Auth::user();
        return view('posts/index', compact('user'))->with(['posts' => $post->getPaginateByLimit(10)]);
    }
    
    public function show(Post $post)
    {
        $user = \Auth::user();
        return view('posts/show', compact('user'))->with(['post' => $post]);
    }
    
    public function create()
    {
        $user = \Auth::user();
        return view('posts/create', compact('user'));
    }
    
    public function edit(Post $post)
    {
        $user = \Auth::user();
        return view('posts/edit', compact('user'))->with(['post' => $post]);
    }
    
    public function update(PostRequest $request, Post $post)
    {
        $input = $request['post'];
        
        if($request->file('file') != NULL)
        {   
            $dir = 'sample';
            $file_name = $request->file('file')->getClientOriginalName();
            $request->file('file')->storeAs('public/' . $dir, $file_name);
            $post->file_name = $file_name;
            $post->file_path = 'storage/' . $dir . '/' . $file_name;   
        }
        
        $post->fill($input)->save();
        
        //$post->save();
        return redirect('/posts/' . $post->id);
    }
    
    public function store(PostRequest $request, Post $post)
    {
        $input = $request['post'];
        
        if($request->file('file') != NULL)
        {   
            $dir = 'sample';
            $file_name = $request->file('file')->getClientOriginalName();
            $request->file('file')->storeAs('public/' , $file_name);
            $post->file_name = $file_name;
            $post->file_path = 'storage/' . $file_name;   
        }
        
        $post->fill($input)->save();
        
        //$post->save();
        return redirect('/posts/' . $post->id);
    }
    
    public function delete(Post $post)
    {
        $post->delete();
        return redirect('/');
    }
    
    
}
