@extends('layouts.appcopy')

@section('content')

<div id="main">
  <h1>お気に入り</h1>
  <div class="keep-main">

  @if($keep_products->count())
  @foreach ($keep_products as $keep_product)

    @php
      if (file_exists('images/'.$keep_product->product -> image_path)) {
        $img = asset('/images/'.$keep_product->product -> image_path);
      }else{
        $img = asset('/storage/'.$keep_product->product -> image_path);
      }
    @endphp
    <div class="keep-img-box">
      <img class="keep-img" src="{{ $img }}" alt="画像が登録されてません">
      <div class="keep-praice-box">
        <p>{{$keep_product->product->name}}</p>
        <p>￥{{$keep_product->product->price}}</p>
        <div class="keep-form-box">
          <form method="POST" action="{{ route('user.cart.add', $keep_product->product->id)}}">
            @csrf
            <button type="submit" class="keep-button">カートに追加</button>
          </form>

          <form method="POST" action="{{ route('user.keep.delete', $keep_product->product->id) }}">
            @csrf
            <button type="submit" class="keep-button" onclick="return confirm('削除してもよろしいでしょうか？')">削除</button>
          </form>
        </div>
      </div>

    </div>
  @endforeach

  @else
  <p>お気に入り商品はありません</p>
  @endif
  </div>
</div>
@endsection
