<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name') }}</title>
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Sintony&display=swap" rel="stylesheet">
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <nav>
            <div class="container mx-auto py-8 flex justify-between">
                <a href="/" class="logo"></a>

                <div class="menu flex-0">
                    <a href="/about" class="active">About</a>
                    <a href="/team">Team</a>
                    <a href="/portfolio">Portfolio</a>
                    <a href="/open-source">Open Source</a>
                    <a href="/blogs">Blogs</a>
                    <a href="/contact-us">Contact Us</a>
                </div>
            </div>
        </nav>
        <main>
            <div class="banner">
                <div class="container mx-auto relative min-h-512">
                    <div class="absolute neon pink z-0" style="bottom: -140px; right: -200px; width: 512px; height: 512px;">
                        <span class="shape"></span>
                    </div>
                    <div class="absolute neon blue z-0" style="top: 24px; right: 320px; width: 256px; height: 256px;">
                        <span class="shape"></span>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>
