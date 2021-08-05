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
                            @foreach ($tickets as $ticket)
                            <span>チケット番号：{{$ticket->item_name}}</span><br>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer text-muted">
                最終更新：{{Auth::user()->updated_at}}
            </div>
        </div>
    </diV>
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
                        @foreach($recent_review_movies as $review)
                        <div class="card md-auto col-6" style="max-width: 540px; max-height:200px;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img src="/images/movie/{{$review->movie->filename}}" class="bd-placeholder-img card-img-top embed-responsive-item">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">movie title:{{$review->movie->title}}</h5>
                                        <p class="card-text">review title:{{$review->title}}</p>
                                        <p class="card-text">feature:{{$review->feature}}</p>
                                        <p class="card-text">score:{{$review->score}}</p>
                                        <p class="card-text">description:{{$review->description}}</p>
                                        <p class="card-text"><small class="text-muted">{{$review->updeted_at}}</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
<br><br>
</body>
@include('share.footer');
