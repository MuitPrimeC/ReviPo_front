<html>
	<head>
        <!-- CSSの埋め込み -->
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
    <br><br>
    <div class="container-fluid">
        <div class="row">
            <!--　左端の広告の列　-->
            <div class="col-md-2 justify-content-left"><div align=left><a href="https://p0x0q.com/"><img src="images/image.jpg"></a></div></div>

            <!--中央のレコメンド欄とランキング欄の列-->
            <div class="col-md-8 justify-content-center"><div align=center>
                <!--レコメンド欄の行-->
                <div class="raw">
                    <p class="title">ユーザー名へのおすすめ</p>
                    <br>

                    <div class="container">
                        <div class="row">
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
                            <p class="text">
                                <a href="https://p0x0q.com/">１．約束のネバーランド</a>
                                <br><br>
                                <a href="https://p0x0q.com/">２．共謀家族</a>
                                <br><br>
                                <a href="https://p0x0q.com/">３．かぐや様はこくらせたい　ファイナル</a>
                            </p>
                          </div></div>
                        </div>
                      </div>
                    <br>
                </div>
                <!--レコメンド欄の行-->
                <div class="raw">
                    <p class="title"><a href="/review">ランキング</a></p>
                    <br>

                    <div class="card-list">
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
                        
                    </div>
                    
                    <style>
                        div.card-list{
                        margin-top: 20px;
                        }  
                    </style>
            
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                        </ul>
                    </nav>

                </div>
                
                
            </div></div>

            <!--右端の広告の列-->
            <div class="col-md-2 justify-content-center"><div align=right><a href="https://p0x0q.com/"><img src="images/image.jpg"></a></div></div>
        </div>
    </div>
    @include('share.footer')
    <!-- footerの読み込み -->
</body>
</html>
