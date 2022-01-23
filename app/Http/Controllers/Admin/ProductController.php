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
            'etc' => [],
        ]);

        //画像保存処理
        // 拡張子を含めたファイル名を取得
        $OriginalName = $request->file('image_path')->getClientOriginalName();
        // ファイルの前に性別をつける
        $file_name = $request->gender . '/' . $OriginalName;
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
            'etc' => $request->etc,
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
        $product = Product::where('id', $id)->first();
        //商品編集ページ
        return view('admin.products_edit', compact('product'));
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
        $admin = Auth::user();
        $admin_id = $admin->id;
        $product = Product::find($id);

        //バリデーション
        $request->validate([
            'name' => ['required', 'string', 'max:20'],
            'price' => ['required', 'integer'],
            'size' => ['required', 'alpha'],
            'category' => ['required', 'string', 'max:20'],
            'gender' => ['required', 'string',]
        ]);

        //画像保存処理
        // 拡張子を含めたファイル名を取得
        if (!empty($request->image_path)) {
            $OriginalName = $request->file('image_path')->getClientOriginalName();
            // ファイルの前に性別をつける
            $file_name = $request->gender . '/' . $OriginalName;
            //ファイルを保存
            $request->file("image_path")->storeAs("public", $file_name);
        } else {
            $file_name = $product->image_path;
        }

        //商品更新処理
        $product->admin_id = $admin_id;
        $product->name = $request->name;
        $product->size = $request->size;
        $product->category = $request->category;
        $product->gender = $request->gender;
        $product->image_path = $file_name;
        $product->etc = $request->etc;
        $product->save();

        // フラッシュメッセージ
        return redirect()
            ->route('admin.product.edit', compact('id'))
            ->with('message', '商品を更新しました。');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        //商品を削除
        $product_id = $id;

        Product::where('id', $product_id)->delete();


        // フラッシュメッセージ
        return redirect()
            ->route('admin.top')
            ->with('message', '商品を削除しました。');
    }
}
