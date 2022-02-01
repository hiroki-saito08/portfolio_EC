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

    {{-- imgファイル設定 --}}
    @php
      if (file_exists(asset('/images/'.$cart_product->product -> image_path))) {
        $img = asset('/images/'.$cart_product->product -> image_path);
      }else{
        $img = asset('/storage/'.$cart_product->product -> image_path);
      }
    @endphp

   <form method="post" action="{{ route('user.cart.check') }}">
    @csrf

    <input type="hidden" name="product{{ $cart_product->product_id }}_id" value="{{ $cart_product->product_id }}" form="purchase_id">
      <div id="cart-box">
        <img src="{{ $img }}" alt="画像が登録されてません" id="cart-img">

        <div id="cart-value">
          <h1>{{ $cart_product->product->name }}</h1>
          <h1>¥{{ $cart_product->product->price }}</h1>

          <!-- 個数の変更機能 -->
          <select name="product{{ $cart_product->product_id }}_count" form="purchase_id" id="{{ $cart_product->product_id }}">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
          </select>

          <script>
            // 商品IDでデータを拾う
            target = {{ $cart_product->product_id }};

            // IDで識別できるように連想配列に格納していく
              price = {{ $cart_product->product->price }};
              array_price[target] = price;

            // 繰り返しの数だけ1を入れていく
              array_count[target] = 1;

            // セレクトボックスの値を拾う
            function inputCange() {
              console.log("個数に変更がありました。")
              // ここで定義し直さないと繰り返しの最後の値しか拾えない
              target = {{ $cart_product->product_id }};
              // 変更があったら再度連想配列に格納していく
              array_count[target] = document.getElementById(target).value;
              // 最後にデータ計算の関数を呼び出し
              total_price_checker();
            }
            // 呼び出しのトリガー
            text = document.getElementById(target);
            text.onchange = inputCange;
          </script>

          <!-- サイズの選択機能 -->
          <select name="product{{ $cart_product->product_id }}_size" form="purchase_id" >
            <option selected value="{{ $cart_product->product->size }}">{{ $cart_product->product->size }}</option>
            <option value="S">S</option>
            <option value="M">M</option>
            <option value="L">L</option>
          </select>
        </form>

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
    @endforeach
  </div>

  <div id="cart-side-box">
    <div id="cart-total">
      <h1>ご注文金額</h1>
      <div id="total-box">
        <div class="total-box-chil">
          <p>小計</p><p>¥<span id="small_price"></span></p>
        </div>
        <div class="total-box-chil">
          <p>配送手数料</p><p>¥0</p>
        </div>
        <div class="total-box-chil">
          <p>合計</p><p>¥<span id="total_price"></span></p>
        </div>
      </div>
    </div>

    <script>
      // 格納したデータを取り出す
      // 関数に格納して呼び出し可能にする
      function total_price_checker() {
        console.log(array_price)
        console.log(array_count)

        array_price_data=[]
        array_count_data=[]
        total_prices=[];

        // 料金データを取り出す
        for (key in array_price){
          array_price_data.push(array_price[key]);
        }
        // 個数データを取り出す
        for (key in array_count){
          array_count_data.push(array_count[key]);
        }
        // 同じKeyのためインデックスごとに掛け合わせる
        for (let i = 0; i < array_price_data.length; i++) {
          total_prices.push(array_price_data[i]*array_count_data[i])
        }
        console.log(total_prices)

        // 配列の中を集計する型
        const sumArray = array => {
          let sum = 0;
          for (let i = 0, len = array.length; i < len; i++) {
            sum += array[i];
          }
          return sum;
        };

        // 送料（仮に0円で設定）
        let send = 0;
        let price_sum = sumArray(total_prices);
        let total_price_sum = price_sum + send;
        document.getElementById("small_price").innerHTML=price_sum;
        document.getElementById("total_price").innerHTML=total_price_sum;
      }
      total_price_checker()
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
