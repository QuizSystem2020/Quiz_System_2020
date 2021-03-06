@extends('layouts.app')

@section('content')
<div class="container">
    

    <form   action="{{route('login')}}" method="post" class="mt-2 w-100">
        @csrf
        @if ($errors->any())
                     <div class="alert alert-danger">
                         <ul>
                             @foreach ($errors->all() as $error)
                                 <li>{{ $error }}</li>
                             @endforeach
                         </ul>
                     </div>
                 @endif
        <h1>Daxil Ol</h1>
       
        <div class="form-content">

        <input id="user-name" type="email" class="form-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email:" required autocomplete="email" autofocus>
          @error('email')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
          @enderror
          <br>
       <input id="password" type="password" class="form-input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"  placeholder="Şifrə:">
         @error('password')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
        @enderror
       <input class="form-button" type="submit" name="submit" value="Daxil Ol">
       <br>
       @if (Route::has('password.request'))
       <a class="btn btn-link" href="{{ route('password.request') }}">
           {{ __('Şifrəni unutmusunuz?') }}
       </a>
   @endif   <br>
            <span class="ml-4">Hesabınız yoxdu?</span><a class="ml-2" href="/register">Qeydiyyatdan keçin</a>
        </div>
    </form>
</div>
@endsection
