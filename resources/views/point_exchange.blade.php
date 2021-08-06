@include('share.header',['title' => 'テストタイトル']);

<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <title>Template for Bootstrap · Bootstrap</title>
        <link rel="stylesheet" href="style.css">
        <script src="//code.jquery.com/jquery-2.2.4.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </head>

    <body>
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">あなたの現在のポイント:</h5>
          <p class="card-text">{{Auth::user()->points}} pt</p>
        </div>
      </div>

            <div class="card text-center">
              <div class="card-body">

                <h5 class="card-title">映画パス</h5>
                <p>100 pt</p>
                  <p class="card-text">お好みの劇場で映画を１本見ることができます</p>
                  <!-- Button trigger modal -->
                    <button type="submmit" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                       交換
                    </button>
                    @if ($errors->any())
                      @foreach ($errors->all() as $error)
                        <font color="#0000ff">{{ $error }}</font><br>
                      @endforeach
                    @endif

                  <!-- Modal -->
                  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                          <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalCenterTitle">ポイント交換確認画面</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                          </div>
                          <div class="modal-body">
                            <h5>必要ポイント: 100 pt</h5>
                            <p>あなたのポイント: {{Auth::user()->points}} pt</p>
                            <p>差額: {{Auth::user()->points - 100}} pt</p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">戻る</button>
                            <form action="/point/exchange" method="POST">
                                <input type="hidden" name="exchange_id", value="1">
                                <button type="submit" class="btn btn-primary">交換</button>
                            </form>
                          </div>
                      </div>
                      </div>
                  </div>
              </div>
          </div>


      </div>

      <style>
        div.card-deck{
        margin-top: 20px;
        }
      </style>

    </div>
    <br><br><br>
    </body>
</html>

@include('share.footer')
