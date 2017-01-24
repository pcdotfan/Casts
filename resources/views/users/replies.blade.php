@extends('layouts.default') @section('title') {{{ $user->name }}} {{ lang('Reply List') }}_@parent @stop @section('content')
<div class="uk-grid pk-grid-large user-show" data-uk-grid-margin="">
    @include('users.partials.basicinfo')
    <div class="pk-width-content">
        <div class="uk-panel uk-panel-box panel-default">
            <div class="panel-body uk-padding-remove">
                @if (count($replies)) @include('users.partials.replies')
                <div class="uk-float-right add-padding-vertically">
                    {!! $replies->render() !!}
                </div>
                @else
                <div class="empty-block">{{ lang('Dont have any comment yet') }}~~</div>
                @endif
            </div>
        </div>
    </div>
</div>
@stop
