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
            
            <form role="form" method="POST" action="{{ url("password/reset") }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="token" value="{{ $token }}">
                
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
                            <input type="password" name="password">
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="large-12 columns">
                        <label>Confirm Password
                            <input type="password" name="password_confirmation">
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="large-12 columns">
                        <input type="submit" id="submit-button" class="button expand" value="Reset Password">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section("styles")
<link rel="stylesheet" href="{{ URL::to("stylesheets/login.css") }}" />

<style>
    #submit-button {
        margin-bottom: 0;
    }
</style>
@stop
