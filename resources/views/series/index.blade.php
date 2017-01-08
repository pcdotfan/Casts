@extends('layouts.app') @push('script-extensions')
<script type="text/javascript" src="/assets/js/uikit/components/grid.min.js"></script>
@endpush @section('content')
<div class="uk-grid pk-grid-large">
    <div class="uk-width-5-6 uk-container-center">
        <div class="uk-panel-box uk-panel">
            <div class="uk-grid uk-grid-width-1-1 uk-grid-width-small-1-2 uk-grid-width-large-1-3 uk-grid-width-xlarge-1-3" data-uk-grid="{gutter: 20, controls: '#portfolio-filter'}" style="position: relative; margin-left: -20px; height: 585px;">
                @foreach ( $series as $series_single )
                <div data-uk-filter="people" data-grid-prepared="true" style="position: absolute; box-sizing: border-box; padding-left: 20px; padding-bottom: 20px; top: 0px; opacity: 1; left: 0px;">
                    <div class="uk-panel uk-panel-box uk-text-left">
                        <div class="uk-panel-teaser">
                            <a href="/series/{{ $series_single->slug }}">
                                <img src="{{ $series_single->thumbnail }}" alt="{{ $series_single->slug }}">
                            </a>
                        </div>
                        <h3 class="uk-h3"><a class="uk-link-reset " href="/portfolio/people">People</a></h3>
                        <p class="uk-article-lead"><a href="/series/{{ $series_single->slug }}">{{ $series_single->title }}</a></p>
                        <p class="uk-article-meta">
                            September 2015 <span class="uk-text-muted"> | </span> Matthijs Photo </p>
                        <div class="uk-flex uk-flex-wrap uk-margin uk-flex-center" data-uk-margin="">
                            <div class="uk-badge uk-margin-small-right">people</div>
                        </div>
                        <ul class="uk-thumbnav  uk-grid-width-1-1 uk-grid-width-small-1-2 uk-grid-width-large-1-4">
                            <li>
                                <a href="/storage/people/demo_people10.jpg" title="Demo people 10" data-uk-lightbox="{group:'project-3'}">
                                    <img src="/tmp/cache/portfolio/dbdd938d68337a87361a3193b5238005-demo_people10.jpg" alt="Demo people 10"></a>
                            </li>
                            <li>
                                <a href="/storage/people/demo_people12.jpg" title="Demo people 12" data-uk-lightbox="{group:'project-3'}">
                                    <img src="/tmp/cache/portfolio/7715863c8a1e2c7b246d2c2dc3835444-demo_people12.jpg" alt="Demo people 12"></a>
                            </li>
                            <li>
                                <a href="/storage/people/demo_people2.jpg" title="Demo people 2" data-uk-lightbox="{group:'project-3'}">
                                    <img src="/tmp/cache/portfolio/198ca3118d5712929bb05d7f7feabc1c-demo_people2.jpg" alt="Demo people 2"></a>
                            </li>
                            <li>
                                <a href="/storage/people/demo_people5.jpg" title="Demo people 5" data-uk-lightbox="{group:'project-3'}">
                                    <img src="/tmp/cache/portfolio/55e4d892a95002e8f3fd15286c13da46-demo_people5.jpg" alt="Demo people 5"></a>
                            </li>
                        </ul>
                        <div class="uk-text-center">
                            <a class="uk-button" href="/portfolio/people">
                    See more</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    @endsection
