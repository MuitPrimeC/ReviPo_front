@include('share.header');

<!-- ここにレビュー投稿完了メッセージと前のページに戻るボタンを想定してい配置してください。 -->
<!-- 例：https://cupy.p0x0q.com/yir62buq.png-->
<!doctype html>
<html lang="ja" >
  <head>
    <link rel="stylesheet" href="style.css">
    <title>Signin Template for Bootstrap · Bootstrap</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </head>
  <body>
    @if($value==0)
      <div class="card">
            <div class="card-body">
                <h5>レビュー投稿完了</h5>
                <p>レビュー投稿が完了しました。</p>
                <button type="button" class="btn btn-outline-primary btn-lg btn-block"><a href="/movie/{{$movie->movie_id}}">前のページに戻る</a></button>
            </div>
      </div>
    @elseif($value==1)
     <div class="card">
            <div class="card-body">
                <h5>ポイント交換完了</h5>
                <p>ポイント交換が完了しました。</p>
                <button type="button" class="btn btn-outline-primary btn-lg btn-block"><a href="/point/exchange">前のページに戻る</button>
            </div>
      </div>
    @elseif ($value==1)
    <div class="card">
        <div class="card-body">
            <h5>ポイント交換失敗</h5>
            <p>ポイントが足りません。</p>
            <button type="button" class="btn btn-outline-primary btn-lg btn-block"><a href="/point/exchange">前のページに戻る</button>
        </div>
    </div>
    @endif

    <style>
    .card {
        margin-top: 20px;
    }
    </style>

  </body>
</html>

@include('share.footer');
