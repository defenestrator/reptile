<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta name="msapplication-TileImage" content="/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="/favicon.png">
    <link rel="icon" href="/favicon.png">
    <title>
        {{ config('app.name', 'Reptile Bio') }},
        {{ Illuminate\Support\Str::title(str_replace('.', ' ', Route::currentRouteName())) . ' ' . '' }}
    </title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&family=Fauna+One&display=swap"
        rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>

<body class="antialiased">
    <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        {{-- @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                    @endif
                @endauth
            </div>
        @endif --}}

        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-center pt-8 sm:justify-start">
                <div class="block items-top justify-center w-50 mt-8 mx-2 px-2">
                    <img
                        src="rb-logo2.png"
                        class="ml-4 lg:m-0"
                        style="width:80%; max-width:640px;">
                </div>
            </div>
            <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                <div class="grid grid-cols-1 md:grid-cols-2">
                    <div class="p-6">
                        <h2>Biology and biography</h2>
                        <div class="ml-4 mr-4">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-justify">
                                Reptile Bio is the free (like air) herpetoculture database.
                                Animals with knowable lineage, genotype and locality are more enjoyable and more
                                valuable. Every piece of information is important, but particularly lineage.
                                Once lineage information is lost for a given individual, it is lost
                                forever. Let's do better.
                            </div>
                        </div>
                    </div>

                    <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                        <h2>Reptile provenance</h2>
                        <div class="ml-4 mr-4">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-justify">
                                ain't easy. Keeping track of the life histories of the animals we keep must be
                                difficult, because so few of us seem to be doing it.
                                Even when good records are kept, they are rarely in a shareable, searchable,
                                archivable format.
                                That doesn't seem right to us, and we aim to change it.
                            </div>
                        </div>
                    </div>
                    <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                        <h3>We have a duty</h3>
                        <div class="ml-4 mr-4">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-justify">
                                to protect and preserve both the natural habitats and natural history of the animals on
                                Earth. We are living in the Anthropocene era. It is an epoch of mass extinction on par
                                with the end of the dinosaurs. Maybe act like it? We reptile hobbyists can, and should,
                                do a better job of tracking the lineages of the animals we keep, at a bare minimum.
                                Having verifiable records of the animals you keep, breed, buy, sell or trade adds value
                                in every sense of the word.
                            </div>
                        </div>
                    </div>

                    <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                        <h3>We need better tools;</h3>
                        <div class="ml-4 mr-4">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-justify">
                                Reptile Bio is one tool to help us build a better future for our scaly pets and
                                ourselves. Easily keep track of the animals under your care and we will host it and keep
                                it available for the next 100 years. Yes, really.
                                Our goal is to provide public stewardship of captive herpetocultural records
                                for at least the next century. The first twenty years is on us. Let's develop better
                                habits and raise the standards in private herpetoculture, together.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                <div class="text-center text-sm text-gray-500 sm:text-left">
                    <div class="flex items-center">
                        <svg fill="none"
                            stroke="currentColor"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            viewBox="0 0 24 24"
                            class="ml-4 -mt-px w-5 h-5 text-gray-400">
                            <path
                                d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
                        </svg>

                        <a
                            href="https://github.com/defenestrator/reptile"
                            class="ml-1 underline">
                            Contribute
                        </a>

                        <svg
                            fill="none"
                            stroke="currentColor"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            viewBox="0 0 24 24"
                            class="ml-4 -mt-px w-5 h-5 text-gray-400">
                            <path
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                            </path>
                        </svg>

                        <a
                            href="https://patreon.com/reptilebio"
                            class="ml-1 underline">
                            Sponsor
                        </a>
                    </div>
                </div>
                <div class="ml-4 text-justify text-sm text-gray-500 sm:text-right">
                    {{-- Right side footer --}}
                </div>
            </div>
        </div>
    </div>
</body>

</html>
