<header>
  <!-- ヘッダー部分 -->
    <div id="headerBox">
        <div id="top-logo">
          <a href="/">
            <img id="logo-size" src="{{ asset('images/logo.png') }}" alt="logo">
          </a>
        </div>

        <div id="searchBox">
            <form action="{{ route('user.product.search') }}" id="searchform">
              <input type="text" name="words" id="words" placeholder="キーワード検索" required>
              <div id="form-button">
                <button type="submit" ><img class="logo-img" type="image" src="{{ asset('images/search.png') }}"></button>
              </div>
            </form>
        </div>

        <div id="h-r-box">
          <div id="header-right">
            <div id="cart-favorite">
              <div class="h-img-right">
                <a href="{{ route('user.cart') }}">
                  <img class="logo-img" src="{{ asset('images/carts.png') }}" alt="" >
                </a>
              </div>

              <div class="h-img-right">
                  <a href="{{ route('user.keep') }}">
                    <img class="logo-img" src="{{ asset('images/hart.png') }}" alt="" >
                  </a>
              </div>
            </div>
        </div>
      </div>

      <div id="icon-menu">
        <img class="logo-img" src="{{ asset('images/acount.png') }}" alt="" >
      </div>

      <div id="icon-menubox">
      {{-- ユーザーデータ取得 --}}
          <?php $user = Auth::user(); ?>
          @auth
          <div id="icon-user-edit">
            <a href="{{ route('user.edit', $user->id )}}">編集</a>
          </div>

          <div id="account-box">
            {{-- アカウント情報を追記 --}}
            <div class="mt-3 space-y-1">
              <!-- Authentication -->
              <form method="POST" action="{{ route('user.logout') }}">
              @csrf
              <x-responsive-nav-link :href="route('user.logout')"
                onclick="event.preventDefault();
                this.closest('form').submit();"
              >

              <div id="icon-logout">
                <button type="submit" id="logout-button">LOGOUT</button>
              </div>
              </x-responsive-nav-link>
              </form>
            </div>
          </div>
          @else
          <div class="icon-login">
            <a href="{{ route('user.login') }}">ログイン</a>
          </div>

          <div class="icon-login">
            <a href="{{ route('user.register') }}">新規登録</a>
          </div>
          @endauth
      </div>
    </div>

    <div id="pulldown-box">
      <nav>
      <ul class="gnav_wrap">
          <li class="main_menu">
              MEN'S
              <ul class="sub_menu">
                 <a href="{{ route('user.product.a_search',['category' => 'tops']) }}"><li>TOPS</li></a>
                 <a href="{{ route('user.product.a_search',['category' => 'pants']) }}"><li>PANTS</li></a>
                 <a href="{{ route('user.product.a_search',['category' => 'outer']) }}"><li>OUTER</li></a>
                 <a href="{{ route('user.product.a_search',['category' => 'other']) }}"><li>OTHER</li></a>
              </ul>
          </li>

          <li class="main_menu">
              WOMEN'S
              <ul class="sub_menu">
                 <a href="{{ route('user.product.a_search',['category' => 'tops']) }}"><li>TOPS</li></a>
                 <a href="{{ route('user.product.a_search',['category' => 'pants']) }}"><li>PANTS</li></a>
                 <a href="{{ route('user.product.a_search',['category' => 'outer']) }}"><li>OUTER</li></a>
                 <a href="{{ route('user.product.a_search',['category' => 'other']) }}"><li>OTHER</li></a>
              </ul>
          </li>

          <li class="main_menu">
              KID'S
              <ul class="sub_menu">
                 <a href="{{ route('user.product.a_search',['category' => 'tops']) }}"><li>TOPS</li></a>
                 <a href="{{ route('user.product.a_search',['category' => 'pants']) }}"><li>PANTS</li></a>
                 <a href="{{ route('user.product.a_search',['category' => 'outer']) }}"><li>OUTER</li></a>
                 <a href="{{ route('user.product.a_search',['category' => 'other']) }}"><li>OTHER</li></a>
              </ul>
          </li>

          <li class="main_menu">
              OTHER'S
              <ul class="sub_menu">
                 <a href="{{ route('user.product.a_search',['category' => 'tops']) }}"><li>TOPS</li></a>
                 <a href="{{ route('user.product.a_search',['category' => 'pants']) }}"><li>PANTS</li></a>
                 <a href="{{ route('user.product.a_search',['category' => 'outer']) }}"><li>OUTER</li></a>
              </ul>
          </li>
      </ul>
    </nav>
   </div>

   <button type="button" class="btn js-btn">
    <span class="btn-line"></span>
   </button>

</header>
