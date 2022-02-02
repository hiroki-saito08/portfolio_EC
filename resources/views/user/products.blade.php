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
  <div id="p_box_pa">
   <div id="products_box">
    @foreach($all_products as $product)
      <div class="product_contents">
        <a>
          <img data-target="{{$product->id}}" class="click_pop" src="{{ asset('/storage/'.$product -> image_path) }}" alt="画像が登録されてません">
        </a>

        <div class="products-name">
          <p>
            商品名： {{ $product -> name }}
          </p>
        </div>
        <div class="products-name">
          <p>
            値段：¥ {{ $product -> price }}
          </p>
        </div>
        <div class="products-name">
          <p>
            サイズ： {{ $product -> size }}
          </p>
        </div>

        {{-- ここをモーダルで表示する --}}
        <div class="pop_area" id="{{$product->id}}">
            <div id="modal_pop_area">
            <div class="pop_top">
              <div>
                <img src="{{ asset('/storage/'.$product -> image_path) }}" alt="画像が登録されてません" class="pop_img">
              </div>
            </div>

            <div id="pop_area_bottom">
              <div class="pop_products">
                <div class="pop_product">商品名&nbsp;:&nbsp;{{ $product -> name }}</div>
                <div class="pop_product">値段&nbsp;:&nbsp;¥{{ $product -> price }}</div>
                <div class="pop_product">サイズ&nbsp;:&nbsp;{{ $product -> size }}</div>
              </div>
              <div class="pop_buttons">
                <div class="pop_bottoms">
                  <div class="pop_bottom">
                    <form method="post" action="{{ route('user.cart.add', $product->id) }}">
                      @csrf
                      <button type="submit" id="add-carts">カートに追加</button>
                      <!-- <img src="{{ asset('/storage/carts.png') }}" alt="" class=""> -->
                    </form>
                  </div>
                  <div class="pop_bottom">

                        {{-- 重複チェック --}}
                        @auth
                          <?php $already = \DB::table('keeps')->where('user_id', $user->id)->where('product_id', $product->id)->whereNull('deleted_at')->exists();?>
                          @if ($already)
                            <form method="post" action="{{ route('user.keep.delete', $product->id) }}">
                              @csrf
                              <button type="submit" id="add-carts">お気に入り済み</button>
                            </form>
                          @else
                            <form method="post" action="{{ route('user.keep.add', $product->id) }}">
                              @csrf
                              <button type="submit" id="add-carts">お気に入りに追加</button>
                            </form>
                          @endif
                        @endauth
                        @guest
                          <form method="post" action="{{ route('user.login') }}">
                            @csrf
                            <button type="submit" id="add-carts">お気に入りに追加</button>
                          </form>
                        @endguest
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    @endforeach
    </div>
  </div>


@endsection
