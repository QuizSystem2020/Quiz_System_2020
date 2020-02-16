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
                                <form action="/insert_quiz_topic" method="POST">
                                    @csrf
                                    <label for="">Quizi adlandırın</label> <br>
                                    <input type="text" name="topic" placeholder="" required> <br><br>
                                    <label for="">Saat :</label>
                                    <select name="hour" id="">
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                        <option value="24">24</option>
                                    </select> <br><br>
                                    <label for="">Dəqiqə :</label>
                                    <select name="minute" id="">
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                        <option value="24">24</option>
                                        <option value="25">25</option>
                                        <option value="26">26</option>
                                        <option value="27">27</option>
                                        <option value="28">28</option>
                                        <option value="29">29</option>
                                        <option value="30">30</option>
                                        <option value="31">31</option>
                                        <option value="32">32</option>
                                        <option value="33">33</option>
                                        <option value="34">34</option>
                                        <option value="35">35</option>
                                        <option value="36">36</option>
                                        <option value="37">37</option>
                                        <option value="38">38</option>
                                        <option value="39">39</option>
                                        <option value="40">40</option>
                                        <option value="41">41</option>
                                        <option value="42">42</option>
                                        <option value="43">43</option>
                                        <option value="44">44</option>
                                        <option value="45">45</option>
                                        <option value="46">46</option>
                                        <option value="47">47</option>
                                        <option value="48">48</option>
                                        <option value="49">49</option>
                                        <option value="50">50</option>
                                        <option value="51">51</option>
                                        <option value="52">52</option>
                                        <option value="53">53</option>
                                        <option value="54">54</option>
                                        <option value="55">55</option>
                                        <option value="56">56</option>
                                        <option value="57">57</option>
                                        <option value="58">58</option>
                                        <option value="59">59</option>
                                    </select> <br><br>
                                    <label for="">Private</label>
                                    <input type="radio" name="show" placeholder="Cavab seçənəyi" required>
                                    <label for="">Public</label>
                                    <input type="radio" name="show" placeholder="Cavab seçənəyi" required> <br><br>
                                    <button type="button" class="btn btn-success" data-dismiss="modal">Yarat</button>
                                </form>
                                
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