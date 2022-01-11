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

        // WOMENSに表示する商品を絞る機能
        $womens_products = Product::where('gender', 'mens_and_womens')->orWhere('gender', 'womens')->get();

        // MENSに表示する商品を絞る機能
        $mens_products = Product::where('gender', 'mens_and_womens')->orWhere('gender', 'mens')->get();

        // KIDSに表示する商品を絞る機能
        $kids_products = Product::where('category', 'kids')->get();

        // TRENDING NOWに表示する商品を絞る機能
        $trending_products = Product::where('category', 'trend')->get();

        return view('user.top', compact('user', 'all_products'));
    }

    //商品詳細ページ
    public function show($id)
    {
        $product = Product::find($id);
        return view('user.top', compact('products'));
    }

    //検索機能
    public function search(Request $request)
    {
        $user = Auth::user();
        $words = $request->input('words');
        $products = Product::where('name', 'like', '%' . $words . '%')->get();
        $keeps = Keep::where('user_id', $user->id)->get();

        return view('user.top', compact('products', 'keeps', 'user'));
    }
}
