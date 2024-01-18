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

        <!-- <h1>{{__('content.title.joinTeam')}}</h1>
        <form action="{{ route('JoinTeamController') }}" method="post">
        @csrf

            <label for="name">{{__('content.team.name_team')}}</label>
            <input type="text" name='name' class="@error('name') is-invalid @enderror" required>

            <input type="submit" value="{{__('content.title.joinTeam')}}" />
        </form>

        @if ($errors->any())
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        @endif -->
        
        
    </body>
</html>