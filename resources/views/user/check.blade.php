@extends('layouts.appcopy')

@section('content')

@foreach ($cart_products as $cart_product)

  <div id="check-main-box">
    <form method="post" action="{{ route('user.cart.purchase') }}">
      @csrf

      <div><input type="hidden" name="product{{ $cart_product->product_id  }}_id" value="{{ $cart_product->product_id }}" form="purchase_id"></div>

      <div><img src="{{ asset('/storage/'.$cart_product->product -> image_path) }}" alt="画像が登録されてません"></div>
      <div>{{ $cart_product->product->name }}</div>

      <!-- サイズの選択機能 -->
      <div>{{$data["product".$cart_product->product_id."_size"]}}サイズ</div>
      <div><input type="hidden" name="product{{ $cart_product->product_id }}_size" value="{{$data["product".$cart_product->product_id."_size"]}}" form="purchase_id"></div>

      <!-- 個数の表示 -->
      <div>{{$data["product".$cart_product->product_id."_count"]}}個</div>
      <div><input type="hidden" name="product{{ $cart_product->product_id }}_count" value="{{$data["product".$cart_product->product_id."_count"]}}" form="purchase_id"></div>

      <!-- 個数×値段 -->
      <div>=¥{{ $cart_product->product->price * $data["product".$cart_product->product_id."_count"]}}</div>

    </form>
  </div>

@endforeach

  ご請求額
  <div>¥{{$total_price}}</div>

  <div>
    <form id="purchase_id" method="post" action="{{ route('user.cart.purchase') }}">
      @csrf
      <input type="submit" value="商品を購入する">
    </form>
  </div>

<br>
<br>
<br>
<br>
<br>
@endsection
