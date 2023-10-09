<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body class="">
    
    <x-topnav></x-topnav>

    <div id="app" class="" style="background: rgb(250, 250, 238)">
        
        <x-nav></x-nav>

        <div class="row mt-4 pb-4 mx-2">

            <aside class="px-2 col-2" >

                <x-units></x-units>

            </aside>
            
            <main class="px-4 col" >
                @yield('content')
            </main>

            <aside class="px-2 col-2" >
                <x-years></x-years>
                <x-categories></x-categories>

                <div class="card mt-3">
                    <div class="card-body">
                        <h5 class="text-primary">Feedback Form</h5>
                        <p>Login to submit feedback</p>
                        @guest
                            <a href="/login" class="btn btn-primary">Login</a>
                        @endguest
                    </div>
                </div>

            </aside>

        </div>

    </div>

    <x-footer></x-footer>

</body>
</html>
