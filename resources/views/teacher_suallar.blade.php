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
                                <button type="button" class="btn btn-add" id="add_option"><i class="fas fa-plus"></i></button> <br><br>
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
                                <a onclick="edit('{{$datas[sual_id]}}','{{$datas[title]}}', '{{$datas[question]}}','{{$datas[cavab]}}')"><button class="btn btn-success" name="{{$datas['sual_id']}}">Düzəliş et</button></a>
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

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
<script defer async src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
<script>
        edit = (sual_id,title,question,cavab) => {
            console.log(id);
            $.confirm({
                title: 'Düzəliş et!',
                content: '' +
                 
                    '<label>Sual Başlığı:</label>' +
                    '<input type="text" placeholder="Sual başlığı" class="title form-control" value="'+title+'" required />' +
                    '<label>Sual:</label>' +
                    '<input type="text" placeholder="Sual" class="question form-control" value="'+question+'" required />' +
                    '<label>Cavab 1:</label>' +
                    '<input type="text" placeholder="Poçt ünvanınız" class="cavab form-control" value="'+cavab+'" required />' +
                    '<label>Əlaqə nömrəniz:</label>' +
                    '<input type="text" placeholder="Əlaqə nömrəniz" class="nomre form-control" value="'+nomre+'" required />' +
                    '<label>Cinsiniz</label>' +
                    '<input type="text" placeholder="Cinsiniz" class="cins form-control" value="'+cins+'" required />' +
                    '<label>Yaşınız</label>' +
                    '<input type="text" placeholder="Yaşınız" class="yas form-control" value="'+yas+'" required />' +
                    '<label>Boyunuz</label>' +
                    '<input type="text" placeholder="Boyunuz" class="boy form-control" value="'+boy+'" required />' +
                    '<label>Çəkiniz</label>' +
                    '<input type="text" placeholder="Çəkiniz" class="ceki form-control" value="'+ceki+'" required />' +
                    '<label>Bədən ölçüləriniz</label>' +
                    '<input type="text" placeholder="Bədən ölçüləriniz" class="olcu form-control" value="'+olcu+'" required />' +
                    '<label>Göz rəngi</label>' +
                    '<input type="text" placeholder="Göz rəngi" class="goz form-control" value="'+goz+'" required />' +
                    '<label>Saç rəngi</label>' +
                    '<input type="text" placeholder="Saç rəngi" class="sac form-control" value="'+sac+'" required />' +
                    '<label>Kateqoriya</label>' +
                    '<input type="text" placeholder="kateqoriya" class="kateqoriya form-control" value="'+kateqoriya+'" required />' +
                    '<label>Təcrübə</label>' +
                    '<input type="text" placeholder="Təcrübə" class="tecrube form-control" value="'+tecrube+'" required />' +
                    '<label>Təcrübə keçilən yerlər</label>' +
                    '<input type="text" placeholder="Təcrübə keçilən yerlər" class="isler form-control" value="'+isler+'" required />' +
                    '<label>Şəkillər</label>' +
                    '<input type="text" placeholder="Şəkillər" class="sekiller form-control" value="'+sekiller+'" required />' ,
                    // '</div>' ,
                    // '</form>',
                buttons: {
                    formSubmit: {
                        text: 'Düzəliş et',
                        btnClass: 'btn-blue',
                        action: function () {
                            name = this.$content.find('.name').val();
                            surname = this.$content.find('.name').val();
                            email = this.$content.find('.email').val();
                            nomre = this.$content.find('.nomre').val();
                            cins = this.$content.find('.cins').val();
                            yas = this.$content.find('.yas').val();
                            boy = this.$content.find('.boy').val();
                            ceki = this.$content.find('.ceki').val();
                            olcu = this.$content.find('.olcu').val();
                            goz = this.$content.find('.goz').val();
                            sac = this.$content.find('.sac').val();
                            kateqoriya = this.$content.find('.kateqoriya').val();
                            tecrube = this.$content.find('.tecrube').val();
                            isler = this.$content.find('.isler').val();
                            sekiller = this.$content.find('.sekiller').val();
                            let _token = '{{csrf_token()}}';
                            if(!cins || !yas || !boy || !ceki || !olcu || !goz || !sac || !tecrube || !isler){
                                $.alert('Bosh saxlamayin');
                                return false;
                            }
                            $.post('/profil/edit', {id: id,name: name,surname: surname,email: email,nomre: nomre, cins: cins,yas:yas,boy:boy,ceki:ceki,olcu:olcu,goz:goz,sac:sac,kateqoriya:kateqoriya,tecrube:tecrube,isler:isler,sekiller:sekiller, _token: _token}, (response) => {
                                if(response.status == 'success') location.reload();
                                else 
                                {   
                                   // console.log(nomre);
                                    $.alert('Xeta var!');
                                }
                            })
                        }
                    },
                    "Bağla": function () {
                        //close
                    },
                }
            });
        }
    </script>
    </body>


@endsection