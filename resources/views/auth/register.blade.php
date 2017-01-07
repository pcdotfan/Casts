@extends('layouts.app') 
@push('script-extensions')
    <script src="/assets/js/uikit/components/form-password.min.js"></script>
@endpush
@section('content')
<div class="uk-grid pk-grid-large">
    <form class="uk-panel uk-panel-box tm-panel-small uk-form uk-form-stacked uk-container-center uk-container register-form" role="form" method="POST" action="{{ url('/register') }}">
    {{ csrf_field() }}
        <h1 class="uk-h2 uk-text-center">You are one step away from taking Pagekit for a test drive.</h1>
        <div class="pk-system-messages">
            @if (count($errors) > 0)
            <div class="uk-alert uk-alert-danger">
                <ul class="uk-list">
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div>
        <div class="uk-form-row">
            <input class="uk-width-1-1" type="text" name="name" value="{{ old('name') }}" required autofocus placeholder="Username">        
        </div>
        <div class="uk-form-row">
            <input class="uk-width-1-1" type="email" name="email" placeholder="E-Mail" value="{{ old('email') }}" required> 
        </div>
        <div class="uk-form-row">
            <div class="uk-form-password uk-width-1-1">
                <input class="uk-width-1-1" type="password" name="password" placeholder="Password">
                <a href="" class="uk-form-password-toggle" tabindex="-1" data-uk-form-password="{ lblShow: 'Show', lblHide: 'Hide' }">Show</a>
            </div>
        </div>
        <div class="uk-form-row">
            <div class="uk-form-password uk-width-1-1">
            <input class="uk-width-1-1" type="password" name="password_confirmation" placeholder="确认密码">
            </div>
        </div>
        <p class="uk-form-row">
            <button class="uk-button uk-button-primary uk-button-large uk-width-1-1" type="submit">Get it now</button>
        </p>
        <p class="uk-text-center">Already have an account? <a class="uk-link" href="/user/login">Login!</a></p>
    </form>
</div>
@endsection
