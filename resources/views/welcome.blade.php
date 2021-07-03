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
        {{ config('app.name', 'Reptile Bio') }} &mdash;
        {{ Illuminate\Support\Str::title(str_replace('.', ' ', Route::currentRouteName())) . ' ' . ' :: Forever' }}
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
                        <div class="ml-12">
                            <div class="mt-2 text-gray-600 dark:text-gray-400">
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
                        <div class="ml-12">
                            <div class="mt-2 text-gray-600 dark:text-gray-400">
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
                        <div class="ml-12">
                            <div class="mt-2 text-gray-600 dark:text-gray-400">
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
                        <div class="ml-12">
                            <div class="mt-2 text-gray-600 dark:text-gray-400">
                                Reptile Bio is one tool to help us build a better future for our scaly pets and
                                ourselves. Easily keep track of the animals under your care and we will host it and keep
                                it available for the next 100 years. Yes, really.
                                Our goal is to provide a public stewardship service of captive herpetocultural records
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
                        <svg
                            fill="none"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            class="-mt-px w-5 h-5 text-gray-400">
                            <path
                                d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z">
                            </path>
                        </svg>

                        <a
                            href="#"
                            class="ml-1 underline">
                            Shop
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
                            href="#"
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
