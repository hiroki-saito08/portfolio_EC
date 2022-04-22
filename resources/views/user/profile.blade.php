@extends('layouts.appcopy')

@section('content')

  <div id="contents">
    <div id="contents-box">
      <div>
        <h1>ユーザー情報編集</h1>
      </div>

        {{-- フラッシュメッセージ --}}
        @if(session('message'))
        <div class="p-6">
        {{ session('message') }}
        </div>
        @endif
      <div>
        <form method="POST" action="{{ route('user.update', $user->id) }}">
          @csrf
            <div>
              <div class="relative">
                <label for="name">ユーザーネーム</label>
                <input type="text" id="name" name="name" value="{{ $user->name }}" required class="">
              </div>
            </div>
            <div>
              <div class="relative">
                <label for="email">メールアドレス</label>
                <input type="email" id="email" name="email" value="{{ $user->email }}" required>
              </div>
            </div>

        <div class="relative">
          <label for="password">パスワード</label>
          <input type="password" id="password" name="password" required >
        </div>

            <button type="submit" id="redirect-button">更新する</button>
        </form>
        <div>
          <a href="{{ route('user.top') }}">
          <button type="submit" id="redirect-button">TOPに戻る</button>
          </a>
        </div>
      </div>
    </div>
  </div>
@endsection
