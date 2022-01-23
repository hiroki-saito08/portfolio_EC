<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\User;
use App\Models\Complete;

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
        $user = Auth::user();
        $user_id = Auth::id();
        $data = $request;

        $cart_products = Cart::where('user_id', $user_id)->get();

        // 合計値の設定が必要（productのprice）
        $prices = [];
        foreach ($cart_products as $cart_product) {
            $prices[] = $cart_product->product->price * $data["product" . $cart_product->product_id . "_count"];
        }
        $total_price = array_sum($prices);

        return view('user.check', compact('user', 'cart_products', 'data', 'total_price'));
    }

    //購入履歴に追加
    public function purchase(Request $request)
    {
        $user_id = Auth::id();
        $data = $request;

        $cart_products = Cart::where('user_id', $user_id)->get();

        // ユニークな購入IDとしてユーザーID＋日付を設定
        $purchase_group = $user_id . date(now());

        // 購入処理
        foreach ($cart_products as $cart_product) {
            $product_id = $data["product" . $cart_product->product_id . "_id"];
            $size = $data["product" . $cart_product->product_id . "_size"];
            $count = $data["product" . $cart_product->product_id . "_count"];

            Complete::insert([
                'user_id' => $user_id,
                'product_id' => $product_id,
                'size' => $size,
                'count' => $count,
                'purchase_group' => $purchase_group
            ]);
        }
        // 購入が終わったらカートの中身をデリート（ソフトデリート）
        Cart::where('user_id', $user_id)->delete();

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
