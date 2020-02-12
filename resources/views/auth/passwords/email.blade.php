@extends('layouts.app')

@section('content')

        
            <div class="container">
                <form method="POST" action="{{ route('password.email') }}" class="mt-3 w-100">
                    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
                    @csrf
                    <input placeholder="Email:" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <br>
                            <button type="submit" class="btn btn-primary">
                                {{ __('Şifrə sıfırlama linkini göndərin') }}
                            </button>
                </form>
            </div>
       
           
@endsection
