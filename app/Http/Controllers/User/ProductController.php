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
        $products = Product::all();
        // $keeps = Keep::where('user_id',$user_id)->get();
        return view('user.top', compact('user', 'products'));
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
