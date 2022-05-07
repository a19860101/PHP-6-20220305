<?php

namespace App\Http\Controllers;

use App\Post;
use App\Category;
use App\Tag;
use Illuminate\Http\Request;
use Str;
use Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $posts = Post::orderBy('id','DESC')->get();
        $newPosts = Post::orderBy('id','DESC')->limit(5)->get();
        $categories = Category::get();
        return view('post.index',compact('posts','newPosts','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::get();
        return view('post.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // $post = new Post;
        // $post->title = $request->title;
        // $post->content = $request->content;
        // $post->save();

        // $post = new Post;
        // $post->fill([
        //     'title'     => $request->title,
        //     'content'   => $request->content
        // ]);
        // $post->save();

        if($request->file('cover')){
            $ext = $request->file('cover')->getClientOriginalExtension();
            $img = Str::uuid().'.'.$ext;
            $request->file('cover')->storeAs('images',$img,'public');
        }else{
            $img = null;
        }


        $post = new Post;
        $post->fill($request->all());
        $post->cover = $img;
        $post->user_id = Auth::id();
        $post->save();

        $tags = explode(',',$request->tag);
        foreach($tags as $tag){
            $t = Tag::firstOrCreate(['title' => $tag]);
            $post->tags()->attach($t->id);
        }


        // Post::create($request->all());

        // Post::create([
        //     'title'     => $request->title,
        //     'content'   => $request->content
        // ]);

        return redirect()->route('post.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('post.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
        $categories = Category::get();
        $tags = [];
        foreach($post->tags as $tag){
            $tags[] = $tag->title;

        }
        $tags = implode(',',$tags);
        return view('post.edit',compact('post','categories','tags'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
        $post->fill($request->all());
        $post->save();

        $post->tags()->detach();
        $tags = explode(',',$request->tag);
        foreach($tags as $tag){
            $t = Tag::firstOrCreate(['title' => $tag]);
            $post->tags()->attach($t->id);
        }

        // return redirect()->back();
        return redirect()->route('post.show',['post'=>$post->id]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
        // $post->find($post->id)->delete();

        $post->delete();

        // Post::destroy($post->id);

        return redirect()->route('post.index');
    }
    public function upload(){
        $ext = request()->file('file')->getClientOriginalExtension();
        $img = Str::uuid().'.'.$ext;
        request()->file('file')->storeAs('images',$img,'public');

        return response()->json(['location' => '/storage/images/'.$img]);
    }
    public function postWithCategory($id){
        $postCategories = Post::where('category_id',$id)->get();
        $categories = Category::get();
        $newPosts = Post::orderBy('id','DESC')->limit(5)->get();

        return view('post.postCategory',compact('postCategories','categories','newPosts'));
    }
}
