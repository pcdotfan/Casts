@extends('layouts.app')
<!-- Main Content -->
@section('content')
<div class="uk-grid pk-grid-large">
<form class="uk-form uk-form-stacked uk-width-medium-1-2 uk-width-large-2-5 uk-panel uk-panel-box uk-container uk-container-center" action="{{ url('/password/email') }}" method="post">
    {{ csrf_field() }}
    <h1 class="uk-h2 uk-text-center">Forgot Password</h1>
    <p>Please enter your email address. You will receive a link to create a new password via email.</p>
    <div class="pk-system-messages">
        @if (count($errors) > 0)
        <div class="uk-alert uk-alert-danger">
            <ul class="uk-list">
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif @if (session('status'))
        <div class="uk-alert uk-alert-success">
            {{ session('status') }}
        </div>
        @endif
    </div>
    <div class="uk-form-row">
        <input class="uk-width-1-1" type="text" name="email" value="{{ old('email') }}" placeholder="Email" required="" autofocus="">
    </div>
    <p class="uk-form-row">
        <button class="uk-button uk-button-primary uk-button-large uk-width-1-1 uk-margin" type="submit">Request password</button>
    </p>
</form>

</div>
@endsection
