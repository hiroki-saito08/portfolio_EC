<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/complete.css') }}">
  <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
  <title>ご購入ありがとうございました。</title>
</head>
<body>
<div id="complete-box">
  <di id="comp-p-box">
    <p>商品の購入が完了しました。</p>
    <a href="{{ route('user.top') }}">
      <button id="return-button">TOPページに戻る</button>
    </a>
  </div>
</div>
</body>
</html>
