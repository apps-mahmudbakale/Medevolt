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


mix.styles([
    'public/assets/vendor/bootstrap/css/bootstrap.min.css',
    'public/assets/vendor/bootstrap-icons/bootstrap-icons.css',
    'public/assets/vendor/remixicon/remixicon.css',
    'public/assets/vendor/boxicons/css/boxicons.min.css',
    'public/assets/vendor/quill/quill.snow.css',
    'public/assets/vendor/quill/quill.bubble.css',
    'public/assets/vendor/simple-datatables/style.css',
    'public/assets/css/style.css'
    ], 'public/css/admin.css');

 mix.scripts([
      'public/assets/vendor/bootstrap/js/bootstrap.bundle.js',
      'public/assets/vendor/quill/quill.min.js',
      'public/assets/vendor/tinymce/tinymce.min.js',
      'public/assets/vendor/simple-datatables/simple-datatables.js',
      'public/assets/vendor/chart.js/chart.min.js',
      'public/assets/vendor/apexcharts/apexcharts.min.js',
      'public/assets/vendor/echarts/echarts.min.js',
      'public/assets/js/main.js',
   ], 'public/js/admin.js');
