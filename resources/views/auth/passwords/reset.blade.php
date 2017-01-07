@extends('layouts.app') @section('content')
<div class="uk-grid pk-grid-large">
    <div class="row">
        <form class="pk-user pk-user-reset uk-form uk-form-stacked uk-width-medium-1-2 uk-width-large-1-3 uk-container-center" action="/user/resetpassword/request" method="post">
            <h1 class="uk-h2 uk-text-center">Forgot Password</h1>
            <p>Please enter your email address. You will receive a link to create a new password via email.</p>
            <div class="uk-form-row">
                <input class="uk-width-1-1" type="text" name="email" value="" placeholder="Email" required="" autofocus="">
            </div>
            <p class="uk-form-row">
                <button class="uk-button uk-button-primary uk-button-large uk-width-1-1" type="submit">Request password</button>
            </p>
            <input type="hidden" name="_csrf" value="a70da20052a7823df9570838f6cc570cdafb2f5d">
        </form>
        <div class="uk-width-3-4 uk-container-center">
            <div class="uk-panel-box uk-panel">
                <div class="uk-panel-heading">
                    <h3 class="panel-title uk-text-center">**Reset Password</div>

                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/reset') }}">
                        {{ csrf_field() }}

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="uk-form-row {{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 uk-form-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ $email or old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="uk-form-row {{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 uk-form-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="uk-form-row {{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 uk-form-label">Confirm Password</label>
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="uk-form-row ">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="uk-button uk-button-primary uk-button uk-button-primary-primary">
                                    Reset Password
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
