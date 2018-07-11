<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>About Page</title>
        <link rel="stylesheet" href="/css/app.css">
        <script src="/js/app.js"></script>
    </head>
    <body>

        @include('navbar')

        <div class="container">
            <div class="content">
                <div class="title m-b-md">
                    About Page
                </div>
                <div class="quote">Magic is essentially the higher understanding of nature</div>
            </div>
        </div>
    </body>
</html>
