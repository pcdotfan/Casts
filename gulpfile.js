const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application as well as publishing vendor resources.
 |
 */

elixir((mix) => {
    mix.sass('app.scss', 'public/assets/css/app.css');
    mix.webpack('app.js', 'public/assets/js/app.js');
    mix.copy([
        'node_modules/jquery/dist/jquery.min.js'
    ], 'public/assets/js/jquery.min.js');
    mix.copy([
        'node_modules/simplemde/dist/simplemde.min.js'
    ], 'public/assets/js/simplemde.min.js');
    mix.copy([
        'node_modules/simplemde/dist/simplemde.min.css'
    ], 'public/assets/css/simplemde.min.css');
    mix.copy([
        'resources/assets/images'
    ], 'public/assets/images');
    mix.copy([
        'node_modules/font-awesome/css/'
    ], 'public/assets/css/');

    mix.copy([
        'node_modules/font-awesome/fonts/'
    ], 'public/assets/fonts/');

    mix.copy([
        'node_modules/font-awesome/fonts/'
    ], 'resources/assets/fonts/');

    mix.copy([
        'node_modules/uikit/dist/less'
    ], 'resources/assets/less/uikit');

    mix.copy([
        'node_modules/uikit/dist/js'
    ], 'resources/assets/js/uikit');

    mix.copy([
        'node_modules/uikit/dist/js'
    ], 'public/assets/js/uikit');

    mix.less([
        'resources/assets/less/pagekit/pagekit.less'
    ], 'public/assets/css/theme.css');
});
