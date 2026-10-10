<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('title')
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@200..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Zen+Kurenaido&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.min.css">
    @yield('css')
</head>
<body>

    <main>
        @yield('content')
    </main>

    <div class="mg80">
        <div class="w1200">
        <div class="footer__border">
            <div class="footer__img right">
            <img src="{{ asset('img/sakurazima-ttl.png') }}" alt="">
        </div>
        </div>
        <footer class="footer">
            <div class="footer__info">
            <div class="logo">
                <p>郷土ビュッフェ</p>
            </div>
            <ul class="footer__info-ul">
                <li class="footer__info-li">
                    <div class="footer__info-ttl"><p>営業時間・定休日</p></div>
                    <div class="footer__info-txt"><p>6:30~10:00/定休日なし</p></div>
                </li>
                <li class="footer__info-li">
                    <div class="footer__ttl"><p>お問い合わせ</p></div>
                    <div class="footer__txt"><p><i class="fa-solid fa-phone"></i> 000000000</p></div>
                </li>
            </ul>
            </div>
            <div class="footer__menu">
                <ul class="footer__menu-ul">
                    <li class="footer__menu-li"><a href="#menu-item1">こだわり</a></li>
                    <li class="footer__menu-li"><a href="#menu-item2">おすすめメニュー</a></li>
                    <li class="footer__menu-li"><a href="#menu-item3">フォトギャラリー</a></li>
                    <li class="footer__menu-li"><a href="#menu-item4">朝食会場</a></li>
                </ul>
            </div>
        </footer>
        </div>
    </div>

    @yield('java')
</body>
</html>