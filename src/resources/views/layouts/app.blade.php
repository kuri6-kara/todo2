<!DOCTYPE html>
<html lang="ja">

<!-- 親レイアウト（app.blade.php） -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <!-- BladeファイルからCSSファイルの呼び出し -->
    @yield('css')
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/">
                Todo
            </a>
        </div>
    </header>

    <main>
        @yield('content')
        <!-- index.blade.php(子要素)のセクション呼び出し -->
    </main>
</body>

</html>