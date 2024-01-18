<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{__('content.title.welcome')}}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <script src="https://cdn.tailwindcss.com"></script>



    </head>
    <body class="antialiased">
        
    <section class="">
        <div class="relative items-center w-full px-5 py-12 mx-auto md:px-12 lg:px-16 max-w-7xl lg:py-24">
            <div class="flex w-full mx-auto text-left">
            <div class="relative inline-flex items-center mx-auto align-middle">
                <div class="text-center animate-jump">
                    <h1 class="max-w-5xl text-2xl font-bold leading-none tracking-tighter text-neutral-600 md:text-5xl lg:text-6xl lg:max-w-7xl">
                    {{__('content.title.welcome')}}
                    </h1>
                    <p class="max-w-xl mx-auto mt-8 text-base leading-relaxed text-gray-500">{{ __('content.welcome.slogan') }}</p>
                    <div class="flex flex-col justify-center w-full max-w-2xl gap-6 mx-auto mt-6">

                        <div class="rounded-lg">
                            <a href="{{ route('passwd') }}" class="px-5 py-4 text-base font-medium text-center text-white transition duration-500 ease-in-out transform bg-blue-600 lg:px-10 rounded-xl hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 block">{{__("content.welcome.mdp")}}</a>
                        </div>

                        <div class="rounded-lg">
                            <a href="{{ route('ListingController') }}" class="items-center block px-5 lg:px-10 py-3.5 text-base font-medium text-center text-blue-600 transition duration-500 ease-in-out transform border-2 border-blue-700 shadow-md rounded-xl focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 bg-white">{{__("content.welcome.listMdp")}}</a>
                        </div>

                        <div class="rounded-lg">
                            <a href="{{ route('team') }}" class="items-center block px-5 lg:px-10 py-3.5 text-base font-medium text-center text-blue-600 transition duration-500 ease-in-out transform border-2 border-blue-700 shadow-md rounded-xl focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 bg-white">{{__("content.welcome.team")}}</a>
                        </div>

                        <div class="rounded-lg">
                            <a href="{{ route('jointeam') }}" class="items-center block px-5 lg:px-10 py-3.5 text-base font-medium text-center text-blue-600 transition duration-500 ease-in-out transform border-2 border-blue-700 shadow-md rounded-xl focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 bg-white">{{__("content.welcome.joinTeam")}}</a>
                        </div>
                        
                        <div class="rounded-lg">
                            <a href="{{ route('ListingControllerTeam') }}" class="items-center block px-5 lg:px-10 py-3.5 text-base font-medium text-center text-blue-600 transition duration-500 ease-in-out transform border-2 border-blue-700 shadow-md rounded-xl focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 bg-white">{{__("content.welcome.listTeam")}}</a>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        </section>

        @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-blue-600 dark:text-gray-400 dark:hover:text-blue-600 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">{{ __('Dashboard') }}</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-blue-600 dark:text-gray-400 dark:hover:text-blue-600 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-blue-600 dark:text-gray-400 dark:hover:text-blue-600 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

    </body>
</html>
