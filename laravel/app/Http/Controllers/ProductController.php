<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Str;
use Storage;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = Product::orderBy('started_at','DESC')->get();
        $trashes = Product::onlyTrashed()->get();
        return view('product.index',compact('products','trashes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('product.create');
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

        if($request->file('cover')){
            $ext = $request->file('cover')->getClientOriginalExtension();
            $img = Str::uuid().'.'.$ext;
            $request->file('cover')->storeAs('images',$img,'public');
        }else{
            $img = null;
        }
        $product = new Product;
        $product->fill($request->all());
        $product->cover = $img;
        $product->save();

        return redirect()->route('product.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
        return view('product.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
        $product->fill($request->all());
        $product->save();

        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
        $product->delete();

        return redirect()->back();
    }
    //前台商品列表頁
    public function list(){

        // $products = Product::orderBy('started_at','DESC')->get();

        $products = Product::where('started_at','<=',today())
        ->where('ended_at','>',today())
        ->orderBy('started_at','DESC')
        ->get();
        // return today()->toDateString();
        return view('product.list',compact('products'));
    }
    //前台商品頁
    public function detail($id){
        $product = Product::find($id);


        return view('product.detail',compact('product'));
    }
    // 還原商品
    public function restoreProduct($id){
        Product::onlyTrashed()->find($id)->restore();
        return redirect()->back();
    }

    //永久刪除
    public function forceDelete(Request $request){
        $product = Product::onlyTrashed()->find($request->id);
        if($product->cover){
            Storage::disk('public')->delete('images/'.$product->cover);
        }
        Product::onlyTrashed()->find($request->id)->forceDelete();
        return redirect()->back();
    }
}
