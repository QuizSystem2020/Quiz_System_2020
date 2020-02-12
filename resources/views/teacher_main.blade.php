@extends('root')

@section('content')
<body class="body_enter">
    <div class="container">
    <div class="row">
        <div class="col-12 profil-picture text-center">
            <img src="img/profil/3.png" alt="">
        </div>
        </div>
        <div class="row">
            <div class="col-12 teacher-name">
                <h4>{{Auth::user()->name }} {{Auth::user()->surname}}</h4>
                <p>Səhifənizə xoş gəlmisiniz!</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 buttons">
                <a href="/suallar"><button class="btn btn-1st">Suallar</button></a>
                <a href="/quizler"><button class="btn btn-1st">Quizlər</button></a>
            </div>
        </div>   
    </div>
</body>
@endsection