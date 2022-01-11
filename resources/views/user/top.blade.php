@extends('layouts.appcopy')

@section('content')

<!-- main image部分 -->
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
