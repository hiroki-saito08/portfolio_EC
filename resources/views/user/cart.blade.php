@extends('layouts.appcopy')

@section('content')

@foreach ($cart_products as $cart_product)

<form method="post" action="{{ route('user.cart.check') }}">
  @csrf

  <input type="hidden" name="product_id" value="{{ $cart_product->product_id }}" form="purchase_id">
  <img src="{{ asset('/storage/'.$cart_product->product -> image_path) }}" alt="画像が登録されてません">
  {{ $cart_product->product->name }}
  ¥{{ $cart_product->product->price }}

  <!-- 個数の変更機能 -->
  <select name="{{ $cart_product->product_id }}_count" form="purchase_id">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
  </select>

  <!-- サイズの選択機能 -->
  <select name="{{ $cart_product->product_id }}_size" form="purchase_id">
    <option value="S">S</option>
    <option value="M">M</option>
    <option value="L">L</option>
  </select>

</form>

<form method="post" action="{{ route('user.cart.delete',['id' => $cart_product->product_id]) }}">
  @csrf
  <input type="submit" value="❌" onclick="return confirm('削除してもよろしいでしょうか？')">
</form>

@endforeach

<form id="purchase_id" method="post" action="{{ route('user.cart.check') }}">
  @csrf
  <input type="submit" value="最終確認へ">
</form>

@endsection
