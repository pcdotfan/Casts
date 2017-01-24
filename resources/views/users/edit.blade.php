@extends('layouts.default') @section('title') {{ lang('Edit Profile') }}_@parent @stop @section('content')
<div class="users-show uk-grid pk-grid-large" data-uk-grid-margin="">
    @include('users.partials.setting_nav')
    <div class="main-col pk-width-content">
        <div class="uk-panel uk-panel-box">
            <div class="uk-margin uk-flex uk-flex-space-between uk-flex-wrap" data-uk-margin="">
                <div data-uk-margin="">
                    <h2 class="uk-margin-remove">{{ lang('Edit Profile') }}</h2>
                </div>
                <div data-uk-margin="">
                    <a href="javascript:document.getElementById('profile-form').submit();">
                        <button class="uk-button uk-button-primary" type="submit">保存</button>
                    </a>
                </div>
            </div>
            <hr> @include('layouts.partials.errors')
            <form class="form-horizontal uk-form uk-form-horizontal" id="profile-form" method="POST" action="{{ route('users.update', $user->id) }}" accept-charset="UTF-8" enctype="multipart/form-data">
                <input name="_method" type="hidden" value="PATCH"> {!! csrf_field() !!}
                <div class="uk-form-row">
                    <label for="" class="uk-form-label">{{ lang('GitHub Name') }}</label>
                    <div class="uk-form-controls">
                        <input class="uk-form-width-large" name="github_name" type="text" value="{{ $user->github_name }}">
                        <p class="uk-form-help-block">请跟 GitHub 上保持一致</p>
                    </div>
                </div>
                <div class="uk-form-row">
                    <label for="" class="uk-form-label">{{ lang('Email') }}</label>
                    <div class="uk-form-controls">
                        <input class="uk-form-width-large" name="email" type="text" value="{{ $user->email }}">
                        <p class="uk-form-help-block">{{ lang('Email example: name@website.com') }}</p>
                    </div>
                </div>
                <div class="uk-form-row">
                    <label for="" class="uk-form-label">{{ lang('Real Name') }}</label>
                    <div class="uk-form-controls">
                        <input class="uk-form-width-large" name="real_name" type="text" value="{{ $user->real_name }}">
                        <p class="uk-form-help-block">{{ lang('Real Name example: 李小明') }}</p>
                    </div>
                    <div class="uk-form-row">
                        <label for="" class="uk-form-label">{{lang('City')}}</label>
                        <div class="uk-form-controls">
                            <input class="uk-form-width-large" name="city" type="text" value="{{ $user->city }}">
                            <p class="uk-form-help-block">
                                {{lang('City example: BeiJing')}}
                            </p>
                        </div>
                    </div>
                    <div class="uk-form-row">
                        <label for="" class="uk-form-label">{{ lang('Company') }}</label>
                        <div class="uk-form-controls">
                            <input class="uk-form-width-large" name="company" type="text" value="{{ $user->company }}">
                            <p class="uk-form-help-block">
                                {{ lang('Company example: Alibaba') }}
                            </p>
                        </div>
                    </div>
                    <div class="uk-form-row">
                        <label for="" class="uk-form-label">{{ lang('Weibo Username') }}</label>
                        <div class="uk-form-controls">
                            <input class="uk-form-width-large" name="weibo_name" type="text" value="{{ $user->weibo_name}}">
                            <p class="uk-form-help-block">
                                {{ lang('Weibo Username example: MakerPlus') }}
                            </p>
                        </div>
                    </div>
                    <div class="uk-form-row">
                        <label for="" class="uk-form-label">微博个人页面</label>
                        <div class="uk-form-controls">
                            <input class="uk-form-width-large" name="weibo_link" type="text" value="{{ $user->weibo_link}}">
                            <p class="uk-form-help-block">
                                微博个人主页链接，如：http://weibo.com/laravelnews
                            </p>
                        </div>
                    </div>
                    <div class="uk-form-row">
                        <label for="" class="uk-form-label">{{ lang('twitter_placeholder') }}</label>
                        <div class="uk-form-controls">
                            <input class="uk-form-width-large" name="twitter_account" type="text" value="{{ $user->twitter_account}}">
                            <p class="uk-form-help-block">
                                {{ lang('twitter_placeholder_hint') }}
                            </p>
                        </div>
                    </div>
                    <div class="uk-form-row">
                        <label for="" class="uk-form-label">{{ lang('LinkedIn') }}</label>
                        <div class="uk-form-controls">
                            <input class="uk-form-width-large" name="linkedin" type="text" value="{{ $user->linkedin}}">
                            <p class="uk-form-help-block">
                                你的 <a href="https://www.linkedin.com">LinkedIn</a> 主页完整 URL 地址，如：https://cn.linkedin.com/in/summerblue
                            </p>
                        </div>
                    </div>
                    <div class="uk-form-row">
                        <label for="" class="uk-form-label">{{ lang('personal_website_placebolder') }}</label>
                        <div class="uk-form-controls">
                            <input class="uk-form-width-large" name="personal_website" type="text" value="{{ $user->personal_website }}">
                            <p class="uk-form-help-block">
                                {{ lang('personal_website_placebolder_hint') }}
                            </p>
                        </div>
                    </div>
                    <div class="uk-form-row">
                        <label for="wechat_qrcode" class="uk-form-label">微信账号二维码</label>
                        <div class="uk-form-controls">
                            <input type="file" name="wechat_qrcode"> @if($user->wechat_qrcode)
                            <img class="payment-qrcode" src="{{ $user->wechat_qrcode }}" alt="" /> @endif
                            <p class="uk-form-help-block">
                                你的微信个人账号，或者订阅号
                            </p>
                        </div>
                    </div>
                    <div class="uk-form-row">
                        <label for="" class="uk-form-label">支付二维码</label>
                        <div class="uk-form-controls">
                            <input type="file" name="payment_qrcode"> @if($user->payment_qrcode)
                            <img class="payment-qrcode" src="{{ $user->payment_qrcode }}" alt="" /> @endif
                            <p class="uk-form-help-block">
                                文章打赏时使用，微信支付二维码
                            </p>
                        </div>
                    </div>
                    <div class="uk-form-row">
                        <label for="" class="uk-form-label">{{ lang('introduction_placeholder') }}</label>
                        <div class="uk-form-controls">
                            <textarea class="uk-form-width-large" rows="3" name="introduction" cols="50">{{ $user->introduction }}</textarea>
                            <p class="uk-form-help-block">
                                {{ lang('introduction_placeholder_hint') }}，大部分情况下会在你的头像和名字旁边显示
                            </p>
                        </div>
                    </div>
                    <div class="uk-form-row" style="display: none">
                        <div class="col-sm-offset-2 col-sm-6">
                            <input class="btn btn-primary" id="user-edit-submit" type="submit" value="{{ lang('Apply Changes') }}">
                        </div>
                    </div>
            </form>
            </div>
        </div>
    </div>
    @stop
