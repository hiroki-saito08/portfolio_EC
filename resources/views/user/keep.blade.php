@extends('layouts.appcopy')

@section('content')

<div class="main">
  <h2>キープした商品</h2>
  <!-- キープした商品をテーブル表示 -->
  @foreach ($keep_products as $keep_product)
  <div class="table">
    @if($keep_products->count())
    <tr>
      <td><img src="{{ asset('/storage/'.$keep_product->product -> image_path) }}" alt="画像が登録されてません"></td>
      <td><p>{{$keep_product->product->name}}</p></td>
      <td><p>￥{{$keep_product->product->price}}</p></td>
      <td>
        <form method="POST" action="{{ route('user.cart.add', $keep_product->product->id)}}">
          @csrf
          <input type="submit" value="カートに入れる">
        </form>
      </td>
      <td>
        <form method="POST" action="{{ route('user.cart.delete', $keep_product->product->id)}}">
          @csrf
          <input type="submit" value="❌" onclick="return confirm('削除してもよろしいでしょうか？')">
        </form>
      </td>
    </tr>
    @else
    <p>キープした商品はありません</p>
    @endif
  </div>
  @endforeach
</div>
@endsection
