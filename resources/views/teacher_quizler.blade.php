@extends('root')

@section('content')
<body>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <button type="button" class="btn btn-lg btn-create" data-toggle="modal" data-target="#myModal">Yeni Quiz Yarat</button>
                    <div id="myModal" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Zəhmət olmasa aşağıdakı bütün xanaları doldurun</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                                <label for="">Quizi adlandırın</label> <br>
                                <input type="text" placeholder="" required> <br><br>
                                <label for="">Private</label>
                                <input type="radio" name="show" placeholder="Cavab seçənəyi" required>
                                <label for="">Public</label>
                                <input type="radio" name="show" placeholder="Cavab seçənəyi" required> <br><br>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-success" data-dismiss="modal">Yarat</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Ləğv et</button>
                            </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h5 class="h5_settings text-center">Mövcud Quizlər</h5>
            </div>
            <div class="row quiz_list">
                <div class="col-3">
                    <a href="/teacher/quizler/title"><h3>PHP</h3></a>
                </div>
                <div class="col-3">
                    <a href="/teacher/quizler/title"><h3>LARAVEL</h3></a>
                </div>
                <div class="col-3">
                    <a href="/teacher/quizler/title"><h3>JAVA SCRIPT</h3></a>
                </div>
                <div class="col-3">
                    <a href="/teacher/quizler/title"><h3>AJAX</h3></a>
                </div>
                <div class="col-3">
                    <a href="/teacher/quizler/title"><h3>CSS</h3></a>
                </div>
                <div class="col-3">

            <div class="row col-12 quiz_list">
                <div class="col-md-3 col-sm-3">
                    <a href="/teacher/quizler/title"><h3>PHP</h3></a>
                </div>
                <div class="col-md-3 col-sm-3">
                    <a href="/teacher/quizler/title"><h3>LARAVEL</h3></a>
                </div>
                <div class="col-md-3 col-sm-3">
                    <a href="/teacher/quizler/title"><h3>JAVA SCRIPT</h3></a>
                </div>
                <div class="col-md-3 col-sm-3">
                    <a href="/teacher/quizler/title"><h3>AJAX</h3></a>
                </div>
                <div class="col-md-3 col-sm-3">
                    <a href="/teacher/quizler/title"><h3>CSS</h3></a>
                </div>
                <div class="col-md-3 col-sm-3">

                    <a href="/teacher/quizler/title"><h3>ALQORITM</h3></a>
                </div>
            </div>
            
        </div>
    </div>

</body>

@endsection