@extends('layouts.app') @section('content')
<div class="uk-grid pk-grid-large">
    <div class="tm-panel">
        <div class="uk-grid uk-flex-middle uk-grid-divider uk-grid-match uk-panel-box uk-panel" data-uk-grid-margin="">
            <div class="uk-width-large-1-2 uk-row-first">
                <div>
                    <h2 class="uk-text-center">Connect with Github<br> for easy access</h2>
                    <a href="/user/github" class="uk-button uk-button-success uk-button-large uk-width-1-1"><i class="uk-icon-github uk-icon-small uk-margin-small-right"></i> Sign in with Github</a>
                </div>
            </div>
            <div class="uk-width-large-1-2">
                <form class="uk-form uk-form-stacked" role="form" method="POST" action="{{ url('/login') }}">
                    {{ csrf_field() }}
                    <h2 class="uk-text-center">Sign in to your account</h2>
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
                        <input class="uk-width-1-1" type="email" name="email" placeholder="Email 地址" required="" autofocus="" value="{{ old('email') }}">
                    </div>
                    <div class="uk-form-row">
                        <input class="uk-width-1-1" type="password" name="password" value="" placeholder="密码" required="">
                    </div>
                    <p class="uk-form-row uk-margin-small-bottom">
                        <button class="uk-button uk-button-primary uk-button-large uk-width-1-1" type="submit">登录</button>
                    </p>
                    <ul class="uk-list uk-flex uk-flex-space-between uk-text-small uk-margin-bottom-remove">
                        <li>
                            <label>
                                <input type="checkbox" name="remember"> 记住我</label>
                        </li>
                        <li class="uk-text-right">
                            <a class="uk-link" href="{{ url('/password/reset') }}">找回密码</a>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
        <p class="uk-margin-large-top uk-text-center">还没有账号吗？ <a class="uk-link" href="/user/registration">即刻注册</a></p>
    </div>
</div>
@endsection
