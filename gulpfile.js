var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass([
		'../../../public/bower_components/bootstrap/dist/css/bootstrap.css',
		'../../../public/bower_components/font-awesome/scss/font-awesome.scss',
		'app.scss',
	])
	.scripts([
		'../../../public/bower_components/jquery/dist/jquery.js',
		'../../../public/bower_components/bootstrap/dist/js/bootstrap.js',
		'app.js',
	], 'public/js/app.js')
	.copy([
		'public/bower_components/bootstrap/fonts',
		'public/bower_components/font-awesome/fonts',
	], 'public/fonts');
});
