@extends('layouts.appcopy')

@section('content')

@if($cart_products->count())

<div id="cart-parent">
  <div id="cart-left-box">

  {{-- 先に配列を初期化 --}}
  <script>
      let array_price = {};
      let array_count = {};
  </script>

   @foreach ($cart_products as $cart_product)
   <form method="post" action="{{ route('user.cart.check') }}">
    @csrf

    <input type="hidden" name="product{{ $cart_product->product_id }}_id" value="{{ $cart_product->product_id }}" form="purchase_id">
      <div id="cart-box">
        <img src="{{ asset('/storage/'.$cart_product->product -> image_path) }}" alt="画像が登録されてません" id="cart-img">

        <div id="cart-value">
          <h1>{{ $cart_product->product->name }}</h1>
          <h1 id="pp">¥{{ $cart_product->product->price }}</h1>

          <!-- 個数の変更機能 -->
          <select name="product{{ $cart_product->product_id }}_count" form="purchase_id" id="{{ $cart_product->product_id }}">
            <option id="addvalue"  value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
          </select>

          <script>
            target = {{ $cart_product->product_id }};

            // 料金を連想配列に格納していく
              price = {{ $cart_product->product->price }};
              array_price[target] = price;

            // 繰り返しの数だけ1を入れていく、この時識別できるようにKeyをつける
              array_count[target] = 1;

            // セレクトボックスの値を拾う
            function inputCange() {
              // 定義し直さないと最後しか拾えない
              target = {{ $cart_product->product_id }};
              // 変更があったら再度連想配列に格納していく
              array_count[target] = document.getElementById(target).value;
            }
            // 呼び出しのトリガー
            text = document.getElementById(target);
            text.onchange = inputCange;
          </script>


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
          <p>小計</p><p id="small_price">¥</p>
        </div>
        <div class="total-box-chil">
          <p>配送手数料</p><p>¥0</p>
        </div>
        <div class="total-box-chil">
          <p>合計</p><p id="total_price">¥</p>
        </div>
      </div>
    </div>
    <script>
      // 格納したデータを取り出す
      // total_prices=[];
      // for (key in array_price){
      //   total_prices.push(array_price[key]);
      // }
      // total_counts=[];
      // for (key in array_count){
      //   total_counts.push(array_count[key]);
      // }
      // console.log(array_price)
      // let length = Object.keys(array_price).length;

      // const sumArray = array => {
      //   let sum = 0;
      //   for (let i = 0, len = array.length; i < len; i++) {
      //     sum += array[i];
      //   }
      //   return sum;
      // };

      // 連想配列のデータをそれぞれ掛け合わせたい
      // Keyは同じだからその値を掛け合わせたいてもう一度格納
      // その中の合計値を出せたら小計が出せる、、、

      // let price_sum = sumArray(total_prices);
      // let count_sum = sumArray(total_counts);

      // console.log(price_sum);
      // console.log(count_sum);

      // let small_price = price_sum * count_sum;
      // console.log(small_price);
      // document.getElementById("small_price").innerHTML=small_price;
    </script>

    <div id="buy-button-pare">
      <form id="purchase_id" method="post" action="{{ route('user.cart.check') }}">
        @csrf
        <button type="submit" id="buy-button">ご購入のお手続き</button>
      </form>
    </div>
  </div>
</div>

@else
<div id="cart-noinside">
  <h1>カートに商品がありません。</h1>
</div>
@endif

@endsection
