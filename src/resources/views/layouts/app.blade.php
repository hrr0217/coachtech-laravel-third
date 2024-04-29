<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance Management</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    @yield('css')
</head>
<body>
    <header class="header">
        <div class="header_inner">
            <div class="header_utilities">
                <a class="header_logo" href="/">
                    Attendance Management
                </a>
                <nav>
                    <ul class="header-nav">
                        <li class="header-nav_item">
                            <a class="header-nav_link" href="/mypage">マイページ</a>
                        </li>
                        <li class="header-nav_item">
                            <form>
                                <button class="header-nav_button">ログアウト</button>
                            </form>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <main>
        @yield('content')
    </main>
</body>
</html>