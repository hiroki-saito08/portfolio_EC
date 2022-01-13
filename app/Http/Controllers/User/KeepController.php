<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Keep;
use App\Models\Cart;
use Auth;

class KeepController extends Controller
{
    //キープページ
    public function index()
    {
        $user_id = Auth::id();

        $keep_products = Keep::where('user_id', $user_id)
            ->groupBy('product_id')
            ->select('product_id')->get();

        return view('user.keep', compact('user_id', 'keep_products'));
    }

    //キープに追加
    public function add(Request $request)
    {

        $user_id = Auth::id();
        $id = $request->id;

        // 重複チェック
        $already = Keep::where('user_id', $user_id)->where('product_id', $id)->exists();
        if ($already) {
            return redirect()->route('user.products')
                ->with('message', 'この商品は既にお気に入り済みです。');
        };

        Keep::insert([
            'user_id' => $user_id,
            'product_id' => $id
        ]);

        return redirect()->route('user.products')
            ->with('message', '商品をお気に入りに追加しました。');
    }

    public function delete(Request $request, $id)
    {
        $user_id = Auth::id();

        Keep::where('user_id', $user_id)->where('product_id', $id)->delete();

        return back();
    }
}
