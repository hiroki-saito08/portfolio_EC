@extends('layouts.appcopy')

@section('content')

@if($cart_products->count())

<div id="cart-parent">
  <div id="cart-left-box">
   @foreach ($cart_products as $cart_product)
   <form method="post" action="{{ route('user.cart.check') }}">
    @csrf

    <input type="hidden" name="product{{ $cart_product->product_id }}_id" value="{{ $cart_product->product_id }}" form="purchase_id">
      <div id="cart-box">
        <img src="{{ asset('/storage/'.$cart_product->product -> image_path) }}" alt="画像が登録されてません" id="cart-img">

        <div id="cart-value">
          <h1>{{ $cart_product->product->name }}</h1>
          <h1>¥{{ $cart_product->product->price }}</h1>
          <!-- 個数の変更機能 -->
          <select name="product{{ $cart_product->product_id }}_count" form="purchase_id">
            <option selected value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
          </select>

          <!-- サイズの選択機能 -->
          <select name="product{{ $cart_product->product_id }}_size" form="purchase_id">
            <option selected value="{{ $cart_product->product->size }}">{{ $cart_product->product->size }}</option>
            <option value="S">S</option>
            <option value="M">M</option>
            <option value="L">L</option>
          </select>

          <div id="cart-delete">
            <form method="post" action="{{ route('user.cart.delete',['id' => $cart_product->product_id]) }}">
              @csrf
              <!-- <input type="submit" value="削除" onclick="return confirm('削除してもよろしいでしょうか？')"> -->
              <button type="submit" id="cart-add-carts" onclick="return confirm('削除してもよろしいでしょうか？')">
                削除
              </button>
            </form>
          </div>
        </div>
      </div>
    </form>
    @endforeach
  </div>

  <div id="cart-side-box">
    <div id="cart-total">
      <h1>ご注文金額</h1>
      <div id="total-box">
        <div class="total-box-chil">
          <p>小計</p><p>¥</p>
        </div>
        <div class="total-box-chil">
          <p>配送手数料</p><p>¥0</p>
        </div>
        <div class="total-box-chil">
          <p>合計</p><p>¥</p>
        </div>
      </div>
    </div>
    
    <div id="buy-button-pare">
      <form id="purchase_id" method="post" action="{{ route('user.cart.check') }}">
        @csrf
        <button type="submit" id="buy-button">ご購入のお手続き</button>
      </form>
    </div>
  </div>
</div>

@else
カートに商品がありません。
@endif

@endsection
