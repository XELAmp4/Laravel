<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{__('content.title.listingTeam')}}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <link rel="stylesheet" href="/app/resources/css/table.css">
        <script src="https://cdn.tailwindcss.com"></script>
        
        
    </head>
    <body class="antialiased">



    <section class="bg-white">
        <div class="container">
            <div class="flex flex-wrap -mx-4">
                <div class="w-full px-4">
                    <div class="max-w-full overflow-x-auto">
                        @if($teams->isNotEmpty())
                            <table class="table-auto w-full">
                                <thead>
                                    <tr class="bg-blue-700 text-center">
                                        <th
                                        class="
                                        w-1/6
                                        min-w-[160px]
                                        text-lg
                                        font-semibold
                                        text-white
                                        py-4
                                        lg:py-7
                                        px-3
                                        lg:px-4
                                        border-l border-transparent
                                        "
                                        >
                                        {{__('content.team.name_team')}}
                                        </th>
                                        <th
                                        class="
                                        w-1/6
                                        min-w-[160px]
                                        text-lg
                                        font-semibold
                                        text-white
                                        py-4
                                        lg:py-7
                                        px-3
                                        lg:px-4
                                        "
                                        >
                                        {{__('content.listing_team.date')}}
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($teams as $team)
                                        <tr>
                                            <td
                                            class="
                                            text-center text-dark
                                            font-medium
                                            text-base
                                            py-5
                                            px-2
                                            bg-[#F3F6FF]
                                            border-b border-l border-[#E8E8E8]
                                            "
                                            >
                                            {{ $team->name }}
                                            </td>
                                            <td
                                            class="
                                            text-center text-dark
                                            font-medium
                                            text-base
                                            py-5
                                            px-2
                                            bg-white
                                            border-b border-[#E8E8E8]
                                            "
                                            >
                                            {{ $team->created_at }}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @else
                            <p>Vous ne faite partie d'aucune team...</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>           
            
    </body>
</html>