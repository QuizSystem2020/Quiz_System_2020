@extends('root')

@section('content')
<body>
    
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h5 class="h5_settings text-center">Public Quizlər</h5>
            </div>
            <div class="row quiz_list">
                @foreach ($data as $item)
                <a href="/publictest/{{$item->id}}">
                    <div class="col-md-3 col-sm-3">
                        <h3>{{$item->topic}}</h3>
                    </div>
                </a>
                @endforeach
            </div>
            <nav>
                {{$data->links()}}
            </nav>
        </div>
    </div>

</body>
@endsection
