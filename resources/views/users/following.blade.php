@extends('layouts.default') @section('title') {{{ $user->name }}} {{ lang('Following User') }}_@parent @stop @section('content')
<div class="uk-grid pk-grid-large user-show" data-uk-grid-margin="">
    @include('users.partials.basicinfo')
    <div class="pk-width-content">
        <div class="uk-panel uk-panel-box panel-default">
            <div class="panel-body uk-padding-remove">
                @if (count($users)) @include('users.partials.users')
                <div class="pull-right add-padding-vertically">
                    {!! $users->render() !!}
                </div>
                @else
                <div class="empty-block">{{ lang('Dont have any data Yet') }}~~</div>
                @endif
            </div>
        </div>
    </div>
</div>
@stop
