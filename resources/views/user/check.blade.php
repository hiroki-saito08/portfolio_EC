@extends('layouts.appcopy')

@section('content')
<h1 id="check-h1">ご購入のお手続き</h1>

<div id="check-top-box">
  <div id="check-box-up">
    <p>1.お届け先情報</p>
  </div>
  <div id="check-box-bottom">
    <div class="check-form">
      <label>配送先住所：</label>
      <input class="check-form-textarea" type="textarea">
    </div>
    <div class="check-form">
      <label>配送方法：</label>
      <select class="" name="">
        <option value="">郵送</option>
        <option value="">店舗受け取り</option>
        <option value="">置き配を利用する</option>
      </select>
    </div>
    <div class="check-form">
      <label>配送予定日：</label>
      <input class="" type="date" name="">
    </div>
  </div>
</div>

<div id="check-top-box">
  <div id="check-box-up">
    <p>2.お支払い方法</p>
  </div>
  <div id="check-box-bottom">
    <p class="payment-label">お支払い方法の選択</p>
    <div class="for-payment">
      <input type="radio" id="payment" name="payment" checked>
      <label for="payment">クレジットカード</label>
      <input type="radio" id="payment" name="payment" >
      <label for="payment">コンビニ払い</label>
      <input type="radio" id="payment" name="payment" >
      <label for="payment">代金引換</label>
    </div>
  </div>
</div>

<div id="check-main-box">
  <div id="check-main-left">
    @foreach ($cart_products as $cart_product)
      {{-- imgファイル設定 --}}
      @php
        if (file_exists('images/'.$cart_product->product -> image_path)) {
          $img = asset('/images/'.$cart_product->product -> image_path);
        }else{
          $img = asset('/storage/'.$cart_product->product -> image_path);
        }
      @endphp

      <form method="post" action="{{ route('user.cart.purchase') }}">
        @csrf

        <div>
          <input type="hidden" name="product{{ $cart_product->product_id  }}_id" value="{{ $cart_product->product_id }}" form="purchase_id">
        </div>

        <div class="check-img-box">
          <img class="check-img" src="{{ $img }}" alt="画像が登録されてません">
          <div class="check-img-right">
            <div class="check-value">{{ $cart_product->product->name }}</div>

            <!-- サイズの選択機能 -->
            <div class="check-value">{{$data["product".$cart_product->product_id."_size"]}}サイズ</div>
            <div class="check-value">
              <input type="hidden" name="product{{ $cart_product->product_id }}_size" value="{{$data["product".$cart_product->product_id."_size"]}}" form="purchase_id">
            </div>

            <!-- 個数の表示 -->
            <div class="check-value">{{$data["product".$cart_product->product_id."_count"]}}個</div>
            <div class="check-value">
              <input type="hidden" name="product{{ $cart_product->product_id }}_count" value="{{$data["product".$cart_product->product_id."_count"]}}" form="purchase_id">
            </div>

            <!-- 個数×値段 -->
            <div class="check-value">¥{{ $cart_product->product->price * $data["product".$cart_product->product_id."_count"]}}</div>
          </div>
        </div>


      </form>
      @endforeach
  </div>

  <div id="check-cart-total">
      <h1>ご注文金額</h1>
      <div id="total-box">
        @foreach ($cart_products as $cart_product)
        <div class="total-box-chil">
          <p>小計&nbsp;×&nbsp;{{$data["product".$cart_product->product_id."_count"]}}</p>
          <p>¥{{ $cart_product->product->price * $data["product".$cart_product->product_id."_count"]}}</p>
        </div>
        @endforeach
        <div class="total-box-chil">
          <p>配送手数料</p><p>¥0</p>
        </div>
        <div class="total-box-chil">
          <p>合計</p><p>¥{{$total_price}}</p>
        </div>
      </div>
    </div>
  <div>
</div>
</div>

<div id="buy-confirm">
  <form id="purchase_id" method="post" action="{{ route('user.cart.purchase') }}">
    @csrf
    <button type="submit" id="buy-button-confirm">商品を購入する</button>
  </form>
</div>

@endsection
