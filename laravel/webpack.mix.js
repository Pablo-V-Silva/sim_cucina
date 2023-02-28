const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix
  .js('resources/js/app.js', 'public/js')
  .js('resources/js/vue.js', 'public/js')
  .vue()
  .sass('resources/sass/confronta.scss', 'public/css')
  .sass('resources/sass/home.scss', 'public/css')
  /* .img('resources/img', 'public/img') */;