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

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans bg-gray-background antialiased"> 
        <header class="flex flex-col md:flex-row items-center justify-between px-8 py-4"> 
                <a href={{ route('main-page') }} class="font-bold text-2xl"> Molabs</a>
                <div class="flex items-center mt-2 md:mt-0">
                    <div class="px-6 py-4">
                        @if (Route::has('login'))
                            <div class="hidden top-0 right-0 px-6 py-4 sm:block">
                                @auth
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
    
                                    <a href="{{ route('logout') }}"
                                             onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </a>
                                </form>
                                @else
                                    <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>
            
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                                    @endif
                                @endauth
                            </div>
                        @endif
                    </div>
                    <a href="#">
                        <img src="https://www.gravatar.com/avatar/00000000000000000000000000000000?d=mp" alt="avatar" class="w-10 h-10 rounded-full">
                    </a>
                </div>
        </header>

        <main class="container mx-auto max-w-custom flex flex-col md:flex-row" > 
            <div class="w-70 mx-auto md:mx-0 md:mr-5">
                <div class=" bg-white md:sticky md:top-8 border-2 border-yellow rounded-xl mt-16">
                    <div class="text-center px-6 py-2 pt-6">
                        <h3 class="font-semibold text-base">Add an idea</h3>
                        @auth
                             <p class="text-xs mt-4"> Let us know what you would like and we'll take a look</p>
                         @else  
                         <p class="text-xs mt-4"> Please Login in to Start Discussion</p> 
                        @endauth
                    </div>
                        @auth
                         <livewire:create-idea />
                        @else
                        <div class="my-6 text-center">
                            <a href="{{ route('login') }}" class="inline-block justify-center my-2 w-1/2 h-11 text-xs bg-blue text-white font-semibold rounded-xl border-gray-200 hover:border-gray-400 hover:to-blue-hover transition duration-150 ease-in px-6 py-3">
                                <span class="ml-1">Login</span>
                            </a>
                            <a href="{{ route('register') }}"  class="inline-block justify-center w-1/2 h-11 text-xs bg-black text-white font-semibold rounded-xl border-gray-200 hover:border-gray-400 hover:bg-yellow transition duration-150 ease-in px-6 py-3">
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
