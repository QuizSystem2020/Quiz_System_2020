@extends('root')

@section('content')
<body>
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
                <a href=""><button class="btn ">İşlənmiş Quizlər</button></a>
                <a href=""><button class="btn">Private</button></a>
                <a href=""><button class="btn">Public</button></a>
            </div>
        </div>   
    </div>
</body>
@endsection