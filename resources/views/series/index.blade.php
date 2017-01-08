@extends('layouts.app') @push('script-extensions')
<script type="text/javascript" src="/assets/js/uikit/components/grid.min.js"></script>
@endpush @section('content')
<div id="tm-hero" class="tm-hero uk-block uk-block-large uk-cover-background uk-flex uk-flex-middle uk-height-viewport uk-contrast" style="background-image: url('/assets/images/home-hero.jpg');">
    <div class="uk-container uk-container-center">
        <section class="uk-grid uk-grid-match" data-uk-grid-margin="">
            <div class="uk-width-medium-1-1 uk-row-first">
                <div class="uk-panel  uk-text-center ">
                    <h1 class="uk-heading-large uk-margin-large-bottom">Hello, I'm Pagekit,<br class="uk-hidden-small"> your new favorite CMS.</h1>
                    <a class="uk-button uk-button-large" href="http://www.pagekit.com">Get started</a>
                </div>
            </div>
        </section>
    </div>
</div>
<div class="uk-grid pk-grid-large">
    <div class="uk-width-5-6 uk-container-center">
        <div class="uk-panel-box uk-panel">
            <div class="uk-grid uk-grid-width-1-1 uk-grid-width-small-1-2 uk-grid-width-large-1-3 uk-grid-width-xlarge-1-3" data-uk-grid="{gutter: 20, controls: '#portfolio-filter'}" style="position: relative; margin-left: -20px; height: 585px;">
                <div data-uk-filter="people" data-grid-prepared="true" style="position: absolute; box-sizing: border-box; padding-left: 20px; padding-bottom: 20px; top: 0px; opacity: 1; left: 0px;">
                    <div class="uk-panel uk-panel-box uk-text-left">
                        <div class="uk-panel-teaser">
                            <a href="/portfolio/people">
                                <img src="/storage/people/main_teaser/demo_teaser_people.jpg" alt="Demo teaser people">
                            </a>
                        </div>
                        <h3 class="uk-h3">
                <a class="uk-link-reset " href="/portfolio/people">People</a>
            </h3>
                        <p class="uk-article-lead">People photography</p>
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
                <div data-uk-filter="sports" data-grid-prepared="true" style="position: absolute; box-sizing: border-box; padding-left: 20px; padding-bottom: 20px; top: 0px; opacity: 1; left: 379.984px;">
                    <div class="uk-panel uk-panel-box uk-text-left">
                        <div class="uk-panel-teaser">
                            <a href="/portfolio/sports">
                                <img src="/storage/sports/main_teaser/demo_teaser_sports.jpg" alt="Demo teaser sports">
                            </a>
                        </div>
                        <h3 class="uk-h3">
                <a class="uk-link-reset " href="/portfolio/sports">Sports</a>
            </h3>
                        <p class="uk-article-lead">Sports photograpy</p>
                        <p class="uk-article-meta">
                            September 2015 <span class="uk-text-muted"> | </span> Tim Photo </p>
                        <div class="uk-flex uk-flex-wrap uk-margin uk-flex-center" data-uk-margin="">
                            <div class="uk-badge uk-margin-small-right">sports</div>
                        </div>
                        <ul class="uk-thumbnav  uk-grid-width-1-1 uk-grid-width-small-1-2 uk-grid-width-large-1-4">
                            <li>
                                <a href="/storage/sports/demo_sports10.jpg" title="Demo sports 10" data-uk-lightbox="{group:'project-2'}">
                                    <img src="/tmp/cache/portfolio/f19bf3a4f3dfe3f7f809d1aee86759b8-demo_sports10.jpg" alt="Demo sports 10"></a>
                            </li>
                            <li>
                                <a href="/storage/sports/demo_sports3.jpg" title="Demo sports 3" data-uk-lightbox="{group:'project-2'}">
                                    <img src="/tmp/cache/portfolio/9c9839ed798a2291ab57380accb1d31b-demo_sports3.jpg" alt="Demo sports 3"></a>
                            </li>
                            <li>
                                <a href="/storage/sports/demo_sports4.jpg" title="Demo sports 4" data-uk-lightbox="{group:'project-2'}">
                                    <img src="/tmp/cache/portfolio/4187eb9a2f0706d9f77d95beef749d36-demo_sports4.jpg" alt="Demo sports 4"></a>
                            </li>
                            <li>
                                <a href="/storage/sports/demo_sports8.jpg" title="Demo sports 8" data-uk-lightbox="{group:'project-2'}">
                                    <img src="/tmp/cache/portfolio/6b4dc731be57c85aabd0c7bbf1cb65ce-demo_sports8.jpg" alt="Demo sports 8"></a>
                            </li>
                        </ul>
                        <div class="uk-text-center">
                            <a class="uk-button" href="/portfolio/sports">
                    See more</a>
                        </div>
                    </div>
                </div>
                <div data-uk-filter="vintage" data-grid-prepared="true" style="position: absolute; box-sizing: border-box; padding-left: 20px; padding-bottom: 20px; top: 0px; opacity: 1; left: 759.968px;">
                    <div class="uk-panel uk-panel-box uk-text-left">
                        <div class="uk-panel-teaser">
                            <a href="/portfolio/vintage">
                                <img src="/storage/vintage/main_teaser/demo_teaser_vintage.jpg" alt="Demo teaser vintage">
                            </a>
                        </div>
                        <h3 class="uk-h3">
                <a class="uk-link-reset " href="/portfolio/vintage">Vintage</a>
            </h3>
                        <p class="uk-article-lead">Vintage photography</p>
                        <p class="uk-article-meta">
                            September 2015 <span class="uk-text-muted"> | </span> Max Photo </p>
                        <div class="uk-flex uk-flex-wrap uk-margin uk-flex-center" data-uk-margin="">
                            <div class="uk-badge uk-margin-small-right">vintage</div>
                        </div>
                        <ul class="uk-thumbnav  uk-grid-width-1-1 uk-grid-width-small-1-2 uk-grid-width-large-1-4">
                            <li>
                                <a href="/storage/vintage/demo_vintage1.jpg" title="Demo vintage 1" data-uk-lightbox="{group:'project-1'}">
                                    <img src="/tmp/cache/portfolio/fb35cbb9c1ffcecdf1eceab98337744e-demo_vintage1.jpg" alt="Demo vintage 1"></a>
                            </li>
                            <li>
                                <a href="/storage/vintage/demo_vintage11.jpg" title="Demo vintage 11" data-uk-lightbox="{group:'project-1'}">
                                    <img src="/tmp/cache/portfolio/d3f50cd78899e24caacf6f6a28ae973e-demo_vintage11.jpg" alt="Demo vintage 11"></a>
                            </li>
                            <li>
                                <a href="/storage/vintage/demo_vintage12.jpg" title="Demo vintage 12" data-uk-lightbox="{group:'project-1'}">
                                    <img src="/tmp/cache/portfolio/0e6dc322b1bcb63dc6df03966cfd4ee0-demo_vintage12.jpg" alt="Demo vintage 12"></a>
                            </li>
                            <li>
                                <a href="/storage/vintage/demo_vintage3.jpg" title="Demo vintage 3" data-uk-lightbox="{group:'project-1'}">
                                    <img src="/tmp/cache/portfolio/78117f23ea7fe7ad3ce76fe91fa0fc73-demo_vintage3.jpg" alt="Demo vintage 3"></a>
                            </li>
                        </ul>
                        <div class="uk-text-center">
                            <a class="uk-button" href="/portfolio/vintage">
                    See more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
