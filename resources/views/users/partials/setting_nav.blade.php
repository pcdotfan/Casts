<div class="pk-width-sidebar uk-row-first">
    <div class="uk-panel uk-panel-box">
        <ul class="uk-nav uk-nav-side pk-nav-large">
            <li class="{{ navViewActive('users.edit') }}">
                <a href="{{ route('users.edit', $user->id) }}" class="">
                    <i class="text-md fa fa-list-alt" aria-hidden="true"></i> &nbsp;{{ lang('Basic Info') }}
                </a>
            </li>
            <li class="{{ navViewActive('users.edit_avatar') }}">
                <a href="{{ route('users.edit_avatar', $user->id) }}">
                    <i class="text-md fa fa-picture-o" aria-hidden="true"></i> &nbsp;{{ lang('Change Avatar') }}
                </a>
            </li>
            <li class="{{ navViewActive('users.edit_email_notify') }}">
                <a href="{{ route('users.edit_email_notify', $user->id) }}" >
                    <i class="text-md fa fa-bell" aria-hidden="true"></i> &nbsp;{{ lang('Notification Settings') }}
                </a>
            </li>
            <li class="{{ navViewActive('users.edit_social_binding') }}">
                <a href="{{ route('users.edit_social_binding', $user->id) }}" >
                    <i class="text-md fa fa-flask" aria-hidden="true"></i> &nbsp;{{ lang('Social Account Binding') }}
                </a>
            </li>
        </ul>
    </div>
</div>
