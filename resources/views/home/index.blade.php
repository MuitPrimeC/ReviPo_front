<html>
	<head>
        <!-- CSSの埋め込み -->
        <style type="text/css">
            text{
                font-size: 20; 
                font-weight: bold;
                font-style: italic;
                text-decoration: underline;
                text-align: right;
            }
            text2{
                font-size: 22; 
                font-style: italic;
                text-decoration: underline;
                text-align: right;
            }
        </style>
        <script src="//code.jquery.com/jquery-2.2.4.min.js"></script>
        <script>
        //共通パーツ読み込み
            $(function() {
            $("#header").load("header.html");
            $("#footer").load("footer.html");
            });
        </script>
        <!-- 自作.CSSはこちらから追加で（パスは正しく入れてくれ） -->
        <link rel="stylesheet" href="home_style.css">
        <!-- Bootstrapの埋め込み -->
        <link 
            rel="stylesheet" 
            href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
            integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" 
            crossorigin="anonymous"
        >
        <script 
            src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" 
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" 
            crossorigin="anonymous"
        ></script>
        <!-- ここまで（ところで、この.jsいるんか？） -->
    </head>
<body>
    @include('share.header')
    <!-- headerの読み込み -->
    <br>
    <div class="container-fluid">
        <div class="row">
            <!--　左端の広告の列　-->
            <div class="col-md-2 justify-content-left"><div align=left><a href="https://p0x0q.com/"><img src="images/image.jpg"></a></div></div>

            <!--中央-->
            <div class="col-md-8 justify-content-center"><div align=center>

            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="item1-tab" data-toggle="tab" href="#item1" role="tab" aria-controls="item1" aria-selected="true"><text2>おすすめ</tex2t></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="item2-tab" data-toggle="tab" href="#item2" role="tab" aria-controls="item2" aria-selected="false"><text2>ランキング</text2></a>
                </li>
  
            </ul>
            
            <div class="tab-content">
                <!--レコメンド-->
                <div class="tab-pane fade show active" id="item1" role="tabpanel" aria-labelledby="item1-tab">
                <div class="raw">
                    <p class="title">ユーザー名へのおすすめ</p>
                    <br>
                    <div class="container">
                        <div class="row h-70">
                          <div class="col-sm justify-content-center"><div align=center>
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="images/2.jpg" class="d-block w-100" alt="First">
                                </div>
                                <div class="carousel-item">
                                    <img src="images/3.jpg" class="d-block w-100" alt="Second">
                                </div>
                                <div class="carousel-item">
                                    <img src="images/4.jpg" class="d-block w-100" alt="Third">
                                </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                                </a>
                            </div>
                          </div></div>
                          <div class="col-sm justify-content-center"><div align=left>
                            <a href="https://p0x0q.com/" class="card-body text-dark">
                            <div class="card">
                                <div class="row no-gutters">
                                    <div class="col-md-4">
                                    <img src="#">
                                    </div>
                                    <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">約束のネバーランド</h5>
                                        <p class="card-text"><small class="text-muted">概要</small></p>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            </a>
                            <br><br>
                            <a href="https://p0x0q.com/" class="card-body text-dark">
                            <div class="card">
                                <div class="row no-gutters">
                                    <div class="col-md-4">
                                    <img src="#">
                                    </div>
                                    <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">共謀家族</h5>
                                        <p class="card-text"><small class="text-muted">概要</small></p>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            </a>
                            <br><br>
                            <a href="https://p0x0q.com/" class="card-body text-dark">
                            <div class="card">
                                <div class="row no-gutters">
                                    <div class="col-md-4">
                                    <img src="#">
                                    </div>
                                    <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">かぐや様は告らせたい</h5>
                                        <p class="card-text"><small class="text-muted">概要</small></p>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            </a>
                        </div></div>
                        </div>
                    </div>
                    <br>
                </div>
                </div>

                <!--ランキング欄の行-->
                <div class="tab-pane fade" id="item2" role="tabpanel" aria-labelledby="item2-tab">
                <div class="raw">
                    <p class="title"><a href="/review">ランキング</a></p>
                    <br>
                    <div class="card-list">
                        @foreach($movies as $movie)
                            <div class="card mb-3">
                                <div class="row no-gutters">
                                    <div class="col-md-4">
                                        <img src="/images/movie/{{$movie->filename}}" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title"><a href="/movie/{{$movie->movie_id}}">{{$movie->title}}</a></h5>
                                            <p class="card-text">{{$movie->score}}</p>
                                            <p class="card-text">{{$movie->description}}</p>
                                            <p class="card-text"><small class="text-muted">{{$movie->updated_at}}</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach 
                    </div>
                    <text><a href="/review">　>>4位以降を見る　</a></text>
            
                </div>

                </div>
            </div>
            <br><br><br>
            
            </div></div>

            <!--右端の広告の列-->
            <div class="col-md-2 justify-content-center"><div align=right><a href="https://p0x0q.com/"><img src="images/image.jpg"></a></div></div>
        </div>
    </div>
    @include('share.footer')
    <!-- footerの読み込み -->
</body>
</html>
