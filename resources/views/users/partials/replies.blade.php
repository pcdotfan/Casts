
<ul class="uk-list user-basicinfo">
  @foreach ($replies as $index => $reply)
   <li>

    @if (count($reply->topic))
      <a href="{{ route('topics.show', [$reply->topic_id]) }}" title="{{{ $reply->topic->title }}}" >
          {{{ $reply->topic->title }}}
      </a>
      <span class="meta">
         at <span class="timeago" title="{{ $reply->created_at }}">{{ $reply->created_at }}</span>
      </span>

        @if ($reply->is_blocked != 'yes')
      <div class="reply-body markdown-reply content-body">
{!! $reply->body !!}
      </div>
        @else
        <div class="deleted text-center">内容被屏蔽</div>
        @endif
    @else
      <div class="deleted text-center">{{ lang('Data has been deleted.') }}</div>
    @endif


  </li>
  @endforeach
</ul>
