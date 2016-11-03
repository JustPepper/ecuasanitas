const elixir = require('laravel-elixir');

var booo = require('booo');

elixir(function(mix) {
   mix.stylus('main.styl', null, { use: [booo()] })
   	  .browserSync({
        proxy: 'ecuasanitas.dev'
    });
});