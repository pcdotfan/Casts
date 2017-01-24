@extends('layouts.default') @section('title') {{ lang('Create New Account') }}_@parent @stop @section('content') 
<div class="uk-grid" data-uk-grid-margin="" id="registration">
    <div class="uk-width-medium-2-3 uk-width-large-3-4 uk-row-first">
        <form method="POST" action="{{ route('signup') }}" accept-charset="UTF-8" class="tm-panel-small uk-form uk-form-stacked">
            {{ csrf_field() }}
            <h2 class="uk-h2 uk-text-center">仅剩最后一步</h2>
            <div class="uk-form-row {{{ $errors->has('name') ? 'has-error' : '' }}}">
                <input class="uk-width-1-1" placeholder="{{ lang('Username') }}" name="name" type="text" value="{{ $oauthData['name'] ?: '' }}"> {!! $errors->first('name', '<span class="help-block">:message</span>') !!}
                <p class="uk-form-help-block">社区昵称，将代替用户名显示</p>
            </div>
            @if($oauthData['driver'] == 'github')
            <div class="uk-form-row {{{ $errors->has('github_name') ? 'has-error' : '' }}}">
                <input class="uk-width-1-1" readonly="readonly" name="github_name" type="text" value="{{ isset($oauthData['github_name']) ? $oauthData['github_name'] : $oauthData['name'] }}"> {!! $errors->first('github_name', '<span class="help-block">:message</span>') !!}
                <p class="uk-form-help-block">GitHub 用户名，无法更改</p>
            </div>
            @endif
            <div class="uk-form-row {{{ $errors->has('email') ? 'has-error' : '' }}}">
                <input class="uk-width-1-1" name="email"  v-model="useremail" placeholder="{{ lang('Email') }}" type="text" value=""> {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
                <p class="uk-form-help-block">常用 E-Mail 地址，将用于社区通知及邮箱验证</p>
            </div>
            <p class="uk-form-row">
                <input class="uk-button uk-button-primary uk-button-large uk-width-1-1" type="submit" value="{{ lang('Confirm') }}">
            </p>
        </form>
    </div>
    <div class="uk-width-medium-1-3 uk-width-large-1-4">
        <div class="uk-panel uk-panel-box uk-text-center">
            <div class="uk-panel-teaser">
                <img height="280" width="280" alt="{{ isset($oauthData['github_name']) ? $oauthData['github_name'] : $oauthData['name'] }}" src="{{ $oauthData['image_url'] }}">
            </div>
            <h3 class="uk-panel-title uk-margin-bottom-remove uk-text-break">{{ isset($oauthData['github_name']) ? $oauthData['github_name'] : $oauthData['name'] }}
                <i title="已激活"></i>
            </h3>
            <div>
                <a class="uk-text-break" href="mailto:@{{ useremail }}">@{{ useremail }}</a><i class="uk-icon-check" title="Verified email address" style="display: none;"></i>
            </div>
        </div>
    </div>
</div>
<script>
    new Vue({
        el: '#registration',
        data: {
            useremail: 'useremail'
        }
    });
</script>
@stop
