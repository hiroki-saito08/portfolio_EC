@extends('layouts.appcopy')

@section('content')

<!-- main image部分 -->
<!-- ↓スライダー本体 -->
<ul class="thumb-item">
     <li><a href="#"><img class="slider-img" src="{{ asset('/storage/'.'model5.jpg') }}" alt="画像が登録されてません"></a></li>
     <li><a href="#"><img class="slider-img" src="{{ asset('/storage/'.'model2.jpg') }}" alt="画像が登録されてません"></a></li>
     <li><a href="#"><img class="slider-img" src="{{ asset('/storage/'.'model3.jpg') }}" alt="画像が登録されてません"></a></li>
     <li><a href="#"><img class="slider-img" src="{{ asset('/storage/'.'model4.jpg') }}" alt="画像が登録されてません"></a></li>
     <li><a href="#"><img class="slider-img" src="{{ asset('/storage/'.'model1.jpg') }}" alt="画像が登録されてません"></a></li>
</ul>
<!-- ↓サムネイル -->
<ul class="thumb-item-nav">
     <li><a href="#"><img class="slider-img" src="{{ asset('/storage/'.'model1.jpg') }}" alt="画像が登録されてません"></a></li>
     <li><a href="#"><img class="slider-img" src="{{ asset('/storage/'.'model2.jpg') }}" alt="画像が登録されてません"></a></li>
     <li><a href="#"><img class="slider-img" src="{{ asset('/storage/'.'model3.jpg') }}" alt="画像が登録されてません"></a></li>
     <li><a href="#"><img class="slider-img" src="{{ asset('/storage/'.'model4.jpg') }}" alt="画像が登録されてません"></a></li>
     <li><a href="#"><img class="slider-img" src="{{ asset('/storage/'.'model5.jpg') }}" alt="画像が登録されてません"></a></li>
</ul>

<div>
<a href="{{ route('user.products') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">商品一覧へ</a>
[トップページです]
<div id=top_header>
  <div>
    <a href="{{ route('user.products') }}"><img src="{{ asset('/storage/'.'Tシャツ.jpeg') }}" alt="画像が登録されてません"></a>
  </div>
  <div>
    <a href="{{ route('user.products') }}"><img src="{{ asset('/storage/'.'Tシャツ.jpeg') }}" alt="画像が登録されてません"></a>
  </div>
  <div>
    <a href="{{ route('user.products') }}"><img src="{{ asset('/storage/'.'Tシャツ.jpeg') }}" alt="画像が登録されてません"></a>
  </div>
</div>
<div id=top_trending>
  <div>
    <a href="{{ route('user.products') }}"><img src="{{ asset('/storage/'.'Tシャツ.jpeg') }}" alt="画像が登録されてません"></a>
  </div>
  <div>
    <a href="{{ route('user.products') }}"><img src="{{ asset('/storage/'.'Tシャツ.jpeg') }}" alt="画像が登録されてません"></a>
  </div>
  <div>
    <a href="{{ route('user.products') }}"><img src="{{ asset('/storage/'.'Tシャツ.jpeg') }}" alt="画像が登録されてません"></a>
  </div>
  <div>
    <a href="{{ route('user.products') }}"><img src="{{ asset('/storage/'.'Tシャツ.jpeg') }}" alt="画像が登録されてません"></a>
  </div>
</div>
<div class="big_image">
    <a href="{{ route('user.products') }}"><img src="{{ asset('/storage/'.'Tシャツ.jpeg') }}" alt="画像が登録されてません"></a>
</div>
<div class="shop_by_category">
  SHOP BY CATEGORY
</div>
<div class="big_image">
    <a href="{{ route('user.products') }}"><img src="{{ asset('/storage/'.'Tシャツ.jpeg') }}" alt="画像が登録されてません"></a>
</div>
<div class="shop_by_category">
  SHOP BY CATEGORY
</div>
<div class="footer">
  footer
</div>

@endsection
