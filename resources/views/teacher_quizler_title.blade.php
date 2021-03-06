@extends('root')

@section('content')


<style>
.quiz_question{
    width: 600px;
    margin: 0px 0px 25px 250px;
    padding: 20px!important;
    border: 1.5px solid #797a79!important;
    border-radius: 5px;
    word-break: break-word;
}
.quiz_question .question_title{
    font-size: 20px;
    font-weight: bold;
}
.h5_settings{
    font-size: 36px;
    margin: 30px 0px 40px 0px;
}
.btn-create{
    width: 180px;
    height: 50px;
    background-color: #00c458;
    margin-top: 30px;
    color: #fff;
}
.btn-add{
    background-color: black;
    border-radius: 100%;
}
.btn-add i{
    color: #fff;
}
</style>


    <body>
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <button type="button" class="btn btn-lg btn-create" data-toggle="modal" data-target="#myModal">Sual əlavə et</button>
                    <div id="myModal" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Zəhmət olmasa sualı seçin</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <form action="/insert_quiz_question/{{$id}}" method="POST">
                                    @csrf
                                    <div class="modal-body">
                                        <select name="question" id="">
                                            @foreach($suallars as $data)
                                                <option name="q" value="{{$data['sual_id']}}">{{$data['question']}}</option>
                                            @endforeach
                                        </select> <br><br>
                                        
                                        <!-- <button class="btn btn-add" id="add_option"><i class="fas fa-plus"></i></button> <br><br> -->
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-success">Əlavə et</button>
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Ləğv et</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @if($is_public == 0)
                <div class="row mt-4">
                    <div class="col-md-12">
                        <div class="quiz_question text-center">
                            <form action="/fin/{{$id}}" method="POST">
                                @csrf
                                <label for="">Istifadəçinin FİN kodunu daxil edin :</label> <br>
                                <input class="input pl-2" type="number" name="fin"> <br><br>
                                <button type="submit" class="btn btn-success">Bitdi</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endif
            <div class="row">
                <div class="col-12">
                    <h5 class="h5_settings text-center">Quizdəki Suallar</h5>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    @if(!empty($join))
                        <?php 
                            $q = '';
                            $num = '1';
                        ?>
                        @foreach($join as $data)
                            <div class="quiz_question">
                                @foreach($data as $datas)
                                    <div class="col-md-12 mt-3">
                                        @if($q != $datas['question'])
                                            <h4 class="question_title">{{$num}}) {{$datas['question']}}</h4>
                                            <?php
                                                $q = $datas['question'];
                                                $num++;
                                            ?>
                                        @endif
                                        <p>{{$datas['cavab']}}</p>
                                    </div>
                                @endforeach
                                <div class="col-md-12">
                                    <a href="/destroy/{{$datas['topic_id']}}/{{$datas['sual_id']}}"><button class="btn btn-danger" name="{{$datas['sual_id']}}">Sil</button></a>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <p>Quizinizə sual əlavə etməmisiz!</p>
                    @endif
                </div>
            </div>
        </div>

        <script>
            $("#add_option").click(function(){
                $("#add_option").before(`
                    <select name='' id=''>
                        @foreach($suallars as $data)
                            <option value="">{{$data['question']}}</option>
                        @endforeach
                    </select><br><br>`); 
            });
        </script>
    </body>


@endsection