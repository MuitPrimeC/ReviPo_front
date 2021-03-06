@include('share.header',['title' => 'テストタイトル'])

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
                    <img src="/images/movie/{{$movie->filename}}" height="350" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{$movie->title}}</h5>
                        <p class="card-text">{{$movie->description}}</p>
                        <p class="card-text"><small class="text-muted">{{$movie->updated_at}}</small></p>
                    </div>
                </div>
            </div>
        </div>

        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
              <a class="nav-link active" id="read-tab" data-toggle="tab" href="#read" role="tab" aria-controls="read" aria-selected="true">レビュー閲覧</a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link" id="write-tab" data-toggle="tab" href="#write" role="tab" aria-controls="write" aria-selected="false">レビュー投稿</a>
            </li>
        </ul>

          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="read" role="tabpanel" aria-labelledby="read-tab">
              @foreach($reviews as $review)
                <div class="card">
                    <div class="card-header">
                      {{$review->user->username}}
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">{{$review->title}}</h5>
                      <div class="progress fivestar">
                        <div class="progress-bar progress-bar-star" role="progressbar" style="width: {{$review->score/5*100}}%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div><!--あくまで仮の形でお願いします-->
                    </div>
                      <p class="card-text">{{$review->feature}}</p>
                      <p class="card-text">{{$review->description}}</p>
                      <p class="card-text">score:{{$review->score}}</p>
                      <p>
                        <!--<a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                          レビューの詳細を見る
                        </a>-->
                        <form role="form" method="post" action="/review_score">
                        <input type="hidden" name="review_id" value="{{$review->review_id}}">
                        <p><button type="submit" class="btn btn-primary">{{$review->review_score}} 参考になった！</button></p>
                        </form>
                      </p>

                      <div class="collapse" id="collapseExample">
                          description:{{$review->description}}
                      </div>
                    </div>
                </div>
                @endforeach
                <div class="paginate d-flex justify-content-center">
                  {{$reviews->links('pagination::bootstrap-4')}}
                </div>
            </div>
            <div class="tab-pane fade" id="write" role="tabpanel" aria-labelledby="write-tab">

                <form class="form-review" method="post" action="/movie">
                    <input type="hidden" name="movie_id" value="{{$movie_id}}">
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">ひとことレビュー！</label>
                        <textarea name="title" class="form-control" id="exampleFormControlTextarea1" rows="1"></textarea>
                    </div>

                    <div class="feature">
                        <div class="form-group">
                        <label for="exampleFormControlSelect1">評価軸を選択</label>
                        <select name="feature" class="form-control" id="exampleFormControlSelect1">
                            <option>ストーリー</option>
                            <option>構成</option>
                            <option>音楽（劇伴・主題歌・挿入歌）</option>
                            <option>映像</option>
                            <option>演出</option>
                            <option>演技</option>
                            <option>キャスト（俳優・女優・声優）</option>
                            <option>特によかったところ</option>
                            <option>残念だったところ</option>
                            <option>その他</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="formControlRange">評価度</label>
                        <input type="range" name="score" class="form-control-range" min="0" max="5" id="formControlRange">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">レビュー詳細</label>
                        <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>

                    <div class="col-auto my-1">
                        <!-- <button type="button" class="btn btn-info">Add other features</button> -->
                        <button type="submit" class="btn btn-primary">投稿</button>
                    </div>

                </form>
            </div>
    </body>
</html>

@include('share.footer')
