@extends('layouts.appcopy')

@section('content')

<!-- main image部分 -->
[商品一覧ページです]

  {{-- フラッシュメッセージ --}}
  @if(session('message'))
  <div class="p-6">
  {{ session('message') }}
  </div>
  @endif

  <div id="procuct-image">
    @foreach($all_products as $product)
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

        <div class="pop_area">
          <div class="pop_top">
            <img src="{{ asset('/storage/'.$product -> image_path) }}" alt="画像が登録されてません">
          </div>
          <div class="pop_bottom">
            <div>
              <form method="post" action="{{ route('user.cart.add', $product->id) }}">
                @csrf
                <button type="submit">カートに追加</button>
              </form>
            </div>
            <div>
                <form method="post" action="{{ route('user.keep.add', $product->id) }}">
                  @csrf
                  <button type="submit">お気に入りに追加</button>
                </form>
            </div>
          </div>
        </div>
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

<div class="footer">
  footer
</div>

@endsection
