@extends('root')

@section('content')
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h5 class="h5_settings text-center">Public Quizlər</h5>
            </div>
            <div class="row quiz_list">
                <div class="col-3">
                    <a href="/publictest"><h3>PHP</h3></a>
                </div>
                <div class="col-3">
                    <a href="/publictest"><h3>LARAVEL</h3></a>
                </div>
                <div class="col-3">
                    <a href="/publictest"><h3>JAVA SCRIPT</h3></a>
                </div>
                <div class="col-3">
                    <a href="/publictest"><h3>AJAX</h3></a>
                </div>
                <div class="col-3">
                    <a href="/publictest"><h3>CSS</h3></a>
                </div>
                <div class="col-3">
                    <a href="/publictest"><h3>ALQORITM</h3></a>
                </div>
            </div>
            
        </div>
    </div>

</body>
@endsection
