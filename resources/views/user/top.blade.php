@extends('layouts.appcopy')

@section('content')

<!-- main image部分 -->
<!-- ↓スライダー本体 -->
<div id="slider-box">
  <ul class="thumb-item">
       <li><a href=""><img class="slider-main" src="{{ asset('/storage/'.'model5.jpg') }}" alt="画像が登録されてません"></a></li>
       <li><a href=""><img class="slider-main" src="{{ asset('/storage/'.'model2.jpg') }}" alt="画像が登録されてません"></a></li>
       <li><a href=""><img class="slider-main" src="{{ asset('/storage/'.'model3.jpg') }}" alt="画像が登録されてません"></a></li>
       <li><a href=""><img class="slider-main" src="{{ asset('/storage/'.'model4.jpg') }}" alt="画像が登録されてません"></a></li>
       <li><a href=""><img class="slider-main" src="{{ asset('/storage/'.'model1.jpg') }}" alt="画像が登録されてません"></a></li>
  </ul>
  <!-- ↓サムネイル -->
  <!-- <div id="slider-box"> -->
    <ul class="thumb-item-nav">
        <li><a href="#"><img class="slider-img" src="{{ asset('/storage/'.'model5.jpg') }}" alt="画像が登録されてません"></a></li>
        <li><a href="#"><img class="slider-img" src="{{ asset('/storage/'.'model2.jpg') }}" alt="画像が登録されてません"></a></li>
        <li><a href="#"><img class="slider-img" src="{{ asset('/storage/'.'model3.jpg') }}" alt="画像が登録されてません"></a></li>
        <li><a href="#"><img class="slider-img" src="{{ asset('/storage/'.'model4.jpg') }}" alt="画像が登録されてません"></a></li>
        <li><a href="#"><img class="slider-img" src="{{ asset('/storage/'.'model1.jpg') }}" alt="画像が登録されてません"></a></li>
    </ul>
</div>
<!-- </div> -->

<!-- <div> -->
{{-- <a href="{{ route('user.products') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">商品一覧へ</a> --}}
{{-- [トップページです] --}}

  {{-- フラッシュメッセージ --}}
  @if(session('message'))
  <div class="p-6">
  {{ session('message') }}
  </div>
  @endif

<div id="main_bar"></div>

<div id="main-box">
  <div id="top_img_box">
    <a href="{{ route('user.products') }}">
      <img class="top_main_img1" src="{{ asset('/storage/'.'model8.jpg') }}" alt="画像が登録されてません">
    </a>
  </div>

  <div id="main_bar"></div>

  <div id="top_img_box">
    <a href="{{ route('user.products') }}">
      <img class="top_main_img" src="{{ asset('/storage/'.'model7.jpg') }}" alt="画像が登録されてません">
    </a>
  </div>
</div>

<div id="main_bar"></div>

<div class="shop_by_category">
  <div class="shop_category_box">
    <div id="category_font_box">
      <h1 id="category_font">CATEGORY</h1>
    </div>

    <div id="category_font_box">
      <p id="category_font_p">We must develop and maintain the capacity to forgive. He who is devoid of the power to forgive is devoid of the power to love. There is some good in the worst of us and some evil in the best of us. When we discover this, we are less prone to hate our enemies.We must develop and maintain the capacity to forgive. He who is devoid of the power to forgive is devoid of the power to love. There is some good in the worst of us and some evil in the best of us. When we discover this, we are less prone to hate our enemies.We must develop and maintain the capacity to forgive. He who is devoid of the power to forgive is devoid of the power to love. There is some good in the worst of us and some evil in the best of us. When we discover this, we are less prone to hate our enemies.
      </p>
    </div>
  </div>

  <div id="main_bar"></div>

  <div id="big_image">
    <a href="{{ route('user.products') }}">
      <img class="top_main_img" src="{{ asset('/storage/'.'jacket1.jpg') }}" alt="画像が登録されてません">
    </a>
  </div>

  <div id="main_bar"></div>

  <div class="shop_category_box">
    <div id="category_font_box">
      <h1 id="category_font">CATEGORY</h1>
    </div>

    <div id="category_font_box">
    <p id="category_font_p">We must develop and maintain the capacity to forgive. He who is devoid of the power to forgive is devoid of the power to love. There is some good in the worst of us and some evil in the best of us. When we discover this, we are less prone to hate our enemies.We must develop and maintain the capacity to forgive. He who is devoid of the power to forgive is devoid of the power to love. There is some good in the worst of us and some evil in the best of us. When we discover this, we are less prone to hate our enemies.We must develop and maintain the capacity to forgive. He who is devoid of the power to forgive is devoid of the power to love. There is some good in the worst of us and some evil in the best of us. When we discover this, we are less prone to hate our enemies.</p>
    </div>
  </div>
</div>

<div id="main_bar"></div>

@endsection
