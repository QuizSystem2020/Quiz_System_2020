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
                            <div class="modal-body">
                                
                                <select name="" id="">
                                    <option value="">Php nedir?</option>
                                    <option value="">Laravel nedir?</option>
                                    <option value="">Java nedir?</option>
                                    <option value="">C# nedir?</option>
                                    <option value="">CSS nedir?</option>
                                </select> <br><br>
                                
                                <button class="btn btn-add" id="add_option"><i class="fas fa-plus"></i></button> <br><br>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-success" data-dismiss="modal">Əlavə et</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Ləğv et</button>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <h5 class="h5_settings text-center">Quizdəki Suallar</h5>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="quiz_question">
                        <p class="question_title">Php nedir?</p>
                        <p>a)proqramlasdirma dili 1</p>
                        <p>b)proqramlasdirma dili 2</p>
                        <p>c)proqramlasdirma dili 3</p>
                        <p>d)proqramlasdirma dili 4</p>
                        <button class="btn btn-success">Düzəliş et</button>
                        <button class="btn btn-danger">Sil</button>
                    </div>
                </div>
                <div class="col-12">
                    <div class="quiz_question">
                        <p class="question_title">Laravel nedir?</p>
                        <p>a)proqramlasdirma dili 1</p>
                        <p>b)proqramlasdirma dili 2</p>
                        <p>c)proqramlasdirma dili 3</p>
                        <p>d)proqramlasdirma dili 4</p>
                        <button class="btn btn-success">Düzəliş et</button>
                        <button class="btn btn-danger">Sil</button>
                    </div>
                </div>
                <div class="col-12">
                    <div class="quiz_question">
                        <p class="question_title">Java nedir?</p>
                        <p>a)proqramlasdirma dili 1</p>
                        <p>b)proqramlasdirma dili 2</p>
                        <p>c)proqramlasdirma dili 3</p>
                        <p>d)proqramlasdirma dili 4</p>
                        <button class="btn btn-success">Düzəliş et</button>
                        <button class="btn btn-danger">Sil</button>
                    </div>
                </div>
                <div class="col-12">
                    <div class="quiz_question">
                        <p class="question_title">C# nedir?</p>
                        <p>a)proqramlasdirma dili 1</p>
                        <p>b)proqramlasdirma dili 2</p>
                        <p>c)proqramlasdirma dili 3</p>
                        <p>d)proqramlasdirma dili 4</p>
                        <button class="btn btn-success">Düzəliş et</button>
                        <button class="btn btn-danger">Sil</button>
                    </div>
                </div>
            </div>
        </div>

        <script>
            $("#add_option").click(function(){
                $("#add_option").before(`
                    <select name='' id=''>
                        <option value=''>Php nedir?</option>
                        <option value=''>Laravel nedir?</option>
                        <option value=''>Java nedir?</option>
                        <option value=''>C# nedir?</option>
                        <option value=''>CSS nedir?</option>
                    </select><br><br>`); 
            });
        </script>
    </body>


@endsection