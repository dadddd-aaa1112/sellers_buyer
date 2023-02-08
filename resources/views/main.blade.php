@if(auth()->user())
    @include('auth.login')
@else
    @include('auth.register')
@endif
