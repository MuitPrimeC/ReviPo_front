<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>ここにページタイトル入れてね</title>

        <!-- CSSの埋め込み -->
        <!-- 自作.CSSはこちらから追加で（パスは正しく入れてくれ） -->
        <link rel="stylesheet" href="./header_style.css">
        <!-- Bootstrapの埋め込み -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- ここまで -->

    </head>

    <!-- header bar -->
    <body>
        <nav class="navbar navbar-light bg-light">
            <!-- ロゴ・タイトル -->
            <a class="navbar-brand" href="./header.html">
                <img src="https://img.icons8.com/ios/50/000000/amazon-prime-video.png" width="30" height="30" alt="">
                ReviPo
            </a>

            <!-- 検索バー -->
            <form action="/search" method="POST">
                <div class="search_box">
                    <input type="text" style="width: 300px;" placeholder="いま、気になる映画は？">
                </div>
            </form>

            <!-- ユーザー情報 -->
            <div>
                xxpt
                <a href="./index.html">
                    <img src="./images/user_icon.png" width="30" height="30" alt="">
                </a>
                <button type="button" onclick="location.href='http://127.0.0.1:8000/signin'" class="btn btn-outline-secondary">LOGOUT</button>
            </div>
        </nav>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>

</html>
