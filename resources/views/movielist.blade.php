@include('share.header');

<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <script src="//code.jquery.com/jquery-2.2.4.min.js"></script>
        <script>
        //共通パーツ読み込み
            $(function() {
            $("#header").load("header.html");
            $("#footer").load("footer.html");
            });
        </script>
        <link rel="stylesheet" href="style.css">
        <title>Signin Template for Bootstrap · Bootstrap</title>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </head>

    <body>


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
                            <p class="card-text">{{$movie->discription}}</p>
                            <p class="card-text"><small class="text-muted">{{$movie->updated_at}}</small></p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            

        </div>

        <style>
            div.card-list{
            margin-top: 20px;
            }
        </style>
        <div class="paginate d-flex justify-content-center">
            {{$movies->links('pagination::bootstrap-4')}}
        </div>
    </body>
</html>
@include('share.footer');
