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
        
         @foreach($data as $key => $item)
         <div class="col-12">
            <div class="quiz_question">
               <p class="question_title">{{$item->question}}</p>  
               @foreach($item->cavab as $key2 =>$item2)
                  <input type="radio" name="sual{{$key}}" value='{{$key2}}'>&nbsp; {{$variant[$key2]}})   {{$item2}} <br><br>
               @endforeach
               
            </div>
         </div>
         @endforeach
   
      </div>
      <div class="col-12 text-center mb-5">
         <button  class="btn btn-lg btn-success complete">Təsdiqlə</button> 
      </div>
   </div>
</body>

<script>


$('.complete').on('click' , function(){
   var arr = [];
   let  count = {{count($data)}}
   for(var i = 0 ; i < count; i++)
   {
       let radioValue = $("input[name='sual"+i+"']:checked").val();
      if(radioValue == null )
      {
         radioValue = 'bosh'
      } 
       arr.push(radioValue);
   }
   $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
   });

   $.ajax({
      url:'/cavabla',
      method:'POST',
      data:{'cavab': arr , 'id':{{$quiz_id}}},
      success : function(response)
      {
         alert('bosh : ' + response.bosh + '\nduz :  ' + response.duz + '\nsehv : ' + response.sehv);
         location.href = '/student';
      }
   })
})

function startTimer(duration, display) {
    var timer = duration, minutes, seconds;
    setInterval(function () {
        minutes = parseInt(timer / 60, 10);
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.textContent = minutes + ":" + seconds;

        if (--timer < 0) {
            timer = duration;
        }
         //   when exam finished
        if(minutes == 0 && seconds == 0){
           timer = 0;
           var arr = [];
   let  count = {{count($data)}}
   for(var i = 0 ; i < count; i++)
   {
       let radioValue = $("input[name='sual"+i+"']:checked").val();
      if(radioValue == null )
      {
         radioValue = 'bosh'
      } 
       arr.push(radioValue);
   }
   console.log(arr)
   $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
   });

   $.ajax({
      url:'/cavabla',
      method:'POST',
      data:{'cavab': arr , 'id':{{$quiz_id}}},
      success : function(response)
      {   
         alert('bosh : ' + response.bosh + '\nduz :  ' + response.duz + '\nsehv : ' + response.sehv);
         location.href = '/student';
      }
   })
        }
      //   =================
    }, 1000);
}
</script>

@endsection
