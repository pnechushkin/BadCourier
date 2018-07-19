const elixir = require('laravel-elixir');

// require('laravel-elixir-vue-2');


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

// elixir((mix) => {
//     mix.sass('app.scss');
// // mix.css('app.js');
// mix.webpack('app.js');
// });
// elixir(function(mix) {
//     mix.stylus('app.styl');
// });
elixir(function(mix) {

    mix.copy('node_modules/bootstrap/dist/css/bootstrap.css', 'resources/assets/css/bootstrap/bootstrap.css');
    mix.copy('node_modules/bootstrap/dist/js/bootstrap.js', 'resources/assets/js/bootstrap/bootstrap.js');
    mix.copy('node_modules/bootstrap/dist/js/bootstrap.js', 'public/js/jquery.js');
    mix.copy('node_modules/jquery-datepicker/jquery-datepicker.js', 'public/js/jquery-datepicker.js');
    mix.copy('node_modules/bootstrap-datetimepicker/src/less/', 'resources/assets/less/');
    mix.copy('node_modules/bootstrap-datetimepicker/src/js/', 'resources/assets/js/datepicker/');
    mix.copy('node_modules/bootstrap-datetimepicker/src/js/', 'public/js//datepicker/');
    mix.styles([
        '/bootstrap/bootstrap.css',
        // '/jquery-ui/datepicker.css',
        'styles.css'
    ], 'public/css/site.css');
    mix.webpack([
        '/datepicker/bootstrap-datetimepicker.js',
        'main.js'
    ], 'public/js/main.js');
    // mix.webpack([
    // '/bootstrap/bootstrap.js',
    // ], 'public/js/bootstrap.js');
    mix.webpack('app.js');
    // elixir(function(mix) {
    //     mix.less('app.less');
    // });
});