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

    <div class="card">
          <div class="card-body">
              <h5>Your submission was successful!</h5>
              <p>If you want to go back to the previous page, please click the button below.</p>
              <button type="button" class="btn btn-outline-primary btn-lg btn-block">go back to the previous page</button>
          </div>
    </div>

    <style>
    .card {
        margin-top: 20px;
    }
    </style>

  </body>
</html>

@include('share.footer');
