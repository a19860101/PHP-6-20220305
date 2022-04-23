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
        // $posts = DB::select('SELECT * FROM posts WHERE id = ?',[$id]);
        // $posts = DB::table('posts')->where('id',$id)->get();
        $post = DB::table('posts')->find($id);
        return view('post.show',compact('post'));

    }
    function edit($id){
        $post = DB::table('posts')->find($id);
        return view('post.edit',compact('post'));
    }
    function update(Request $request,$id){

        // DB::update('UPDATE posts set title=?,content=?,updated_at=? WHERE id = ?',[
        //     $request->title,
        //     $request->content,
        //     now(),
        //     $id
        // ]);

        DB::table('posts')->where('id',$id)->update([
            'title'     => $request->title,
            'content'   => $request->content,
            'updated_at'=> now(),
        ]);
        return redirect('post/'.$id);

    }
}
