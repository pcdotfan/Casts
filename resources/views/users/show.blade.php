@extends('layouts.default') @section('title') {{{ $user->name }}} {{ lang('Basic Info') }}_@parent @stop @section('content')
<div class="uk-grid pk-grid-large user-show" data-uk-grid-margin="">
    @include('users.partials.basicinfo')
    <div class="pk-width-content">
        @if ($user->introduction)
        <div class="uk-panel uk-panel-box uk-text-center">{{{ $user->introduction }}}</div>
        @endif @if ($user->is_banned == 'yes')
        <div class="text-center uk-alert uk-alert-danger"><b>{{ lang('This user is banned!') }}</b></div>
        @endif
        <div class="uk-panel uk-panel-box">
            <div class="panel-heading">
                <h3 class="panel-title uk-text-center"> {{ lang('Recent Topics') }} </h3>
            </div>
            <div class="panel-body">
                @if (count($topics)) @include('users.partials.topics') @else
                <div class="empty-block">{{ lang('Dont have any data Yet') }}~~</div>
                @endif
            </div>
        </div>
        <div class="uk-panel uk-panel-box">
            <div class="panel-heading">
                <h3 class="panel-title uk-text-center"> {{ lang('Recent Replies') }} </h3>
            </div>
            <div class="panel-body">
                @if (count($replies)) @include('users.partials.replies') @else
                <div class="empty-block">{{ lang('Dont have any comment yet') }}~~</div>
                @endif
            </div>
        </div>
    </div>
</div>
@stop
