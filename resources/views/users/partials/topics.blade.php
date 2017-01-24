<ul class="uk-list user-basicinfo">

  @foreach ($topics as $index => $topic)
   <li>

      <a href="{{ route('topics.show', [$topic->id]) }}" title="{{{ $topic->title }}}">
        {{{ str_limit($topic->title, '100') }}}
      </a>

      <span class="meta">

        <span class="uk-badge-label uk-badge-default" title="{{{ $topic->category->name }}}">{{{ $topic->category->name }}}</span>
        <span> ⋅ </span>
        {{ $topic->vote_count }} {{ lang('Up Votes') }}
        <span> ⋅ </span>
        {{ $topic->reply_count }} {{ lang('Replies') }}
        <span> ⋅ </span>
        <span class="timeago">{{ $topic->created_at }}</span>

      </span>

  </li>
  @endforeach

</ul>
