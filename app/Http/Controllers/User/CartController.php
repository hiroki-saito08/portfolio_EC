<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Keep;
use App\Models\Cart;
use Auth;

class CartController extends Controller
{
    //カートページ
    public function index()
    {
        $user_id = Auth::id();

        $cart_products = Cart::where('user_id', $user_id)
            ->groupBy('product_id')
            // プロダクトIDの重複を削除
            ->select('product_id')->get();

        return view('products.cart', ['cart_products' => $cart_products]);
    }

    //カートに追加
    public function add(Request $request)
    {
        $user_id = Auth::id();
        $id = $request->id;

        Cart::insert([
            'user_id' => $user_id,
            'product_id' => $id
        ]);
        return redirect()->route('product.cart');
    }

    //カート内削除機能
    public function delete(Request $request)
    {
        $user_id = Auth::id();
        $delete_id = $request->id;

        Cart::where('user_id', $user_id)->where('product_id', $delete_id)->delete();

        return back();
    }

    // 購入確認画面
    public function check(Request $request)
    {
        $user = Auth::user();
        $data = $request;
        $cart_products = Cart::where('user_id', $user)
            ->groupBy('product_id')
            // プロダクトIDの重複を削除
            ->select('product_id')->get();

        return view('products.check', ['cart_products' => $cart_products, 'data' => $data]);
    }

    //購入履歴に追加
    public function purchase(Request $request)
    {
        $user_id = Auth::id();
        $cart_products = Cart::where('user_id', $user_id)->get();

        return redirect()->route('user.top');
    }

    //購入完了ページ
    public function complete()
    {
        return view('user.top');
    }

    //商品購入履歴ページ
    public function history()
    {
        $user = Auth::user();
        return view('user.top', compact('user'));
    }
}
