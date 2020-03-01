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
                    <button type="button" class="btn btn-lg btn-create" data-toggle="modal" data-target="#myModal">Yeni sual yarat</button>
                    <div id="myModal" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Zəhmət olmasa aşağıdakı bütün xanaları doldurun</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                        <form action="/suallar/save" method="POST">
                        @csrf
                            <div class="modal-body">
                                <label for="">? </label>
                                <input type="text" name="title" placeholder="Sual başlığını daxil edin" required> <br><br>
                                <label for="">? </label>
                                <input type="text" name="question" placeholder="Sualı daxil edin" required> <br><br>
                                <label for="">a)</label>
                                <input type="text" name="option_a" placeholder="Cavab variantı" required>
                                <select>
                                  <option name="is_correct" value="0">Yanlış</option>
                                  <option name="is_correct" value="1">Doğru</option>
                                </select>
                                 <br><br>
                                <label for="">b)</label>
                                <input type="text" name="option_b" placeholder="Cavab variantı" required>
                                <select>
                                  <option name="is_correct2" value="0">Yanlış</option>
                                  <option name="is_correct2" value="1">Doğru</option>
                                </select>
                                 <br><br>
                                <button class="btn btn-add" id="add_option"><i class="fas fa-plus"></i></button> <br><br>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success">Yarat</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Ləğv et</button>
                            </div>
                       </form>
                            </div>
                        
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <h5 class="h5_settings text-center">Mövcud Suallar</h5>
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
                                    <a href="/edit/{{$datas['sual_id']}}"><button class="btn btn-success" name="{{$datas['sual_id']}}">Düzəliş et</button></a>
                                    <a href="/destroy2/{{$datas['sual_id']}}"><button class="btn btn-danger" name="{{$datas['sual_id']}}">Sil</button></a>
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
            var maxAppend = 1;
            $("#add_option").click(function(){
                if (maxAppend <= 3){
                    if(maxAppend == 1){
                        $("#add_option").before(`<label for=''>c)</label> <input type='text' name='option_c' placeholder='Cavab variantı'> 
                                <select>
                                  <option name="is_correct3" value="0">Yanlış</option>
                                  <option name="is_correct3" value="1">Doğru</option>
                                </select>
                        <br><br>`);  
                    }
                    else if(maxAppend == 2){
                        $("#add_option").before(`<label for=''>d)</label> <input type='text' name='option_d' placeholder='Cavab variantı'> 
                           <select>
                                  <option name="is_correct4" value="0">Yanlış</option>
                                  <option name="is_correct4" value="1">Doğru</option>
                            </select>
                        <br><br>`);  
                    }
                    else{
                        $("#add_option").before(`<label for=''>e)</label> <input type='text' name='option_e' placeholder='Cavab variantı'>
                             <select>
                                  <option name="is_correct5" value="0">Yanlış</option>
                                  <option name="is_correct5" value="1   ">Doğru</option>
                             </select>  
                        <br><br>`);
                        $("#add_option").hide();  
                    }
                    maxAppend++;
                }
            });
        </script>
    </body>


@endsection