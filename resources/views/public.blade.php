@extends('root')

@section('content')
<body>
    
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h5 class="h5_settings text-center">Public Quizlər</h5>
            </div>
            <div class="quiz_list">
                @foreach ($data as $item)
                <a href="/publictest/{{$item->id}}">
                    <div class="quiz_topic">
                        <h3>{{$item->topic}}</h3>
                    </div>
                </a>
                @endforeach
            </div>
           
        </div>
    </div>
    <nav class='pagination'>
        {{$data->links()}}
    </nav>
</body>
@endsection
