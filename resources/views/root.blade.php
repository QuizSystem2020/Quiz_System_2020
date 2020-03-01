<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/417cc65c8e.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" href="{{asset('css/teacher.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    
    <title>QuizSystem</title>
</head>


<script>





</script>
    
<style>
.quiz_question{
    width: 55%;
    margin: 0px 0px 25px 25%;
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

@media only screen and (max-width: 600px) {
    .quiz_question{
        width:80%;
        margin: 0px 0px 25px 10%;
    }
}
</style>

@yield('content')


</html>