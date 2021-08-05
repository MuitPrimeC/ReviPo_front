@include('share.header');

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
          <h5 class="card-title">YOUR POINT:</h5>
          <p class="card-text">{{Auth::user()->points}} pt</p>
        </div>
      </div>

            <div class="card text-center">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="./icon_112380_128.png" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image cap"><title>Placeholder</title><rect fill="#868e96" width="100%" height="100%"/><text fill="#dee2e6" dy=".3em" x="50%" y="50%">Image cap</text></svg>
              <div class="card-body">

                <h5 class="card-title">ticket B</h5>
                <p>xxx pt</p>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <!-- Button trigger modal -->
                    <button type="submmit" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                       Exchange
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
                          <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                          </div>
                          <div class="modal-body">
                            <h5>NECESSARY POINT: 100 pt</h5>
                            <p>YOUR POINT: {{Auth::user()->points}} pt</p>
                            <p>BALANCE: {{Auth::user()->points - 100}} pt</p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">BACK</button>
                            <form action="/point/exchange" method="POST">
                                <input type="hidden" name="exchange_id", value="1">
                                <button type="submit" class="btn btn-primary">EXCHANGE</button>
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

@include('share.footer');
