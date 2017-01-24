@extends('layouts.default')

@section('title')
{{ lang('Email Verification Require') }}_@parent
@stop

@section('content')
  <div class="uk-grid">
    <div class="uk-width-3-4 uk-container-center">
      <div class="uk-panel uk-panel-box">
        <div class="panel-heading">
          <h3 class="panel-title uk-text-center">{{ lang('Email Verification') }}</h3>
        </div>
        <div class="panel-body">
            <form method="POST" id="email-verification-required-form" action="{{route('users.send-verification-mail')}}" accept-charset="UTF-8">
            {!! csrf_field() !!}
              <div class="uk-alert uk-alert-warning uk-alert-large">
                  邮箱未激活，请前往 {{ \Auth::user()->email }} 查收激活邮件，激活后才能完整地使用社区功能，如发帖和回帖。
                  <br /><br />
                  未收到邮件？请点击以下按钮重新发送验证邮件。
              </div>
              <p class="uk-text-center uk-margin-bottom-remove">
              <a class="uk-button uk-button-primary" id="email-verification-required-submit" href="javascript:$('#email-verification-required-form').submit();"><i class="fa fa-paper-plane" aria-hidden="true"></i> {{lang('Resend Verification Mail')}}</a>
              </p>
            </form>
        </div>
      </div>
    </div>
  </div>

@stop
