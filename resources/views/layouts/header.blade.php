<header>
  <!-- ヘッダー部分 -->
    <div id="headerBox">
        <div id="top-logo">
          <a href="/">
            <img src="{{ asset('images/new_logo.jpg') }}" alt="" width="100px" height="50px">
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

          {{-- ユーザーデータ取得 --}}
          <?php $user = Auth::user(); ?>
          @auth
          <div class="h-img-right">
                  <a href="{{ route('user.edit', $user->id )}}">
                    <img class="logo-img" src="{{ asset('images/acount.png') }}" alt="" >
                  </a>
          </div>
          <div class="h-img-right">
            <!-- <a href="">
              <img class="logo-img" src="{{ asset('images/account02.png') }}" alt="" >
            </a> -->
            {{-- アカウント情報を追記 --}}
            <div class="mt-3 space-y-1">
              <!-- Authentication -->
                    <form method="POST" action="{{ route('user.logout') }}">
                      @csrf
                      <x-responsive-nav-link :href="route('user.logout')"
                      onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                      </x-responsive-nav-link>
                    </form>
            </div>
          </div>
          @else
          <div class="h-img-right">
            <a href="{{ route('user.login') }}">ログイン</a>
          </div>

          <div class="h-img-right">
            <a href="{{ route('user.register') }}">新規登録</a>
          </div>

          @endauth
        </div>
      </div>
    </div>

    <div id="pulldown-box">
      <nav>
      <ul class="gnav_wrap">
          <li class="main_menu">
              MEN'S
              <ul class="sub_menu">
                 <a href="#"><li>TOPS</li></a>
                 <a href="#"><li>PANTS</li></a>
                 <a href="#"><li>OUTER</li></a>
                 <a href="#"><li>OTHER</li></a>
              </ul>
          </li>

          <li class="main_menu">
              WOMEN'S
              <ul class="sub_menu">
                 <a href="#"><li>TOPS</li></a>
                 <a href="#"><li>PANTS</li></a>
                 <a href="#"><li>OUTER</li></a>
                 <a href="#"><li>OTHER</li></a>
              </ul>
          </li>

          <li class="main_menu">
              KID'S
              <ul class="sub_menu">
                 <a href="#"><li>TOPS</li></a>
                 <a href="#"><li>PANTS</li></a>
                 <a href="#"><li>OUTER</li></a>
                 <a href="#"><li>OTHER</li></a>
              </ul>
          </li>

          <li class="main_menu">
              OTHER'S
              <ul class="sub_menu">
                 <a href="#"><li>TOPS</li></a>
                 <a href="#"><li>PANTS</li></a>
                 <a href="#"><li>OUTER</li></a>
              </ul>
          </li>
      </ul>
    </nav>
   </div>

   <button type="button" class="btn js-btn">
    <span class="btn-line"></span>
   </button>

</header>
