const mix = require('laravel-mix');
const BundleAnalyzerPlugin = require('webpack-bundle-analyzer').BundleAnalyzerPlugin;
var LiveReloadPlugin = require('webpack-livereload-plugin');
require('laravel-mix-compress');
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
      //  new LiveReloadPlugin(),
     // new BundleAnalyzerPlugin() // для оценки относительного размера js файлов, необходимо при оптимизации
    ],
    stats: {
        children: true,
    },
});

mix.js('resources/js/app.js', 'public/js');
mix.js('resources/js/vue-sidebar.js', 'public/js');
mix.js('resources/js/vue-auth-sign-in.js', 'public/js');
mix.js('resources/js/vue-graphs.js', 'public/js');
mix.js('resources/js/vue-table.js', 'public/js');
mix.js('resources/js/vue-components.js', 'public/js');
mix.js('resources/assets/jquery_modules/js/pcoded.js', 'public/js');
mix.js('resources/assets/jquery_modules/js/pages/dashboard-sale.js', 'public/js');

mix.vue();

mix.sass('resources/assets/scss/style.scss', 'public/css')

mix
    .css('resources/assets/fonts/feather.css', 'public/css')
    .css('resources/assets/fonts/fontawesome.css', 'public/css')
    .css('resources/assets/fonts/material.css', 'public/css')
;

mix.copy( 'resources/assets/images', 'public/images' );

// mix.combine([
//     'resources/assets/jquery_modules/js/pcoded.js',
//     'resources/assets/jquery_modules/js/pages/dashboard-sale.js',
// ],'public/js/mpa/all-files.js' )

//Хотя это связано с затратами на компиляцию/производительность,
// это предоставит дополнительную отладочную информацию инструментам
// разработчика вашего браузера при использовании скомпилированных ресурсов
//mix.sourceMaps();

mix.autoload({
    jquery: ['$', 'window.jQuery', 'jQuery', 'jquery'],
    validate:'jquery-validation',
    DataTable : 'datatables.net-bs',
});

mix.extract(['jquery'],'js/jquery.js')
mix.extract([
    'datatables.net',
    'datatables.net-vue3',
    'datatables.net-bs',
    'datatables.net-bs5',
    'datatables.net-responsive',
    'datatables.net-responsive-bs5/css',
    'datatables.net-plugins/i18n',
],'js/datatables.js')

// MPA
mix.extract(['vue-loader','vue', '@vue', 'vue3-ico'],'js/vue.js')
mix.extract(['css-loader','style-loader', 'bootstrap', '@popperjs/core/lib'],
    'js/bootstrap.js')
mix.extract(['axios'],'js/axios.js')
mix.extract(['perfect-scrollbar'],'js/perfect-scrollbar.js')

// SPA
mix.extract(['vue-router'],'js/vue-router.js')

// mix.extract([
//     'vue',
//     '@vue',
//     'jquery',
//     'bootstrap',
//     'bootstrap-sass',
//     '@popperjs/core/lib',
//     'datatables.net',
//     'datatables.net-vue3',
//     'datatables.net-bs',
//     'datatables.net-bs5',
//     'datatables.net-responsive',
//     'datatables.net-responsive-bs5/css',
//     'datatables.net-plugins/i18n',
//     'perfect-scrollbar',
//     'axios',
//     'css-loader',
//     'style-loader',
//     'vue-loader',
//     'vue-router',
//     'vue3-ico'
// ], 'js/vendor.js');

if (mix.inProduction()) {
    mix.version();
    mix.compress();
}

//mix.browserSync('http://127.0.0.1:8000/');
