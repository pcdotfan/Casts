@extends('layouts.app') @push('script-extensions')
<script type="text/javascript" src="/assets/js/uikit/components/grid.min.js"></script>
@endpush @section('series-introduction')
<section id="tm-hero" class="tm-hero uk-block uk-block-large uk-cover-background uk-flex uk-flex-middle uk-height-viewport uk-contrast" style="background-image: url('/assets/images/home-hero.jpg');">
    <div class="uk-conta iner uk-container-center">
        <section class="uk-grid uk-grid-match" data-uk-grid-margin="">
            <div class="uk-width-medium-1-1 uk-row-first">
                <div class="uk-panel  uk-text-center ">
                    <h1 class="uk-heading-large uk-margin-large-bottom">Hello, I'm Pagekit,<br class="uk-hidden-small"> your new favorite CMS.</h1>
                    <a class="uk-button uk-button-large" href="http://www.pagekit.com">Get started</a>
                </div>
            </div>
        </section>
    </div>
</section>
@endsection 
@section('content')
<div class="uk-grid uk-grid-medium uk-grid-match uk-grid-width-small-1-2 uk-grid-width-xlarge-1-3">
    @foreach( $courses as $course )
    <div class="uk-grid-margin  uk-row-first ">
        <div class="uk-panel uk-panel-box uk-overlay-hover">
            <div class="uk-panel-teaser">
                <div class="uk-overlay uk-display-block">
                    <div class="uk-cover-background uk-position-cover" style="background-image: url('{{ $course->thumbnail }}');"></div>
                    <canvas class="uk-responsive-width uk-display-block" width="1200" height="800"></canvas>
                    <div class="uk-overlay-panel uk-overlay-background pk-overlay-background uk-overlay-fade"></div>
                </div>
            </div>
            <h2 class="uk-panel-title uk-margin-remove">{{ $course->title }}</h2>
            <p class="uk-text-muted uk-margin-remove">Tomek Knapczyk</p>
            <a class="uk-position-cover" href="{{ $series->slug }}/episodes/{{ $course->id }}"></a>
        </div>
    </div>
    @endforeach
</div>
@endsection
