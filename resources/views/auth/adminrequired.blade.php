@extends('layouts.default')

@section('title')
{{ lang('Permission Deny') }}
@stop

@section('content')
  <div class="row">
    <div class="col-md-4 col-md-offset-4 floating-box">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">{{ lang('Notice') }}</h3>
        </div>
        <div class="panel-body">

          <form method="GET" action="{{route('login')}}" accept-charset="UTF-8">

            <fieldset>
              <div class="uk-alert uk-alert-warning">
                {!! lang('You dont have permission to proceed.') !!}
              </div>

            @if ( ! $currentUser)
                <p class="uk-text-center uk-margin-bottom-remove">
                <a class="uk-button uk-button-primary" id="login-required-submit" href="{{ URL::route('auth.oauth', ['driver' => 'github']) }}"><i class="fa fa-github-alt"></i> {{lang('Login with GitHub')}}</a>
                <a class="uk-button uk-button-danger" href="{{ URL::route('auth.oauth', ['driver' => 'weibo']) }}"><i class="fa fa-weibo" ></i> {{lang('Login with Weibo')}}</a>
                </p>
            @endif


            </fieldset>

        </form>

        </div>
      </div>
    </div>
  </div>

@stop
