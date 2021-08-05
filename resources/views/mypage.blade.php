@include('share.header');

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="test.css">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    </head>

    <body>
    <div　class="mypage">
        <div class="card text-center">
            <div class="card-header">
                ユーザー名： {{Auth::user()->username}}
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card-body">
                            <h5 class="card-title">保有ポイント:</h5>
                            <p class="card-text">{{Auth::user()->points}} pt</p>
                            <a href="/point/exchange" class="btn btn-primary">ポイント交換へ</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card-body">
                            <h5 class="card-title">保有チケット:</h5>
                            <p class="card-text">チケット番号：xxxxxx</p>
                            <p class="card-text">チケット番号：xxxxxx</p>
                        </div>
                    </div>
                </div>
            </div>

        <div class="card-footer text-muted">
            最終更新：タイムスタンプを表示？
        </div>
        </div>
    </diV>

    <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
              <a class="nav-link active" id="read-tab" data-toggle="tab" href="#read" role="tab" aria-controls="read" aria-selected="true">Read</a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link" id="write-tab" data-toggle="tab" href="#write" role="tab" aria-controls="write" aria-selected="false">Write</a>
            </li>
    </ul>

    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="recent-review" role="tabpanel" aria-labelledby="recent-review-tab">
            <div class="container-fluid">
                <br>
                <h2 class="text-center">最近レビューした作品</h2>
                <br>
                <div class="row">
                    <div class="col-2">
                        <a href="https://p0x0q.com/">広告</a>
                    </div>
                    <div class="col-10">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="card md-auto col-6" style="max-width: 540px; max-height:200px;">
                                    <div class="row no-gutters">
                                        <div class="col-md-4">
                                            <img src="Netflix_icon.svg.png" class="bd-placeholder-img card-img-top embed-responsive-item"><!--ここのclassが間違っていると思うので修正お願いします！-->
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                            <h5 class="card-title">Netflix</h5>
                                            <p class="card-text">評価</p>
                                                <div class="progress fivestar">
                                                    <div class="progress-bar progress-bar-star" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div><!--あくまで仮の形でお願いします-->
                                                </div>
                                                <p class="card-text">レビュー</p>
                                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card md-auto col-6" style="max-width: 540px; max-height:200px;">
                                <div class="row no-gutters">
                                    <div class="col-md-4">
                                        <img src="316KlVKkYiL.jpg" class="bd-placeholder-img card-img-top embed-responsive-item">
                                    </div>
                                <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Netflix</h5>
                                    <p class="card-text">評価</p>
                                    <div class="progress fivestar">
                                        <div class="progress-bar progress-bar-star" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div><!--あくまで仮の形でお願いします-->
                                    </div>
                                    <p class="card-text">レビュー</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card md-auto col-6" style="max-width: 540px; max-height:200px;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="316KlVKkYiL.jpg" class="bd-placeholder-img card-img-top embed-responsive-item">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Netflix</h5>
                                    <p class="card-text">評価</p>
                                    <div class="progress fivestar">
                                        <div class="progress-bar progress-bar-star" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div><!--あくまで仮の形でお願いします-->
                                    </div>
                                    <p class="card-text">レビュー</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                        </div>
                     </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br>
</div>

        <div class="tab-pane fade" id="recent-read" role="tabpanel" aria-labelledby="recent-read-tab">
            <div class="container-fluid">   
                <br>
                <h2 class="text-center">最近レビューした作品</h2>
                <br>
                <div class="row">
                    <div class="col-2">
                        <a href="https://p0x0q.com/">広告</a>
                    </div>
                    <div class="col-10">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="card md-auto col-6" style="max-width: 540px; max-height:200px;">
                                    <div class="row no-gutters">
                                        <div class="col-md-4">
                                            <img src="Netflix_icon.svg.png" class="bd-placeholder-img card-img-top embed-responsive-item"><!--ここのclassが間違っていると思うので修正お願いします！-->
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                            <h5 class="card-title">Netflix</h5>
                                            <p class="card-text">評価</p>
                                                <div class="progress fivestar">
                                                    <div class="progress-bar progress-bar-star" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div><!--あくまで仮の形でお願いします-->
                                                </div>
                                                <p class="card-text">レビュー</p>
                                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card md-auto col-6" style="max-width: 540px; max-height:200px;">
                                <div class="row no-gutters">
                                    <div class="col-md-4">
                                        <img src="316KlVKkYiL.jpg" class="bd-placeholder-img card-img-top embed-responsive-item">
                                    </div>
                                <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Netflix</h5>
                                    <p class="card-text">評価</p>
                                    <div class="progress fivestar">
                                        <div class="progress-bar progress-bar-star" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div><!--あくまで仮の形でお願いします-->
                                    </div>
                                    <p class="card-text">レビュー</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card md-auto col-6" style="max-width: 540px; max-height:200px;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="316KlVKkYiL.jpg" class="bd-placeholder-img card-img-top embed-responsive-item">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Netflix</h5>
                                    <p class="card-text">評価</p>
                                    <div class="progress fivestar">
                                        <div class="progress-bar progress-bar-star" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div><!--あくまで仮の形でお願いします-->
                                    </div>
                                    <p class="card-text">レビュー</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                        </div>
                     </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br>
</div>

</div>
</body>


@include('share.footer');
