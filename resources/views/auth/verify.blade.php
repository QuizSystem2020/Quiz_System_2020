@extends('layouts.app')

@section('content')
<div class="container">  
                    <form class="d-inline mt-3 w-100" method="POST" action="{{ route('verification.resend') }}">
                        @if (session('resent'))

                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif
                    {{ __('Davam etməzdən əvvəl e-poçtunuzu doğrulama bağlantısı üçün yoxlayın..') }}    
                    {{ __('E-poçt almamısınızsa') }},
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('Testiq linkini yeniden gonder') }}</button>.

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
