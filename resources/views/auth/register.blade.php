@extends('layouts.app')

@section('content')
<div class="container">
    <form  method="POST" action="{{ route('register') }}" class="mt-3 w-100">
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
         <h2 class="text-center">Daxil Ol</h2>
         <div class="form-content mt-sm-3">
             
                 <input id="user-name" type="text" class="form-input @error('name') is-error @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Ad:">
                 @error('name')
                     <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                         </span>
                 @enderror
                  <input id="surname" type="text" class="form-input @error('surname') is-error @enderror" name="surname" value="{{ old('surname') }}" required autocomplete="surname" autofocus placeholder="Soyad:">

                   @error('surname')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror



                     <input id="Fincode" type="text" class=" form-input @error('Fincode')  is-error  @enderror" name="Fincode" value="{{ old('Fincode') }}" required autocomplete="Fincode" autofocus placeholder="Finkod:">

                             @error('Fincode')
                                 <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                 </span>
                             @enderror



                        

<br>

                                <input id="email" type="email" class="form-input @error('email') is-error    @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email:">

                             @error('email')
                                 <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                 </span>
                             @enderror


                                 <input id="password" type="password" class="form-input @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Şifrə">

                             @error('password')
                                 <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                 </span>
                             @enderror
                             
                             <input id="password-confirm" type="password" class="form-input" name="password_confirmation" required autocomplete="new-password" placeholder="Təkrar şifrə">
                       
                                 <label class="" for="">Ne kimi qeydiyatdan kecirsiz?</label>
                                 <br>
                                <label for="opt2" class="radio">
                                    <input type="radio" name="ismentor" id="opt2" class="hidden" value="1"/>
                                    <span class="label"></span>Mellim   
                                  </label>
                                  
                                  <label for="opt3" class="radio">
                                    <input type="radio" name="ismentor" id="opt3" class="hidden" value="0"/>
                                    <span class="label"></span>Usax
                                  </label>



                                @error('ismentor')

                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                             <input class="form-button" type="submit" name="submit" value="Daxil Ol">
                             <br><br>
                             <span class="ml-4">Hesabım Var!</span><a class="ml-2" href="/login">Login</a>
                            </div>
                        </form>
             

                    </div> 
@endsection