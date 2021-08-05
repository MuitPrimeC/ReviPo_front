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
  <body  class="text-center" >
    <a id="skippy" class="sr-only sr-only-focusable" href="#content">
      <div class="container">
        <span class="skiplink-text">Skip to main content</span>
      </div>
    </a>

    <div id="calc" class="12u$">
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <font color="#0000ff">{{ $error }}</font><br>
        @endforeach
    @endif
    </div>
    @isset($errorMessage)
    <font color="#0000ff">{{ $errorMessage }}</font><br>
    @endisset

    <form class="form-signin" method="post" action="?">
      <img class="mb-4" src="./icon_112380_128.png" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
        <label for="inputUsername" class="sr-only">username</label>
        <input type="text" name="username" id="inputUsername" class="form-control" placeholder="username" required autofocus>
        <label for="inputPassword" class="sr-only">password</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="password" required>
        <div class="checkbox mb-3"></div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>

        <div class="etc-login-form">
          <p>new user? <a href="#">create new account</a></p>
        </div>

    </form>
      <style>
        .form-signin {
          width: 100%;
          max-width: 330px;
          padding: 15px;
          margin: auto;
        }
      </style>
  </body>
</html>

@include('share.footer');
