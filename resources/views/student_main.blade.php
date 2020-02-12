@extends('root')

@section('content')
<<<<<<< HEAD
<body>
=======
<body class="body_enter">
>>>>>>> c67004209b3bf2903d93f354d6732a17ece5c48d
    <div class="container">
    <div class="row">
        <div class="col-12 profil-picture text-center">
            <img src="img/profil/3.png" alt="">
        </div>
        </div>
        <div class="row">
            <div class="col-12 teacher-name">
<<<<<<< HEAD
            <h4>{{Auth::user()->name }} {{Auth::user()->surname}}</h4>
=======
                <h4>Asli Sadigova</h4>
>>>>>>> c67004209b3bf2903d93f354d6732a17ece5c48d
                <p>Səhifənizə xoş gəlmisiniz!</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 buttons">
<<<<<<< HEAD
                <a href=""><button class="btn ">İşlənmiş Quizlər</button></a>
                <a href=""><button class="btn">Private</button></a>
                <a href=""><button class="btn">Public</button></a>
=======
                <a href="/islenmis"><button class="btn btn-1st">İşlənmiş Quizlər</button></a>
                <a href="/private"><button class="btn btn-1st">Private</button></a>
                <a href="/public"><button class="btn btn-1st">Public</button></a>
>>>>>>> c67004209b3bf2903d93f354d6732a17ece5c48d
            </div>
        </div>   
    </div>
</body>
@endsection
