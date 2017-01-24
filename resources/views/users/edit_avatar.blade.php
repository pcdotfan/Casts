@extends('layouts.default') @section('title') {{ lang('Photo Upload') }}_@parent @stop @section('content') @push('addon')
<link href="https://cdn.bootcss.com/uikit/2.27.1/css/components/form-file.css" rel="stylesheet"> @stop
<div class="uk-grid pk-grid-large user-show" data-uk-grid-margin="">
    @include('users.partials.setting_nav')
    <div class="pk-width-content">
        <div class="uk-panel uk-panel-box">
            <div class="uk-margin uk-flex uk-flex-space-between uk-flex-wrap" data-uk-margin="">
                <div data-uk-margin="">
                    <h2><i class="fa fa-picture-o" aria-hidden="true"></i> {{ lang('Please Choose a Photo') }}</h2>
                </div>
                <div data-uk-margin="">
                    <a href="javascript:document.getElementById('upload-avatar').submit();">
                        <button class="uk-button uk-button-primary" id="upload-button" type="submit">{{ lang('Photo Upload') }}</button>
                    </a>
                </div>
            </div>
            <hr> @include('layouts.partials.errors')
            <div class="uk-grid" data-uk-grid-margin="">
                <div class="uk-container-center">
                    <form method="POST" action="{{ route('users.update_avatar', $user->id) }}" enctype="multipart/form-data" accept-charset="UTF-8" class="uk-form uk-form-horizontal" id="upload-avatar">
                        <input name="_method" type="hidden" value="PATCH"> {!! csrf_field() !!}
                        <div id="image-preview-div">
                            <div class="uk-panel uk-panel-box uk-text-center">
                                <div class="uk-panel-teaser">
                                    <img id="preview-img" width="280" height="280" class="avatar-preview-img" src="{{$user->present()->gravatar(380)}}">
                                </div>
                                <h3 class="uk-panel-title uk-margin-bottom-remove uk-text-break">当前头像</h3>
                                <div class="uk-panel-teaser">
                                    <div class="uk-form-file">
                                        <button class="uk-button uk-button-primary uk-width-1-1">选择文件</button>
                                        <input type="file" name="avatar" id="file" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="uk-alert" id="loading" style="display: none;" role="alert">
                            {{ lang('Uploading image...') }}
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                </div>
                            </div>
                        </div>
                        <div id="message"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
