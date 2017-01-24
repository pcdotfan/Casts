@extends('layouts.default') @section('title') {{ lang('Edit Social Binding') }}_@parent @stop @section('content')
<div class="uk-grid pk-grid-large user-show" data-uk-grid-margin="">
    @include('users.partials.setting_nav')
    <div class="pk-width-content">
        <div class="uk-panel uk-panel-box">
            <div class="uk-margin uk-flex uk-flex-space-between uk-flex-wrap" data-uk-margin="">
                <div data-uk-margin="">
                    <h2><i class="fa fa-cog" aria-hidden="true"></i> {{ lang('Edit Social Binding') }}</h2>
                </div>
            </div>
            <hr> @include('layouts.partials.errors')
            <div class="uk-alert">
                {{ lang('Setup multiple Bindings allow you to login to the same account with different binding site account.') }}
            </div>
            <form class="uk-form uk-form-horizontal" method="POST" action="{{ route('users.update_email_notify', $user->id) }}" accept-charset="UTF-8">
                {!! csrf_field() !!}
                <div class="uk-form-row">
                    <label class="uk-form-label">{{ lang('Register Binding') }}</label>
                    <div class="uk-form-controls">
                        <a class="uk-button uk-button-danger login-btn weibo-login-btn {{ $user->register_source == 'weibo' ? '' : 'uk-hidden' }}" role="button">
                            <i class="fa fa-weibo"></i> {{ lang('Weibo') }}
                        </a>
                        <a class="uk-button uk-button-success login-btn {{ $user->register_source == 'github' ? '' : 'uk-hidden' }}" role="button">
                            <i class="fa fa-github-alt"></i> {{ lang('GitHub') }}
                        </a>
                        <p class="uk-form-help-block">{{ lang('Not allow to change register binding account') }}</p>
                    </div>
                </div>
                <div class="uk-form-row">
                    <label class="uk-form-label">{{ lang('Available Bindings') }}</label>
                    <div class="uk-form-controls">
                        @if($user->register_source != 'weibo') @if($user->weibo_id)
                        <a href="javascript:void(0);" class="uk-button uk-button-danger login-btn">
                        @else
                        <a href="{{ URL::route('auth.oauth', ['driver' => 'weibo']) }}" class="uk-button login-btn">
                        @endif
                          <i class="fa fa-weibo"></i>
                          {{ lang('Weibo') }}
                        </a> @endif @if($user->register_source != 'github') @if($user->github_id > 0)
                        <a href="javascript:void(0);" class="uk-button uk-button-success login-btn">
                            @else
                            <a href="{{ URL::route('auth.oauth', ['driver' => 'github']) }}" class="uk-button login-btn">
                            @endif
                              <i class="fa fa-github-alt"></i>
                              {{ lang('GitHub') }}
                            </a> @endif @if($user->github_id > 0 && $user->weibo_id)
                        <p class="uk-form-help-block">{{ lang('Already binded to this account') }}</p> @else
                        <p class="uk-form-help-block">{{ lang('Click to bind to this account') }}</p> @endif
                    </div>
                </div>
                <br>
                <br>
            </form>
        </div>
    </div>
</div>
@stop
