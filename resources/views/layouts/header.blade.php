<header>
  <!-- ヘッダー部分 -->
    <div id="headerBox">
        <div id="top-logo">
          <p>EXAMPLE LOGO</p>
        </div>

        <div>
          <div>
            <a href="">
              MEN'S
            </a>
          </div>
          <div>
            <a href="">
              WOMEN'S
            </a>
          </div>
          <div>
            <a href="">
              KID'S
            </a>
          </div>
          <div>
            <a href="">
              ALL
            </a>
          </div>
        </div>

        <div id="searchBox">
            <form action="search" class="searchform">
                <div class="form-example">
                  <input type="submit" value="検索">
                </div>
                <input type="text" name="words" id="words" placeholder="キーワード検索" required>
            </form>
        </div>
    </div>

  <ul>
    <li class="nav-item"><a href="">ホーム</a></li>
    <li class="nav-item"><a href="">お気に入り</a></li>
    @auth
    <li class="nav-item"><a href="">ログアウト</a></li>
    @else
    <li class="nav-item"><a href="">ログイン</a></li>
    <li class="nav-item"><a href="">新規登録</a></li>
    @endauth
  </ul>
</header>
