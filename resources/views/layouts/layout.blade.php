<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        @vite([
            'http://e-commerce-3pkerg3mg-rufi-git.vercel.app/build/assets/main-e3b314ba.css',
        'https://e-commerce-3pkerg3mg-rufi-git.vercel.app/resources/js/app.js',
        'http://e-commerce-3pkerg3mg-rufi-git.vercel.app/build/assets/create-793219b8.css'
    ])
    </head>
    <body>
        @yield("products")
        @yield("create")
    </body>
</html>