@extends('layouts.default')

@section('title')
{{ lang('User Login Require') }}_@parent
@stop

@section('content')
  <div class="uk-grid">
    <div class="uk-width-3-4 uk-container-center">
      <div class="uk-panel uk-panel-box">
        <div class="panel-heading">
          <h3 class="panel-title uk-text-center">{{ lang('Login') }}</h3>
        </div>
        <div class="panel-body">

          <form method="GET" action="{{route('login')}}" accept-charset="UTF-8">

              <div class="uk-alert uk-alert-warning">
                  {!! lang('You need to login to proceed.') !!}
              </div>
              <p class="uk-text-center uk-margin-bottom-remove">
                <a class="uk-button uk-button-primary" id="login-required-submit" href="{{ URL::route('auth.oauth', ['driver' => 'github']) }}"><i class="fa fa-github-alt"></i> {{lang('Login with GitHub')}}</a>
                <a class="uk-button uk-button-danger" href="{{ URL::route('auth.oauth', ['driver' => 'weibo']) }}"><i class="fa fa-weibo" ></i> {{lang('Login with Weibo')}}</a>
                </p>
        </form>

        </div>
      </div>
    </div>
  </div>

@stop
