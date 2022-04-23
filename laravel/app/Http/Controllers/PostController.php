<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PostController extends Controller
{
    //
    function index(){
        // $posts = DB::select('SELECT * FROM posts ORDER BY id DESC');

        $posts = DB::table('posts')->orderBy('id','DESC')->get();

        return view('post.index',compact('posts'));
        // return view('post.index')->with(['posts' => $posts]);
        // return view('post.index',['posts' => $posts]);

    }
    function create(){
        return view('post.create');
    }
    function store(Request $request){
        // return $request;
        // DB::insert('INSERT INTO posts(title,content,created_at,updated_at)VALUES(?,?,?,?)' ,[
        //     $request->title,$request->content,now(),now()
        // ]);
        DB::table('posts')->insert([
            'title'     => $request->title,
            'content'   => $request->content,
            'created_at'=> now(),
            'updated_at'=> now()
        ]);

        return redirect('/post');
    }
    function show($id){
        return $id;
    }
}
