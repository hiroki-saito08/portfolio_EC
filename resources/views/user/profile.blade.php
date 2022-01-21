@extends('layouts.appcopy')

@section('content')

  <div id="contents">
    <div id="contents-box">
      <div class="">
        <h1 class="">ユーザー情報編集</h1>
      </div>

        {{-- フラッシュメッセージ --}}
        @if(session('message'))
        <div class="p-6">
        {{ session('message') }}
        </div>
        @endif
      <div class="">
        <form method="POST" action="{{ route('user.update', $user->id) }}">
          @csrf
            <div class="">
              <div class="relative">
                <label for="name" class="">ユーザーネーム</label>
                <input type="text" id="name" name="name" value="{{ $user->name }}" required class="">
              </div>
            </div>
            <div class="">
              <div class="relative">
                <label for="email" class="">メールアドレス</label>
                <input type="email" id="email" name="email" value="{{ $user->email }}" required class="">
              </div>
            </div>
            <div class="">
              <div class="relative">
                <label for="password" class="">パスワード</label>
                <input type="password" id="password" name="password" required class="">
              </div>
            </div>
            <div class="">
              <div class="relative">
                <label for="password_confirmation" class="">パスワード確認</label>
                <input type="password" id="password_confirmation" name="password_confirmation" required class="">
              </div>
            </div>
          </div>

          <a href="">
            <button type="submit" id="redirect-button">更新する</button>
          </a>
          <div class="">
            <a href="{{ route('user.top') }}">
            <button type="submit" id="redirect-button">TOPに戻る</button>
            </a>
          </div>
        </form>
      </div>

    </div>
  </div>
@endsection
