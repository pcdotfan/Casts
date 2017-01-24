@extends('layouts.default') @section('title') {{ lang('Edit Email Notify') }}_@parent @stop @section('content')
<div class="uk-grid pk-grid-large user-show" data-uk-grid-margin="">
    @include('users.partials.setting_nav')
    <div class="pk-width-content">
        <div class="uk-panel uk-panel-box">
            <div class="uk-margin uk-flex uk-flex-space-between uk-flex-wrap" data-uk-margin="">
                <div data-uk-margin="">
                    <h2><i class="fa fa-picture-o" aria-hidden="true"></i> {{ lang('Edit Email Notify') }}</h2>
                </div>
                <div data-uk-margin="">
                    <a href="javascript:document.getElementById('email-notify').submit();">
                        <button class="uk-button uk-button-primary" id="upload-button" type="submit">{{ lang('Apply Changes') }}</button>
                    </a>
                </div>
            </div>
            <hr> @include('layouts.partials.errors')
            <form class="uk-form-horizontal uk-form" method="POST" action="{{ route('users.update_email_notify', $user->id) }}" accept-charset="UTF-8" id="email-notify">
                {!! csrf_field() !!}
                <div class="uk-form-row">
                <label class="uk-form-label">{{ lang('Send email when replied') }}</label>
                  <div class="uk-form-controls">
                        <input type="checkbox" name="email_notify_enabled" {{ $user->email_notify_enabled == 'yes' ? 'checked' : '' }}>
                  </div>
                </div>
                <div class="form-group" style="display: none">
                    <div class="col-sm-offset-2 col-sm-10">
                        <input class="btn btn-primary btn-lg" id="user-edit-submit" type="submit" value="{{ lang('Apply Changes') }}">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@stop
