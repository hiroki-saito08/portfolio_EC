<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //管理者TOPページ（元welcomページ）
        return view('admin.top');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //商品登録ページ
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user();

        //バリデーション
        $request->validate([
            'name' => ['required', 'string', 'max:20'],
            'price' => ['required', 'integer'],
            'image_path' => ['required', 'string', 'max:20'],
            'size' => ['required', 'alpha', 'max:5'],
            'category' => ['required', 'string', 'max:20'],
        ]);

        //商品作成処理
        Product::create([
            'admin_id' => $user->id,
            'name' => $request->name,
            'price' => $request->price,
            'image_path' => $request->image_path,
            'size' => $request->size,
            'category' => $request->category,
        ]);

        // フラッシュメッセージ
        return redirect()
            ->route('admin.create')
            ->with('message', '商品を登録しました。');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
