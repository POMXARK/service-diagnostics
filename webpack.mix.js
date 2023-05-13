const mix = require('laravel-mix');
const BundleAnalyzerPlugin = require('webpack-bundle-analyzer').BundleAnalyzerPlugin;
//require('laravel-mix-compress');
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
    plugins: [
    //new BundleAnalyzerPlugin()
    ],
    stats: {
        children: true,
    },
});

mix
    .js('resources/js/app.js', 'public/js')
    .vue()
    .sass('resources/css/app.scss', 'public/css')
    .sass('resources/assets/scss/style.scss', 'public/css')
    .css('resources/assets/fonts/feather.css', 'public/css')
    .css('resources/assets/fonts/fontawesome.css', 'public/css')
    .css('resources/assets/fonts/material.css', 'public/css')
    .copy( 'resources/assets/images', 'public/images' )
    .copy( 'resources/assets/jquery_modules', 'public/jquery_modules' )
    .css( 'resources/css/plugins/bootstrap.min.css', 'public/css' )
    .sourceMaps()
    //.compress()
;

//mix.extract([ 'jquery'], 'vendor.js');
//mix.compress();
