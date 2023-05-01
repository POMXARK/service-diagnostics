const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.webpackConfig({
    stats: {
        children: true,
    },
});

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/assets/scss/style.scss', 'public/css')
    .css('resources/assets/fonts/feather.css', 'public/css')
    .css('resources/assets/fonts/fontawesome.css', 'public/css')
    .css('resources/assets/fonts/material.css', 'public/css')
    .copy( 'resources/assets/images', 'public/images', false )
    .copy( 'resources/assets/jquery_modules', 'public/jquery_modules', false )
    .css( 'resources/css/plugins/bootstrap.min.css', 'public/css', false )
    //.sourceMaps()
;
