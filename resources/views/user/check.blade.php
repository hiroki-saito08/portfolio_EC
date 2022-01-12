@extends('layouts.appcopy')

@section('content')

<form method="post" action="{{ route('user.cart.purchase') }}">
  @csrf


@foreach ($cart_products as $cart_product)
  <input type="hidden" name="product_id" value="{{ $cart_product->product_id }}">

  <div><img src="{{ asset('/storage/'.$cart_product->product -> image_path) }}" alt="画像が登録されてません"></div>
  <div>{{ $cart_product->product->name }}</div>

  <!-- サイズの選択機能 -->
  <div>{{$data[$cart_product->product_id."_size"]}}サイズ</div>
  <input type="hidden" name="{{ $cart_product->product_id }}_size">

  <!-- 個数の表示 -->
  <div>{{$data[$cart_product->product_id."_count"]}}個</div>
  <input type="hidden" name="{{ $cart_product->product_id }}_count">

  <!-- 個数×値段 -->
  <div>=¥{{ $cart_product->product->price * $data[$cart_product->product_id."_count"]}}</div>

@endforeach

  ご請求額
  <div>¥{{$total_price}}</div>

  <input type="submit" value="注文確定">
</form>

@endsection
