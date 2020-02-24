@extends('root')

@section('content')


<body>
<div class='timer_div' id='time'>
loading...
   <script>
   window.onload = function () {
    var fiveMinutes = 60 *   {{$test_time}},
    display = document.querySelector('#time');
    startTimer(fiveMinutes, display);
   };
   </script>
    </div>
    
   <div class="container">

      <div class="row">
         <div class="col-12">
            <h5 class="h5_settings text-center">{{$quiz_topic}}</h5>
         </div>
      </div>
      <div class="row">
        
         @foreach($data as  $item)
         <div class="col-12">
            <div class="quiz_question">
               <p class="question_title">{{$item->question}}</p>  
               @foreach($item->cavab as $key => $item2)
                  <input type="radio" name="sual">&nbsp; {{$variant[$key]}}) {{$item2}} <br><br>
               @endforeach
               
            </div>
         </div>
         @endforeach
        
      </div>
      <div class="col-12 text-center mb-5">
         <button class="btn btn-lg btn-success complete">Təsdiqlə</button> 
      </div>
   </div>
</body>


@endsection
