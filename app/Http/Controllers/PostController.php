<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts= Post::all();
        return view('blog.main', [
        	'posts' => $posts
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
	    $post= $this->findBySlugName($slug);
	    dd($post);
    }


    private function findBySlugName($slug){
    	return Post::where('slug', $slug)->firstOrFail();
    }
}
