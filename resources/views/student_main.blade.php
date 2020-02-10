@extends('root')

@section('content')
    <div class="container">
    <div class="row">
        <div class="col-12 profil-picture text-center">
            <img src="img/profil/3.png" alt="">
        </div>
        </div>
        <div class="row">
            <div class="col-12 teacher-name">
                <h4>Asli Sadigova</h4>
                <p>Səhifənizə xoş gəlmisiniz!</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 buttons">
                <a href="/islenmis"><button class="btn btn-1st">İşlənmiş Quizlər</button></a>
                <a href="/private"><button class="btn btn-1st">Private</button></a>
                <a href="/public"><button class="btn btn-1st">Public</button></a>
            </div>
        </div>   
    </div>
@endsection
