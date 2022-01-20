@extends('layouts.appcopy')

@section('content')

<div id="main">
  <h1>お気に入り</h1>
  <!-- キープした商品をテーブル表示 -->
  <div class="keep-main">
  @foreach ($keep_products as $keep_product)
    @if($keep_products->count())

    <div class="keep-img-box">
      <img class="keep-img" src="{{ asset('/storage/'.$keep_product->product -> image_path) }}" alt="画像が登録されてません">
      <div class="keep-praice-box">
        <p>{{$keep_product->product->name}}</p>
        <p>￥{{$keep_product->product->price}}</p>
        <div class="keep-form-box">
          <form method="POST" action="{{ route('user.cart.add', $keep_product->product->id)}}">
            @csrf
            <!-- <input type="submit" value="カートに入れる"> -->
            <button type="submit" class="keep-button">カートに追加</button>
          </form>

          <form method="POST" action="{{ route('user.cart.delete', $keep_product->product->id)}}">
            @csrf
            <!-- <input type="submit" value="削除" onclick="return confirm('削除してもよろしいでしょうか？')"> -->
            <button type="submit" class="keep-button" onclick="return confirm('削除してもよろしいでしょうか？')">削除</button>
          </form>
        </div>
      </div>

    </div>

    @else
    <p>お気に入り商品はありません</p>
    @endif
    @endforeach
  </div>
</div>
@endsection
