let mix = require('laravel-mix')

mix.styles(['public/Assets/css/foodhub.css',
'public/Assets/css/media_query.css',
'public/Assets/plugins/fontawesome-free/css/all.css',
'public/Assets/plugins/icheck-bootstrap/icheck-bootstrap.css'], 'public/css/all.css').version()


mix.scripts(['public/Assets/plugins/jquery/jquery.js',
'public/Assets/plugins/bootstrap/bootstrap.bundle.js',
'public/Assets/js/foodhub.js'], 'public/js/all.js').version()

