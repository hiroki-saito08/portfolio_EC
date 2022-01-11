@extends('layouts.appcopy')

@section('content')

<!-- main image部分 -->
<div>
<a href="{{ route('user.products') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">商品一覧へ</a>
</div>
<div id=top_header>
  <div>
    <img src="{{ asset('/storage/'.'Tシャツ.jpeg') }}" alt="画像が登録されてません">
  </div>
  <div>
    <img src="{{ asset('/storage/'.'Tシャツ.jpeg') }}" alt="画像が登録されてません">
  </div>
  <div>
    <img src="{{ asset('/storage/'.'Tシャツ.jpeg') }}" alt="画像が登録されてません">
  </div>
</div>
<div id=top_trending>
  <div>
    <img src="{{ asset('/storage/'.'Tシャツ.jpeg') }}" alt="画像が登録されてません">
  </div>
  <div>
    <img src="{{ asset('/storage/'.'Tシャツ.jpeg') }}" alt="画像が登録されてません">
  </div>
  <div>
    <img src="{{ asset('/storage/'.'Tシャツ.jpeg') }}" alt="画像が登録されてません">
  </div>
  <div>
    <img src="{{ asset('/storage/'.'Tシャツ.jpeg') }}" alt="画像が登録されてません">
  </div>
</div>
<div class="big_image">
    <img src="{{ asset('/storage/'.'Tシャツ.jpeg') }}" alt="画像が登録されてません">
</div>
<div class="shop_by_category">
  SHOP BY CATEGORY
</div>
<div class="big_image">
    <img src="{{ asset('/storage/'.'Tシャツ.jpeg') }}" alt="画像が登録されてません">
</div>
<div class="shop_by_category">
  SHOP BY CATEGORY
</div>
<div class="footer">
  footer
</div>
    {{-- <div id="">キープ表示</div>
  <div id="keep-images">
    <a href="">
      <!-- 画像パス -->
      <div>sample_img</div>
    </a>
  </div>
  <div id="keep-name">
  </div>
  <div id="keep-price">
</div> --}}
@endsection
