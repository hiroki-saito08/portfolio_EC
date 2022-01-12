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

        $cart_products = Cart::where('user_id', $user_id)->get();

        return view('user.cart', compact('cart_products'));
    }

    //カートに追加
    public function add(Request $request, $id)
    {
        $user_id = Auth::id();

        // 重複チェック
        $already = Cart::where('user_id', $user_id)->where('product_id', $id)->exists();
        if ($already) {
            return redirect()->route('user.cart');
        };

        Cart::insert([
            'user_id' => $user_id,
            'product_id' => $id
        ]);
        return redirect()->route('user.products')
            ->with('message', '商品をカートに追加しました。');
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
        $user_id = Auth::id();
        $data = $request;
        $cart_products = Cart::where('user_id', $user_id)->get();
        // 合計値の設定が必要（productのprice）
        $total_price = 0;

        return view('user.check', compact('cart_products', 'data', 'total_price'));
    }

    //購入履歴に追加
    public function purchase(Request $request)
    {
        $user_id = Auth::id();
        $cart_products = Cart::where('user_id', $user_id)->get();
        // 処理内容未実装

        return redirect()->route('user.cart.completed');
    }

    //商品購入完了ページ
    public function completed()
    {
        return view('user.completed');
    }

    //商品購入履歴ページ
    public function history()
    {
        $user = Auth::user();
        return view('user.top', compact('user'));
    }
}
