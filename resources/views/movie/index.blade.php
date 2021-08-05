@include('share.header');

<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <title>Signin Template for Bootstrap · Bootstrap</title>
        <link rel="stylesheet" href="style.css">
        <script src="//code.jquery.com/jquery-2.2.4.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </head>

    <body>

        <div class="card mb-3">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="./icon_112380_128.png" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>

        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
              <a class="nav-link active" id="read-tab" data-toggle="tab" href="#read" role="tab" aria-controls="read" aria-selected="true">Read</a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link" id="write-tab" data-toggle="tab" href="#write" role="tab" aria-controls="write" aria-selected="false">Write</a>
            </li>
        </ul>

          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="read" role="tabpanel" aria-labelledby="read-tab">

                <div class="card">
                    <div class="card-header">
                      Review1
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Special title treatment</h5>
                      <div class="progress fivestar">
                        <div class="progress-bar progress-bar-star" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div><!--あくまで仮の形でお願いします-->
                    </div>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                      <p>
                        <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                          See more
                        </a>
                      </p>
                      <div class="collapse" id="collapseExample">
                          test test test test test test test
                      </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                      Review2
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Special title treatment</h5>
                      <div class="progress fivestar">
                        <div class="progress-bar progress-bar-star" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div><!--あくまで仮の形でお願いします-->
                    </div>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                      <p>
                        <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample-1" role="button" aria-expanded="false" aria-controls="collapseExample-1">
                          See more
                        </a>
                      </p>
                      <div class="collapse" id="collapseExample-1">
                          hoge hoge
                      </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="write" role="tabpanel" aria-labelledby="write-tab">

                <form>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">review title</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="1"></textarea>
                    </div>

                    <div class="feature">
                        <div class="form-group">
                        <label for="exampleFormControlSelect1">feature select</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>good</option>
                            <option>bad</option>
                            <option>etc</option>
                            <option>etc</option>
                            <option>etc</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="formControlRange">rating Range input</label>
                        <input type="range" class="form-control-range" min="0" max="5" id="formControlRange">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">review textarea</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>

                    <div class="col-auto my-1">
                        <button type="button" class="btn btn-info">Add other features</button>
                        <button type="button" class="btn btn-primary">Submit</button>
                    </div>

                </form>
            </div>
    </body>
</html>

@include('share.footer');