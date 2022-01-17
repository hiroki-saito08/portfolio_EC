@extends('layouts.appcopy')

@section('content')

<!-- main image部分 -->
{{-- [商品一覧ページです] --}}

  {{-- フラッシュメッセージ --}}
  @if(session('message'))
  <div class="p-6">
  {{ session('message') }}
  </div>
  @endif

  <div id="procucts_contents">
    @foreach($all_products as $product)
      <div id="product_contents">
        <div>
            <!-- 画像パス -->
            <a><img data-target="{{$product->id}}" class="click_pop" src="{{ asset('/storage/'.$product -> image_path) }}" alt="画像が登録されてません"></a>
        </div>
        <div> 商品名： {{ $product -> name }}</div>
        <div> 値段： {{ $product -> price }}</div>
        <div> サイズ： {{ $product -> size }}</div>


        {{-- ここをモーダルで表示する --}}
        <div class="pop_area" id="{{$product->id}}">
          <div class="pop_top">
            <div>
              <img src="{{ asset('/storage/'.$product -> image_path) }}" alt="画像が登録されてません" class="pop_img">
            </div>
            <div class="pop_products">
              <div class="pop_product"> 商品名： {{ $product -> name }}</div>
              <div class="pop_product"> 値段： {{ $product -> price }}</div>
              <div class="pop_product"> サイズ： {{ $product -> size }}</div>
            </div>
          </div>
          <div class="pop_buttons">
            <div class="pop_body">
              <a href="{{ route('user.products') }}">戻る</a>
            </div>
            <div class="pop_bottoms">
              <div class="pop_bottom">
                <form method="post" action="{{ route('user.cart.add', $product->id) }}">
                  @csrf
                  <button type="submit">カートに追加</button>
                </form>
              </div>
              <div class="pop_bottom">

                    {{-- 重複チェック --}}
                    @auth
                      <?php $already = \DB::table('keeps')->where('user_id', $user->id)->where('product_id', $product->id)->whereNull('deleted_at')->exists();?>
                      @if ($already)
                        <form method="post" action="{{ route('user.keep.delete', $product->id) }}">
                          @csrf
                          <button type="submit">お気に入り済み</button>
                        </form>
                      @else
                        <form method="post" action="{{ route('user.keep.add', $product->id) }}">
                          @csrf
                          <button type="submit">お気に入りに追加</button>
                        </form>
                      @endif
                    @endauth
                    @guest
                      <form method="post" action="{{ route('user.login') }}">
                        @csrf
                        <button type="submit">お気に入りに追加</button>
                      </form>
                    @endguest
              </div>
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
