<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Complete;
use App\Models\Keep;
use Auth;

class ProductController extends Controller
{
    //商品詳細ページ
    public function show()
    {
        return view('products.show');
    }

    public function history()
    {
        //$user = Auth::user();
        $user = 'App\Models\User'::find(1);
        return view('products.history', compact('user'));
    }

    public function index()
    {
        // $user_id = Auth::id();
        // $products = Product::all();
        // $keeps = Keep::where('user_id',$user_id)->get();
        return view('user.top');
    }

    public function search(Request $request)
    {
        $words = $request->input('words');
        // $products = Product::where('name', 'like', '%' . $words . '%')->get();
        // $keeps = Keep::where('user_id', 1)->get();
        return view('top', compact('products', 'keeps'));
    }
}
