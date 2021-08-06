@include('share.header',['title' => 'テストタイトル']);

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <script src="//code.jquery.com/jquery-2.2.4.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="test.css">
        <link rel="stylesheet" href="home_style.css">
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
                            <a href="/point/exchange" class="btn btn-outline-primary">ポイント交換へ</a>
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


    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link active" id="review-tab" data-toggle="tab" href="#review" role="tab" aria-controls="review" aria-selected="true">最近レビューした作品</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="view-tab" data-toggle="tab" href="#view" role="tab" aria-controls="view" aria-selected="false">最近閲覧した作品</a>
        </li>
    </ul>

    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="review" role="tabpanel" aria-labelledby="review-tab">

            <div class="container-fluid">
                <br>
                <h2 class="text-center">最近レビューした作品</h2>
                <br>
                <div class="row">
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
                                                <h5 class="card-title"><a href="/movie/{{$review->movie->movie_id}}">movie title:{{$review->movie->title}}</a></h5>
                                                <p class="card-text">review title:{{$review->title}}</p>
                                                <p class="card-text">feature:{{$review->feature}}</p>
                                                <p class="result-rating-rate">
                                                    <span class="star5_rating" data-rate="{{round($review->score)}}"></span>
                                                    <span class="number_rating">{{$review->score}}</span>
                                                </p>
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
        </div>

        <div class="tab-pane fade" id="view" role="tabpanel" aria-labelledby="view-tab">

            <div class="container-fluid">
                    <br>
                    <h2 class="text-center">最近閲覧した作品</h2>
                    <br>
                    <div class="row">
                        <div class="col-10">
                            <div class="container-fluid">
                                <div class="row">
                                    @foreach($user_movies as $movie)
                                    <div class="card md-auto col-6" style="max-width: 540px; max-height:200px;">
                                        <div class="row no-gutters">
                                            <div class="col-md-4">
                                                <img src="/images/movie/{{$movie->filename}}" class="bd-placeholder-img card-img-top embed-responsive-item">
                                            </div>
                                            <div class="col-md-8">
                                                <div class="card-body">
                                                    <h5 class="card-title"><a href="/movie/{{$movie->movie_id}}">movie title:{{$movie->title}}</a></h5>
                                                    <p class="result-rating-rate">
                                                        <span class="star5_rating" data-rate="{{round($movie->score)}}"></span>
                                                        <span class="number_rating">{{$movie->score}}</span>
                                                    </p>
                                                    <p class="card-text"><small class="text-muted">{{$movie->updeted_at}}</small></p>
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
            </div>
        </div>
    </div>

<br><br>
</body>
@include('share.footer');
