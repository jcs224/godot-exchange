@extends("layout")

@section('content')
<div class="row">
    <div class="medium-6 medium-offset-3 large-4 large-offset-4 columns">
        <div class="panel">
            @if (count($errors) > 0)
            <div class="errors">
            <strong>Whoops!</strong>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            
            <form role="form" method="POST" action="{{ url("auth/login") }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                
                <div class="row">
                    <div class="large-12 columns">
                        <label>Email
                            <input type="email" name="email" value="{{ old("email") }}">
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="large-12 columns">
                        <label>Password
                            <input type="password" name="username">
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="large-12 columns">
                        
                        <input id="remember" type="checkbox" name="remember">
                        <label for="remember">Remember Me</label>
                    </div>
                </div>
                <div class="row">
                    <div class="large-12 columns">
                        <input type="submit" id="submit-button" class="button expand" value="Log In">
                    </div>
                </div>
                <div class="row">
                    <div class="large-12 columns">
                        <a href="{{ url('password/email') }}">Forgot your password?</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@stop

@section("styles")
<link rel="stylesheet" href="{{ URL::to("stylesheets/login.css") }}" />

<style>
    #submit-button {
        margin-top: 10px;
    }
</style>
@stop

