<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Keep;
use App\Models\Cart;
use Auth;

class ProductController extends Controller
{
    //ユーザーのトップページ
    public function index()
    {
        $user = Auth::user();

        // 全ての商品
        $all_products = Product::all();

        // 商品数
        // $products_count = Product::count();
        // ランダム抽出
        // $randomProduct = Product::inRandomOrder()->take($products_count)->get();

        return view('user.top', compact('user',));
    }

    public function products()
    {
        $user = Auth::user();

        // 全ての商品
        $all_products = Product::all();

        // WOMENSに表示する商品を絞る機能
        $womens_products = Product::where('gender', 'mens_and_womens')->orWhere('gender', 'womens')->get();

        // MENSに表示する商品を絞る機能
        $mens_products = Product::where('gender', 'mens_and_womens')->orWhere('gender', 'mens')->get();

        // KIDSに表示する商品を絞る機能
        $kids_products = Product::where('category', 'kids')->get();

        // TRENDING NOWに表示する商品を絞る機能
        $trending_products = Product::where('category', 'trend')->get();

        return view('user.products', compact('user', 'all_products'));
    }

    //商品詳細ページ
    // public function show($id)
    // {
    //     $product = Product::find($id);
    //     return view('user.products', compact('products'));
    // }

    //検索機能
    public function search(Request $request)
    {
        $user = Auth::user();
        $words = $request->input('words');
        $all_products = Product::where('name', 'like', '%' . $words . '%')->get();

        // 中身がなかったらメッセージ表示
        if ($all_products->count() == 0) {
            return redirect()->route('user.products')
                ->with('message', '該当の商品がありません');
        }

        return view('user.products', compact('all_products', 'user'));
    }
    //aタグからの検索機能
    public function a_search($category)
    {
        $user = Auth::user();
        $words = $category;
        $all_products = Product::where('category', 'like', '%' . $words . '%')->get();

        // 中身がなかったらメッセージ表示
        if ($all_products->count() == 0) {
            return redirect()->route('user.products')
                ->with('message', '該当の商品がありません');
        }

        return view('user.products', compact('all_products', 'user'));
    }
}
