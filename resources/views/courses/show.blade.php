@push('style-extensions')
<link href="//cdn.bootcss.com/video.js/5.15.1/video-js.min.css" rel="stylesheet"> 
@endpush 
@extends('layouts.app')
 @section('content')
<div class="uk-grid uk-grid-large uk-flex-bottom" data-uk-grid-margin="">
    <div class="uk-width-1-1 uk-row-first tm-contrast uk-contrast">
        <video class="video-js vjs-default-skin vjs-big-play-centered vjs-16-9" controls preload="auto" data-setup='{"fluid": true}'>
            <source src="{{ $course->origin }}" type="video/mp4">
            <p class="vjs-no-js">如果无法播放该视频，请换一个 <a href="http://videojs.com/html5-video-support/" target="_blank" rel="noreferrer noopener">支持HTML5视频功能的浏览器</a>
            </p>
        </video>
    </div>
    <div class="uk-width-medium-3-4">
        <h1 class="uk-h2 uk-margin-small-bottom">{{ $course->title }}</h1>
        <ul class="uk-subnav uk-subnav-line">
            <li class="uk-text-muted">
                <a href="http://formmaker.bixie.org" target="_blank">Bixie</a>
            </li>
            <li class="uk-text-muted">Version 1.4.4</li>
        </ul>
    </div>
    <div class="uk-width-medium-1-4">
        <a class="uk-button uk-button-primary uk-width-1-1" href="/package/bixie/formmaker.zip" download="bixie-formmaker-1.4.4.zip">Download</a>
    </div>
</div>
<div class="uk-grid uk-grid-large uk-margin-large-top" data-uk-grid-margin="">
    <div class="uk-width-medium-3-4 uk-row-first">
        <div class="uk-margin-large">
            {{ $course->description }}
            <p>Create forms in your Pagekit site. Build forms and manage the submissions.</p>
            <p><strong>Make sure to install the Bixie Pagekit Framework via the Marketplace!</strong></p>
            <h3 id="features">Features</h3>
            <ul>
                <li>Flexible forms with many different field types</li>
                <li>Email confirmation</li>
                <li>reCaptcha ingetration</li>
            </ul>
        </div>
    </div>
    <div class="uk-width-medium-1-4">
        <ul class="uk-list uk-list-line uk-margin-large uk-text-small">
            <li>
                <div class="uk-grid uk-grid-medium">
                    <div class="uk-flex-item-none">Type</div>
                    <div class="uk-flex-item-1 uk-text-right uk-text-truncate uk-text-muted">Extension</div>
                </div>
            </li>
            <li>
                <div class="uk-grid uk-grid-medium">
                    <div class="uk-flex-item-none">Author</div>
                    <div class="uk-flex-item-1 uk-text-right uk-text-truncate uk-text-muted">
                        <a class="uk-link-muted" href="http://formmaker.bixie.org">Bixie</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="uk-grid uk-grid-medium">
                    <div class="uk-flex-item-none">Version</div>
                    <div class="uk-flex-item-1 uk-text-right uk-text-truncate uk-text-muted">1.4.4</div>
                </div>
            </li>
            <li>
                <div class="uk-grid uk-grid-medium">
                    <div class="uk-flex-item-none">Created</div>
                    <div class="uk-flex-item-1 uk-text-right uk-text-truncate uk-text-muted">9 Sep 2015</div>
                </div>
            </li>
            <li>
                <div class="uk-grid uk-grid-medium">
                    <div class="uk-flex-item-none">Last Update</div>
                    <div class="uk-flex-item-1 uk-text-right uk-text-truncate uk-text-muted">9 Sep 2015</div>
                </div>
            </li>
            <li>
                <div class="uk-grid uk-grid-medium">
                    <div class="uk-flex-item-none">Support</div>
                    <div class="uk-flex-item-1 uk-text-right uk-text-truncate"><a class="uk-link-muted" href="https://github.com/Bixie/pagekit-formmaker/issues" target="_blank">https://github.com/Bixie/pagekit-formmaker/issues</a></div>
                </div>
            </li>
            <li>
                <div class="uk-grid uk-grid-medium">
                    <div class="uk-flex-item-none">Documentation</div>
                    <div class="uk-flex-item-1 uk-text-right uk-text-truncate"><a class="uk-link-muted" href="http://www.bixie.org/downloads/extensions/formmaker" target="_blank">http://www.bixie.org/downloads/extensions/formmaker</a></div>
                </div>
            </li>
        </ul>
        <a class="uk-button uk-width-1-1 uk-margin-small-bottom" href="http://formmaker.bixie.org" target="_blank">Demo</a>
    </div>
</div>
@endsection @push('script-extensions')
<script src="//cdn.bootcss.com/video.js/5.15.1/video.min.js"></script>
@endpush
