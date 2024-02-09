<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{__('content.title.joinTeam')}}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <script src="https://cdn.tailwindcss.com"></script>

    </head>
    <body class="antialiased">

    <nav class="bg-white border-gray-200 dark:bg-gray-900">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <svg class="h-8" viewBox="0 0 286 314" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill="white" d="M142.5 1L277 30.9302V162.952C277 214.798 241.885 275.139 147.172 310.267L142.5 312L137.828 310.267C43.1154 275.139 8 214.798 8 162.952V30.9302L142.5 1ZM34.9 52.5383V162.952C34.9 200.206 59.3951 250.912 142.5 283.233C225.605 250.912 250.1 200.206 250.1 162.952V52.5383L142.5 28.5942L34.9 52.5383Z" fill="black"/>
                    <path stroke="white" d="M184.817 139.476V126.666C184.817 121.006 180.638 116.418 175.483 116.418H110.144C104.988 116.418 100.809 121.006 100.809 126.666V152.286C100.809 157.946 104.988 162.534 110.144 162.534H137.563M175.483 167.658V157.41C175.483 151.75 171.304 147.162 166.149 147.162C160.994 147.162 156.815 151.75 156.815 157.41V167.658M152.148 198.402H180.15C182.728 198.402 184.817 196.108 184.817 193.278V172.782C184.817 169.952 182.728 167.658 180.15 167.658H152.148C149.57 167.658 147.48 169.952 147.48 172.782V193.278C147.48 196.108 149.57 198.402 152.148 198.402Z" stroke="black" stroke-width="12" stroke-linecap="round" stroke-linejoin="round"/>
                    <path fill="white" d="M121.811 147.162C125.678 147.162 128.812 143.721 128.812 139.476C128.812 135.231 125.678 131.79 121.811 131.79C117.945 131.79 114.811 135.231 114.811 139.476C114.811 143.721 117.945 147.162 121.811 147.162Z" fill="black"/>
                    <path fill="white" d="M142.813 147.162C146.68 147.162 149.814 143.721 149.814 139.476C149.814 135.231 146.68 131.79 142.813 131.79C138.947 131.79 135.813 135.231 135.813 139.476C135.813 143.721 138.947 147.162 142.813 147.162Z" fill="black"/>
                </svg>
                    <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">{{__('content.title.welcome')}}</span>
                </a>
                <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                    <a href="{{ route('passwd') }}" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">{{__('content.navbar.new_mdp')}}</a>
                    </li>
                    <li>
                    <a href="{{ route('ListingController') }}" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">{{__('content.navbar.my_mdp')}}</a>
                    </li>
                    <li>
                    <a href="{{ route('team') }}" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">{{__('content.navbar.new_team')}}</a>
                    </li>
                    <li>
                    <a href="{{ route('jointeam') }}" class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white md:dark:text-blue-500" aria-current="page">{{__('content.navbar.join_team')}}</a>
                    </li>
                    <li>
                    <a href="{{ route('ListingControllerTeam') }}" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">{{__('content.navbar.my_teams')}}</a>
                    </li>
                </ul>
                </div>
            </div>
    </nav>


        <div class="min-h-screen bg-gray-100 py-6 flex flex-col justify-center sm:py-12">
                <div class="relative py-3 sm:max-w-xl sm:mx-auto">
                    <div
                        class="absolute inset-0 bg-gradient-to-r from-blue-300 to-blue-600 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl">
                    </div>
                    <div class="relative px-4 py-10 bg-white shadow-lg sm:rounded-3xl sm:p-20">
                        <div class="max-w-md mx-auto">
                            <div>
                                <h1 class="text-2xl font-semibold">{{__('content.title.joinTeam')}}</h1>
                            </div>
                            <form action="{{ route('JoinTeamController') }}" method="post" class="divide-y divide-gray-200">
                            @csrf 
                                <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                                    <div class="relative">
                                        <input autocomplete="off" name="name" type="name" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600 @error('name') is-invalid @enderror" placeholder="www.example.com" required/>
                                        <label for="name" class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">{{__('content.team.name_team')}}</label>
                                    </div>
                                    
                                    <div class="relative">
                                        <button class="bg-blue-500 text-white rounded-md px-2 py-1">{{__('content.title.joinTeam')}}</button>
                                    </div>
                                </div>
                                @if ($errors->any())
                                    @error('name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                @endif
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        
        
    </body>
</html>