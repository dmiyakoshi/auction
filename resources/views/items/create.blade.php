<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    @if ($errors->any())
        <div class="error">
            <p>
                <b>{{ count($errors) }}件のエラーがあります</b>
            </p>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <h1>商品の登録フォーム</h1>
    <form action="/items" method="POST">
        @csrf
        <p>
            <label for='name'>商品名</label>
            <input type="text" name="name" id="" value="{{ old('name') }}">
        </p>
        <p>
            <label for='desccription'>商品詳細</label>
            <input type="text" name="description" id="" value="{{ old('description') }}">
        </p>
        <p>
            <label for='price'>価格</label>
            <input type="text" name="price" id="" value="{{ old('price') }}">
        </p>
        <p>
            <label for='seller'>出品者</label>
            <input type="text" name="seller" id="" value="{{ old('seller') }}">
        </p>
        <p>
            <label for='email'>電子メール</label>
            <input type="text" name="email" id="" value="{{ old('email') }}">
        </p>
        <p>
            <label for='image_url'>商品画像URL</label>
            <input type="text" name="image_url" id="" value="{{ old('image_url') }}">
        </p>
        <input type="submit" value="登録">
    </form>
</body>

</html>
