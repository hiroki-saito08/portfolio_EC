@extends('layouts.appcopy')

@section('content')

<!-- main image部分 -->
  <div id="procuct-image">
    @foreach($products as $product)
      <div id="product-name">
        <div>
          <a href="">
            <!-- 画像パス -->
            <img src="{{ asset('/storage/'.$product -> image_path) }}" alt="画像が登録されてません">
          </a>
        </div>
        <div> 商品名： {{ $product -> name }}</div>
        <div> 値段： {{ $product -> price }}</div>
        <div> サイズ： {{ $product -> size }}</div>
        {{-- <div> カテゴリー： {{ $product -> category }}</div> --}}
      </div>
    @endforeach
  </div>

    <div id="">キープ表示</div>
  <div id="keep-images">
    <a href="">
      <!-- 画像パス -->
      <div>sample_img</div>
    </a>
  </div>
  <div id="keep-name">
  </div>
  <div id="keep-price">
</div>

@endsection
