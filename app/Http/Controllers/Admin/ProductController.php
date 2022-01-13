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
        $products = Product::all();
        //管理者TOPページ
        return view('admin.top', compact('products'));
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
            'size' => ['required', 'alpha'],
            'category' => ['required', 'string', 'max:20'],
            'gender' => ['required', 'string',],
            'image_path' => ['required'],
        ]);

        //画像保存処理
        // 拡張子を含めたファイル名を取得
        $file_name = $request->file('image_path')->getClientOriginalName();
        //ファイルを保存
        $request->file("image_path")->storeAs("public", $file_name);

        //商品作成処理
        Product::create([
            'admin_id' => $user->id,
            'name' => $request->name,
            'price' => $request->price,
            'size' => $request->size,
            'category' => $request->category,
            'gender' => $request->gender,
            'image_path' => $file_name,
        ]);

        // フラッシュメッセージ
        return redirect()
            ->route('admin.product.create')
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
