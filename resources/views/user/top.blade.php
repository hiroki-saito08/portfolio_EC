@extends('layouts.appcopy')

@section('content')

<!-- main image部分 -->
<div>
<a href="{{ route('user.products') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">商品一覧へ</a>
</div>
<br>
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
