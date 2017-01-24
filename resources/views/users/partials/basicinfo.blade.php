<div class="pk-width-sidebar uk-row-first">
    <div class="uk-panel uk-panel-box">
        <div class="padding-sm user-basic-info">
            <div style="">
                <div class="user-basic-meta uk-grid uk-grid-small">
                    <div class="uk-width-1-2">
                        <div class="image">
                            @if ($currentUser && $currentUser->id == $user->id)
                            <a href="{{ route('users.edit_avatar', $user->id) }}" class="" data-uk-tooltip title="修改头像">
                      <img class="radius-avatar img-thumbnail" src="{{ $user->present()->gravatar(200) }}">
                  </a> @else
                            <img class="radius-avatar avatar img-thumbnail" src="{{ $user->present()->gravatar(200) }}"> @endif
                        </div>
                        @if ($user->present()->hasBadge())
                        <div class="role-label">
                            <span class="uk-badge-label uk-badge-success role">{{{ $user->present()->badgeName() }}}</span>
                        </div>
                        @endif
                    </div>
                    <div class="uk-width-1-2">
                        <h3 class="uk-text-left uk-text-truncate">
                            {{ $user->name }}
                        </h3>
                        <div class="item">
                            {{ $user->real_name }}
                        </div>
                        <div class="item">
                            第 {{ $user->id }} 位会员
                        </div>
                        <div class="item number">
                            注册于 <span class="timeago">{{ $user->created_at }}</span>
                        </div>
                        @if($user->last_actived_at)
                        <div class="item number">
                            活跃于 <span class="timeago">{{ $user->last_actived_at }}</span>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            <hr>
            <div class="follow-info uk-grid uk-grid-small">
                <div class="uk-width-1-3 uk-text-center">
                    <a class="counter" href="{{ route('users.followers', $user->id) }}">{{ $user->follower_count }}</a>
                    <a class="text" href="{{ route('users.followers', $user->id) }}">关注者</a>
                </div>
                <div class="uk-width-1-3 uk-text-center">
                    <a class="counter" href="{{ route('users.replies', $user->id) }}">{{ $user->reply_count }}</a>
                    <a class="text" href="{{ route('users.replies', $user->id) }}">评论</a>
                </div>
                <div class="uk-width-1-3 uk-text-center">
                    <a class="counter" href="{{ route('users.topics', $user->id) }}">{{ $user->topic_count }}</a>
                    <a class="text" href="{{ route('users.topics', $user->id) }}">话题</a>
                </div>
            </div>
            <hr>
            <div class="topic-author-box uk-text-center">
                <ul class="list-inline">
                    @if ($user->github_name)
                    <li class="" data-uk-tooltip title="{{ $user->github_name }}">
                        <a href="https://github.com/{{ $user->github_name }}" target="_blank">
                            <i class="fa fa-github-alt"></i> GitHub
                        </a>
                    </li>
                    @endif @if ($user->weibo_link)
                    <li class="" data-uk-tooltip title="{{ $user->weibo_name }}">
                        <a href="{{ $user->weibo_link }}" rel="nofollow" class="weibo" target="_blank"><i class="fa fa-weibo"></i> Weibo
                </a>
                    </li>
                    @endif @if ($user->wechat_qrcode)
                    <li class="" data-uk-tooltip title="<img src='{{ $user->wechat_qrcode }}' style='width:100%'>">
                        <i class="fa fa-wechat"></i> WeChat
                    </li>
                    @endif @if ($user->twitter_account)
                    <li class="" data-uk-tooltip title="{{ $user->twitter_account }}">
                        <a href="https://twitter.com/{{ $user->twitter_account }}" rel="nofollow" class="twitter" target="_blank"><i class="fa fa-twitter"></i> Twitter
                </a>
                    </li>
                    @endif @if ($user->linkedin)
                    <li class="" data-uk-tooltip title="点击查看 LinkedIn 个人资料">
                        <a href="{{ $user->linkedin }}" rel="nofollow" class="linkedin" target="_blank"><i class="fa fa-linkedin"></i> LinkedIn
                </a>
                    </li>
                    @endif @if ($user->personal_website)
                    <li class="" data-uk-tooltip title="{{ $user->personal_website }}">
                        <a href="http://{{ $user->personal_website }}" rel="nofollow" target="_blank" class="url">
                            <i class="fa fa-globe"></i> {{ lang('Website') }}
                        </a>
                    </li>
                    @endif @if ($user->company)
                    <li class="" data-uk-tooltip title="{{ $user->company }}"><i class="fa fa-users"></i> {{{ lang('Company') }}}</li>
                    @endif @if ($user->city)
                    <li class="" data-uk-tooltip title="{{ $user->city }}"><i class="fa fa-map-marker"></i> {{{ lang('City') }}}</li>
                    @endif
                </ul>
            </div>
            @if(Auth::check())
            <hr> @endif @if ($currentUser && ($currentUser->id == $user->id || Entrust::can('manage_users')))
            <a class="uk-button uk-button-primary uk-width-1-1" href="{{ route('users.edit', $user->id) }}" id="user-edit-button">
                <i class="fa fa-edit"></i> {{ lang('Edit Profile') }}
            </a>
            @endif @if(Auth::check() && $currentUser->id != $user->id)
            <!--{{$isFollowing= $currentUser && $currentUser->isFollowing($user->id) ? true : false}}-->
            <a data-method="post" class="uk-width-1-1 uk-button uk-button-{{ !$isFollowing ? 'warning' : 'danger' }} btn-block" href="javascript:void(0);" data-url="{{ route('users.doFollow', $user->id) }}" id="user-edit-button">
                <i class="fa {{!$isFollowing ? 'fa-plus' : 'fa-minus'}}"></i> {{ !$isFollowing ? lang('Follow') : lang('Unfollow') }}
            </a>
            @endif @if ($currentUser && Entrust::can('manage_users') && ($currentUser->id != $user->id))
            <a data-method="post" class="uk-width-1-1 uk-button uk-button-{{ $user->is_banned == 'yes' ? 'warning' : 'danger' }} btn-block" href="javascript:void(0);" data-url="{{ route('users.blocking', $user->id) }}" id="user-edit-button" onclick=" return confirm('{{ lang('Are you sure want to '. ($user->is_banned == 'yes' ? 'unblock' : 'block') . ' this User?') }}')">
                <i class="fa fa-times"></i> {{ $user->is_banned == 'yes' ? lang('Unblock User') : lang('Block User') }}
            </a>
            @endif {{-- @if(Auth::check() && Auth::id() == $user->id) @include('users.partials.login_QR') @endif --}}
        </div>
    </div>
    <div class="uk-panel uk-panel-box">
        <ul class="uk-nav uk-nav-side pk-nav-large">
            <li class="{{ navViewActive('users.topics') }}"><a href="{{ route('users.topics', $user->id) }}" ><i class="text-md fa fa-list-ul"></i> Ta 发布的话题</a></li>
            <li class="{{ navViewActive('users.replies') }}"><a href="{{ route('users.replies', $user->id) }}" ><i class="text-md fa fa-comment"></i> Ta 发表的回复</a></li>
            <li class="{{ navViewActive('users.following') }}"><a href="{{ route('users.following', $user->id) }}" ><i class="text-md fa fa-eye"></i> Ta 关注的用户</a></li>
            <li class="{{ navViewActive('users.votes') }}"><a href="{{ route('users.votes', $user->id) }}" ><i class="text-md fa fa-thumbs-up"></i> Ta 赞过的话题</a></li>
        </ul>
    </div>
</div>
