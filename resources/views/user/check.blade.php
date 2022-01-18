@extends('layouts.appcopy')

@section('content')
<h1 id="check-h1">ご購入のお手続き</h1>

<div id="check-top-box">
  <div id="check-box-up">
    <p>1.お届け先情報</p>
  </div>
  <div id="check-box-bottom">
    <p>配送先住所</p>
    <p>配送方法</p>
    <p>配送予定日</p>
  </div>
</div>

<div id="check-top-box">
  <div id="check-box-up">
    <p>2.お支払い方法</p>
  </div>
  <div id="check-box-bottom">
    <p>お支払い方法の選択</p>
      <input type="checkbox" id="scales" name="scales" checked>
      <label for="scales">クレジットカード</label>
      <input type="checkbox" id="scales" name="scales" >
      <label for="scales">コンビニ払い</label>
      <input type="checkbox" id="scales" name="scales" >
      <label for="scales">代金引換</label>
    <p>カードを追加</p>
  </div>
</div>

<div id="check-main-box">
  <div id="check-main-left">
    @foreach ($cart_products as $cart_product)
      <form method="post" action="{{ route('user.cart.purchase') }}">
        @csrf

        <div>
          <input type="hidden" name="product{{ $cart_product->product_id  }}_id" value="{{ $cart_product->product_id }}" form="purchase_id">
        </div>

        <div class="check-img-box">
          <img class="check-img" src="{{ asset('/storage/'.$cart_product->product -> image_path) }}" alt="画像が登録されてません">
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
            <div class="check-value">=¥{{ $cart_product->product->price * $data["product".$cart_product->product_id."_count"]}}</div>
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
