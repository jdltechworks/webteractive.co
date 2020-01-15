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
                <a href="/">
                    <img src="/images/logo-solo.svg" width="168" alt="Webteractive" />
                </a>
                {{-- <a href="/" class="logo">
                    <svg xmlns="http://www.w3.org/2000/svg" width="168" height="104.505" viewBox="0 0 168 104.505"><defs><style>.a{fill:#fff;}</style></defs><g transform="translate(-103 -68.688)"><g transform="translate(103 68.688)"><path class="a" d="M731.386,189.125h0Z" transform="translate(-605.566 -188.027)"/><path class="a" d="M732.113,191.354a2.216,2.216,0,0,0-.025-.331A2.254,2.254,0,0,1,732.113,191.354Z" transform="translate(-605.945 -189.052)"/><path class="a" d="M731.954,190.416c-.006-.022-.009-.045-.015-.066C731.945,190.372,731.948,190.394,731.954,190.416Z" transform="translate(-605.865 -188.689)"/><path class="a" d="M547.543,187.951a2.339,2.339,0,0,0-1.962-1.067H526.153a2.339,2.339,0,0,0-1.964,3.609l64.493,99.758a2.339,2.339,0,0,0,3.872.082L602.8,275.882a2.339,2.339,0,0,0,.054-2.625Z" transform="translate(-493.474 -186.817)"/><path class="a" d="M694.928,229.548c-2.993-.168-6.7-.574-7.73-1.216a8.1,8.1,0,0,1-3.182-4q-1.088-2.692-1.088-9.112v-1.85q.054-1.251.054-2.5,0-9.629-1.6-13.926a14.945,14.945,0,0,0-4.434-6.583,14.189,14.189,0,0,0-5.766-2.611,43.308,43.308,0,0,0-7.051-1.011H652.083v.008h-15.1a2.294,2.294,0,0,0-2.294,2.294V212.5a2.294,2.294,0,0,0,.369,1.247l15.979,24.647a2.293,2.293,0,0,0,4.218-1.247v-32.7a7.743,7.743,0,0,1,5.086,1.441,8,8,0,0,1,2.408,4.433,59.782,59.782,0,0,1,.437,8.949,36.615,36.615,0,0,0,1.532,11.505,12.765,12.765,0,0,0,3.118,5.168,10,10,0,0,0,1.487,1.149,2.291,2.291,0,0,1,0,3.807,12.221,12.221,0,0,0-1.87,1.544A14.624,14.624,0,0,0,664.432,248q-1.252,3.726-1.251,11.886c0,1.99-.042,3.694-.127,5.121l-50.021-77.152a2.293,2.293,0,0,0-1.925-1.046H592.052a2.294,2.294,0,0,0-1.927,3.537l63.282,98.067a8.407,8.407,0,0,0,2.291,2.206,2.285,2.285,0,0,0,1.535.571l2.412-.024q10.608,0,15.069-2.312a13.388,13.388,0,0,0,6.364-6.745q1.9-4.435,1.9-13.3,0-1.958-.109-3.916-.055-1.2-.055-2.448,0-6.31,1.143-8.976a7.693,7.693,0,0,1,3.291-3.863,13.067,13.067,0,0,1,5.641-1.283c.146-.007,2.831-10.739,4.122-15.931A2.287,2.287,0,0,0,694.928,229.548ZM654.9,187.837h0Zm.323.873a2.232,2.232,0,0,1,.024.331A2.271,2.271,0,0,0,655.227,188.71Zm-.068-.31c.007.021.009.044.015.066C655.168,188.444,655.165,188.422,655.158,188.4Z" transform="translate(-529.084 -186.739)"/><path class="a" d="M481.595,187.956a2.339,2.339,0,0,0-1.962-1.067H460.2a2.339,2.339,0,0,0-1.964,3.609l64.493,99.758a2.339,2.339,0,0,0,3.872.082l10.241-14.452a2.339,2.339,0,0,0,.054-2.625Z" transform="translate(-457.862 -186.82)"/></g></g></svg>
                </a> --}}

                <div class="menu flex-0">
                    <a href="/#our-company" class="active">Our Company</a>
                    <a href="/#our-team">Our Team</a>
                    <a href="/#our-work">Our Work</a>
                    <a href="/open-source">Open Source</a>
                    <a href="/blogs">Blog</a>
                    <a href="/contact-us">Contact</a>
                </div>
            </div>
        </nav>
        <main>
            <section class="banner">
                <div class="container mx-auto relative min-h-576">
                    <div class="absolute neon pink z-10" style="bottom: -140px; right: -200px; width: 512px; height: 512px;">
                        <span class="shape"></span>
                    </div>
                    <div class="absolute neon blue z-10" style="top: 24px; right: 320px; width: 256px; height: 256px;">
                        <span class="shape"></span>
                    </div>
                    <div class="banner-content z-20">
                        <h2 class="text-7xl font-bold mb-6 leading-none font-nunito-sans">No frills,<br> just proven expertise</h2>
                        <h3 class="text-2xl font-sintony mb-6 text-ash tracking-wide">We believe that every client is unique so we offer bespoke <br>services from planning, development, deployment,<br> maintenance, and support.</h3>
                        <button class="px-4 py-3 bg-secondary-500 rounded text-xl text-ash font-thin uppercase hover:text-white hover:bg-secondary-400">
                            How can we help you?
                        </button>
                    </div>

                    <div class="absolute bottom-0 left-0 font-nunito-sans font-thin text-sm">We're looking for a Full-stack dev. <a class="text-blue-500 hover:text-blue-600">Apply<a/></div>
                </div>
            </section>

            <div class="min-h-320">

            </div>

            <section class="bg-secondary-500 min-h-768">

            </section>

            <section class="min-h-768">

            </section>

            <section class="bg-secondary-500 min-h-768">

            </section>
        </main>

        <footer class="bg-primary-700">
            <section>
            
            </section>
            <section class="py-4">
                <div class="container mx-auto">
                    <div class="flex items-center justify-center">
                        <a href="/">
                            <div class="inline-flex items-center bg-white text-primary-900">
                                <img  class="bg-primary-500 mr-2 p-2" src="/images/logo-solo.svg" width="54">
                                <div class="leading-none font-thin text-xs px-1 pr-2">
                                    <div class="tracking-wide mb-1">Webteractive Software</div>
                                    <div class="tracking-wider"><span style="margin-right: 4px;">Development</span> Service</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </section>
        </footer>
    </body>
</html>
