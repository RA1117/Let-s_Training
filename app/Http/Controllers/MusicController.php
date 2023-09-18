<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Music;
use App\Models\Comment;
use App\Models\User;
use App\Models\Comment_User;

class MusicController extends Controller
{
   
    public function index(Music $music, Request $request)
    {
        $keyword = $request->input('keyword');

        $query = Music::query();
        
        if(!empty($keyword)) {
            $query->where('name', 'LIKE', "%{$keyword}%")->orwhere('artist', 'LIKE', "%{$keyword}%");
        }
        $Music = $query->orderby('average', 'DESC')->paginate(5);
        return view('music.index', compact('keyword', 'Music'));
    }
    
    public function create(Music $music, Comment $comment)
    {
        $music = $music->count()+1;
        $user = \Auth::user();
        //return view('music.create', compact('user', 'music'));
        return view('music.create', compact('comment', 'music', 'user'));
    }
    
    public function show(Music $music, Comment $comment)
    {
        $user = \Auth::user();
        $comment_user = $user->comments();
        return view('music.show')->with(['music' => $music, 'comments' => $comment->get(), 'user' => $user, 'comment_users' => $comment_user->get()]);
    }
    
    public function detail(Music $music, Comment $comment)
    {
        $user = \Auth::user();
        //$comment_user = $user->comments();
        $comment_user = $comment->users();
        //dd($comment_user);
        return view('music.detail')->with(['music' => $music, 'comment' => $comment, 'user' => $user, 'comment_users' => $comment_user->get()]);
    }
    
    public function register(Music $music)
    {
        $user = \Auth::user();
        return view('music.register')->with(['music' => $music, 'user' => $user]);
    }
    
    public function nice(Comment $comment)
    {
        $user = \Auth::user();
        $comment->users()->attach($user);
        return back();
    }
    
    public function unnice(Comment $comment)
    {
        $user = \Auth::user();
        $comment->users()->detach($user);
        return back();
    }
    
    
    public function store(Request $request, Music $music, Comment $comment)
    {
        $input_music = $request['music'];
        $music->fill($input_music)->save();
        $input_comment = $request['comment'];
        $comment->fill($input_comment)->save();
        $user = \Auth::user();
        //$comment->users()->attach($user);
        return redirect('/music/' . $music->id);
        //return redirect('/music');
    }
    
    public function store_2(Request $request, Comment $comment, Music $music)
    {
        $input = $request['comment'];
        $comment->fill($input)->save();
        $user = \Auth::user();
        //$comment->users()->attach($user);
        return redirect('/music/' . $music->id);
    }
    
}
