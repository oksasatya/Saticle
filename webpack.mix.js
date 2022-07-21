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

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    // 403.sass
    .sass('resources/sass/403.scss', 'public/css')
    // admin.sass

    .sourceMaps(true, 'source-map')
    .webpackConfig({
        stats: {
            children: true
        }
    })
    .browserSync({
        proxy: '127.0.0.1:8000',
        port: 3100,
        ghostMode: false,
        notify: false
    })


