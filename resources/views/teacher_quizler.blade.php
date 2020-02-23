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
                                <form action="/insert_quiz_topic" method="POST">
                                    @csrf
                                    <div class="modal-body">
                                        <label for="">Quizi adlandırın</label> <br>
                                        <input type="text" name="topic" placeholder="" required> <br><br>
                                        <label for="">Saat :</label>
                                        <select id="" name="hours">
                                                <option name="hour" value="0">0</option>
                                                <option name="hour" value="1">1</option>
                                                <option name="hour" value="2">2</option>
                                                <option name="hour" value="3">3</option>
                                                <option name="hour" value="4">4</option>
                                                <option name="hour" value="5">5</option>
                                                <option name="hour" value="6">6</option>
                                                <option name="hour" value="7">7</option>
                                                <option name="hour" value="8">8</option>
                                                <option name="hour" value="9">9</option>
                                                <option name="hour" value="10">10</option>
                                                <option name="hour" value="11">11</option>
                                                <option name="hour" value="12">12</option>
                                                <option name="hour" value="13">13</option>
                                                <option name="hour" value="14">14</option>
                                                <option name="hour" value="15">15</option>
                                                <option name="hour" value="16">16</option>
                                                <option name="hour" value="17">17</option>
                                                <option name="hour" value="18">18</option>
                                                <option name="hour" value="19">19</option>
                                                <option name="hour" value="20">20</option>
                                                <option name="hour" value="21">21</option>
                                                <option name="hour" value="22">22</option>
                                                <option name="hour" value="23">23</option>
                                                <option name="hour" value="24">24</option>
                                        </select> <br><br>
                                        <label for="">Dəqiqə :</label>
                                        <select id="" name="minutes">
                                                <option name="minute" value="0">0</option>
                                                <option name="minute" value="1">1</option>
                                                <option name="minute" value="2">2</option>
                                                <option name="minute" value="3">3</option>
                                                <option name="minute" value="4">4</option>
                                                <option name="minute" value="5">5</option>
                                                <option name="minute" value="6">6</option>
                                                <option name="minute" value="7">7</option>
                                                <option name="minute" value="8">8</option>
                                                <option name="minute" value="9">9</option>
                                                <option name="minute" value="10">10</option>
                                                <option name="minute" value="11">11</option>
                                                <option name="minute" value="12">12</option>
                                                <option name="minute" value="13">13</option>
                                                <option name="minute" value="14">14</option>
                                                <option name="minute" value="15">15</option>
                                                <option name="minute" value="16">16</option>
                                                <option name="minute" value="17">17</option>
                                                <option name="minute" value="18">18</option>
                                                <option name="minute" value="19">19</option>
                                                <option name="minute" value="20">20</option>
                                                <option name="minute" value="21">21</option>
                                                <option name="minute" value="22">22</option>
                                                <option name="minute" value="23">23</option>
                                                <option name="minute" value="24">24</option>
                                                <option name="minute" value="25">25</option>
                                                <option name="minute" value="26">26</option>
                                                <option name="minute" value="27">27</option>
                                                <option name="minute" value="28">28</option>
                                                <option name="minute" value="29">29</option>
                                                <option name="minute" value="30">30</option>
                                                <option name="minute" value="31">31</option>
                                                <option name="minute" value="32">32</option>
                                                <option name="minute" value="33">33</option>
                                                <option name="minute" value="34">34</option>
                                                <option name="minute" value="35">35</option>
                                                <option name="minute" value="36">36</option>
                                                <option name="minute" value="37">37</option>
                                                <option name="minute" value="38">38</option>
                                                <option name="minute" value="39">39</option>
                                                <option name="minute" value="40">40</option>
                                                <option name="minute" value="41">41</option>
                                                <option name="minute" value="42">42</option>
                                                <option name="minute" value="43">43</option>
                                                <option name="minute" value="44">44</option>
                                                <option name="minute" value="45">45</option>
                                                <option name="minute" value="46">46</option>
                                                <option name="minute" value="47">47</option>
                                                <option name="minute" value="48">48</option>
                                                <option name="minute" value="49">49</option>
                                                <option name="minute" value="50">50</option>
                                                <option name="minute" value="51">51</option>
                                                <option name="minute" value="52">52</option>
                                                <option name="minute" value="53">53</option>
                                                <option name="minute" value="54">54</option>
                                                <option name="minute" value="55">55</option>
                                                <option name="minute" value="56">56</option>
                                                <option name="minute" value="57">57</option>
                                                <option name="minute" value="58">58</option>
                                                <option name="minute" value="59">59</option>
                                        </select> <br><br>
                                        <label for="">Private</label>
                                        <input type="radio" name="show" placeholder="Cavab seçənəyi" required value="0">
                                        <label for="">Public</label>
                                        <input type="radio" name="show" placeholder="Cavab seçənəyi" required value="1"> <br><br>
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
                <h5 class="h5_settings text-center">Mövcud Quizlər</h5>
            </div>
            <div class="quiz_list">
          
                 @foreach($print as $data)
                 <a href="/teacher/quizler/title">
                    <div class="quiz_topic">
                       <h3>{{strtoupper($data['topic'])}}</h3>
                    </div>
                    </a>
                @endforeach
              
            </div>    
        </div>
    </div>
</body>

@endsection