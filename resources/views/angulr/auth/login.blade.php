@extends('angulr.auth.auth_base')

@section('content')
    <div class="wrapper text-center">
        <strong>Sign in to get in touch</strong>
    </div>
    <form name="form" class="form-horizontal form-validation" role="form" method="POST" action="{{ url('/login') }}">
        {!! csrf_field() !!}
        @if (!empty($errors))
            <div class="text-danger wrapper text-center">
                {{$errors->first()}}
            </div>
        @endif
        <div class="list-group list-group-sm">
            <div class="list-group-item">
                <input type="email" placeholder="Email" class="form-control no-border" name="email"
                       value="{{ old('email') }}" required autofocus>
            </div>
            <div class="list-group-item">
                <input type="hidden" name="grant_type" value="password"/>
                <input type="password" placeholder="Password" class="form-control no-border" name="password"
                       required>
            </div>
        </div>
        <button type="submit" class="btn btn-lg btn-primary btn-block">
            Log in
        </button>
        <div class="text-center m-t m-b"><a href="{{ url('/password/reset') }}">Forgot password?</a></div>

        <div class="wrapper"></div>
        <div class="line line-dashed"></div>
        <p class="text-center">
            <small>Do not have an account?</small>
        </p>
        <a href="{{ url('/register') }}" class="btn btn-lg btn-default btn-block">Create an account</a>
    </form>
@endsection