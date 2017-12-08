<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('posts.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
		'title' => 'required',
		'post' => 'required']);
		
		//Create Post
		$post =  new Post;
		$post->title = $request->input('title');
		$post->post = $request->input('post');
		$post->user_id = auth()->user()->id;
		$post->save();
		
		return redirect('/posts')->with('success', 'Entry Created');
		
	}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
		$user_id = auth()->user()->id;
		$user = User::find($user_id);
		return view('posts.show')->with('post', $post)->with('posts', $user->posts);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $post = Post::find($id);
		 return view('posts.edit')->with('post', $post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
		'title' => 'required',
		'post' => 'required']);
		
		//Create Post
		$post = Post::find($id);
		$post->title = $request->input('title');
		$post->post = $request->input('post');
		$post->save();
		
		return redirect('/posts')->with('success', 'Entry Updated');
		
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
		$post->delete();
		
		return redirect('/posts')->with('success', 'Post Removed');
    }
}
