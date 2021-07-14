<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <link rel="stylesheet" href="{{ asset('css/trix.css') }}">


        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>

        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="{{ asset('js/trix.js') }}"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
        <script src="{{ asset('js/share.js') }}"></script>
    </head>
    <body class="font-sans antialiased bg-gray-background">
        <nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
            <!-- Primary Navigation Menu -->
            <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <div class="flex">
                        <!-- Logo -->
                        <div class="flex items-center flex-shrink-0">
                            <a href="{{ route('community') }}" class="flex">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" ><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <h1 class="font-bold ">Molabs</h1>
                            </a>
                        </div>

                        <!-- Navigation Links -->
                        @auth
                        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                            <x-jet-nav-link href="{{ route('community') }}" :active="request()->routeIs('community')">
                                {{ __('Dashboard') }}
                            </x-jet-nav-link>
                        </div>
                        @endauth
                    </div>

                    <div class="hidden sm:flex sm:items-center sm:ml-6">
                        <!-- Settings Dropdown -->
                        <div class="relative ml-3">
                            @auth
                            <x-jet-dropdown align="right" width="48">
                                <x-slot name="trigger">

                                    @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())

                                        <button class="flex text-sm transition border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300">
                                            <img class="object-cover w-8 h-8 rounded-full" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                        </button>
                                    @else

                                        <span class="inline-flex rounded-md">
                                            <button type="button" class="inline-flex items-center px-3 py-2 text-sm font-medium leading-4 text-gray-500 transition bg-white border border-transparent rounded-md hover:text-gray-700 focus:outline-none">
                                                {{ Auth::user()->name }}

                                                <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                                </svg>
                                            </button>
                                        </span>
                                    @endif
                                </x-slot>

                                <x-slot name="content">
                                    <!-- Account Management -->
                                    <div class="block px-4 py-2 text-xs text-gray-400">
                                        {{ __('Manage Account') }}
                                    </div>

                                    <x-jet-dropdown-link href="{{ route('profile.show') }}">
                                        {{ __('Profile') }}
                                    </x-jet-dropdown-link>

                                    @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                        <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                                            {{ __('API Tokens') }}
                                        </x-jet-dropdown-link>
                                    @endif

                                    <div class="border-t border-gray-100"></div>

                                    <!-- Authentication -->
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <x-jet-dropdown-link href="{{ route('logout') }}"
                                                 onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </x-jet-dropdown-link>
                                    </form>
                                </x-slot>
                            </x-jet-dropdown>
                        @endauth
                        </div>
                    </div>

                    <!-- Hamburger -->
                    <div class="flex items-center -mr-2 sm:hidden">
                        <button @click="open = ! open" class="inline-flex items-center justify-center p-2 text-gray-400 transition rounded-md hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500">
                            <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Responsive Navigation Menu -->
            <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
                <div class="pt-2 pb-3 space-y-1">
                    <x-jet-responsive-nav-link href="{{ route('community') }}" :active="request()->routeIs('community')">
                        {{ __('Dashboard') }}
                    </x-jet-responsive-nav-link>
                </div>


                @auth
                        <!-- Responsive Settings Options -->
                        <div class="pt-4 pb-1 border-t border-gray-200">
                            <div class="flex items-center px-4">
                                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())

                                    <div class="flex-shrink-0 mr-3">
                                        <img class="object-cover w-10 h-10 rounded-full" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                    </div>
                                @endif

                                <div>
                                    <div class="text-base font-medium text-gray-800">{{ Auth::user()->name }}</div>
                                    <div class="text-sm font-medium text-gray-500">{{ Auth::user()->email }}</div>
                                </div>

                            </div>

                            <div class="mt-3 space-y-1">
                                <!-- Account Management -->
                                <x-jet-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                                    {{ __('Profile') }}
                                </x-jet-responsive-nav-link>

                                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                    <x-jet-responsive-nav-link href="{{ route('api-tokens.index') }}" :active="request()->routeIs('api-tokens.index')">
                                        {{ __('API Tokens') }}
                                    </x-jet-responsive-nav-link>
                                @endif

                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-jet-responsive-nav-link href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-jet-responsive-nav-link>
                                </form>

                                <!-- Team Management -->
                                @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                                    <div class="border-t border-gray-200"></div>

                                    <div class="block px-4 py-2 text-xs text-gray-400">
                                        {{ __('Manage Team') }}
                                    </div>

                                    <!-- Team Settings -->
                                    <x-jet-responsive-nav-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}" :active="request()->routeIs('teams.show')">
                                        {{ __('Team Settings') }}
                                    </x-jet-responsive-nav-link>

                                    @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                                        <x-jet-responsive-nav-link href="{{ route('teams.create') }}" :active="request()->routeIs('teams.create')">
                                            {{ __('Create New Team') }}
                                        </x-jet-responsive-nav-link>
                                    @endcan

                                    <div class="border-t border-gray-200"></div>

                                    <!-- Team Switcher -->
                                    <div class="block px-4 py-2 text-xs text-gray-400">
                                        {{ __('Switch Teams') }}
                                    </div>

                                    @foreach (Auth::user()->allTeams() as $team)
                                        <x-jet-switchable-team :team="$team" component="jet-responsive-nav-link" />
                                    @endforeach
                                @endif
                            </div>
                        </div>
                @endauth
            </div>
        </nav>



        <main class="container flex flex-col mx-auto mt-4 max-w-custom md:flex-row" >
            <div class="mx-auto w-70 md:mx-0 md:mr-5">
                <div class="mt-16 bg-white border-2 md:sticky md:top-8 border-yellow rounded-xl">
                    <div class="px-6 py-2 pt-6 text-center">
                        <h3 class="text-base font-semibold">Add an idea</h3>
                        @auth
                            <p class="mt-4 text-xs"> Let us know what you would like and we'll take a look</p>
                         @else
                            <p class="mt-4 text-xs"> Please Login in to Start Discussion</p>
                        @endauth
                    </div>
                        @auth
                         <livewire:create-idea  />
                        @else
                        <div class="my-6 text-center">
                            <a href="{{ route('login') }}" class="justify-center inline-block w-1/2 px-6 py-3 my-2 text-xs font-semibold text-white transition duration-150 ease-in border-gray-200 h-11 bg-blue rounded-xl hover:border-gray-400 hover:to-blue-hover">
                                <span class="ml-1">Login</span>
                            </a>
                            <a href="{{ route('register') }}"  class="justify-center inline-block w-1/2 px-6 py-3 text-xs font-semibold text-white transition duration-150 ease-in bg-black border-gray-200 h-11 rounded-xl hover:border-gray-400 hover:bg-yellow">
                                <span class="ml-1">register</span>
                            </a>
                        </div>
                        @endauth
                </div>
            </div>
            <div class="w-full px-2 md:px-0 md:w-175">
                <livewire:status-filters  />
                <div class="mt-8">
                    {{ $slot }}
                </div>
            </div>
        </main>
        <livewire:scripts />

    </body>

</html>
