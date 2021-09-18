<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>show</title>
</head>

<body>
    <p>
        <b>商品名:{{ $item->name }}</b>
    </p>
    <p>
        <b>商品詳細:{{ $item->description }}</b>
    </p>
    <p>
        <b>価格:{{ $item->price }}</b>
    </p>
    <p>
        <b>出品者:{{ $item->seller }}</b>
    </p>
    <p>
        <b>電子メール:{{ $item->email }}</b>
    </p>
    <p>
        <img src="{{ $item->image_url }}" alt="">
    </p>

    <!--<a href="/items/{{ $item->id }}/edit">編集する</a> -->
    <!--<button type="button" onclick="location.href='/items/{{ $item->id }}/edit'">編集する</button>
    <input type="submit" value="削除する" id="delete-form" onclick="if(!confirm('本当に削除しますか？')){return false}"> 
    <form action="/items/{{ $item->id }}" method="post" id="delete-form">
        @csrf
        @method('DELETE')
    </form> -->

    <div class="button-group">
         <!-- 商品のidを元に編集ページへ遷移する -->
         <button onclick="location.href='/items/{{ $item->id }}/edit'">編集する</button>
         <form action="/items/{{ $item->id }}" method="post">
             @csrf
             @method('DELETE')
             <input type="submit" value="削除する" onclick="if(!confirm('削除しますか？')){return false};">
         </form>
        </div>
</body>
