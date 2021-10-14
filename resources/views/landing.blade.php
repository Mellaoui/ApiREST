<x-guest-layout>
    <!--Nav-->
<!-- Messenger Chat Plugin Code -->
    <div id="fb-root"></div>


    <div class="flex flex-col"
        x-data="{ scrollAtTop: true, dropDown: false, showOrderModal: false, profileDown: false, showStatusModal: true }">

        <nav :class="{ 'bg-white shadow-md' : !scrollAtTop }"
            class="fixed z-50 w-full p-4 duration-500 ease-in-out transform-gpu"
            @scroll.window="scrollAtTop = (window.pageYOffset > 30) ? false : true">
            <div class="px-2 mx-auto max-w-7xl md:px-6 lg:px-8">
                <div class="relative flex items-center justify-between h-16">
                    <div class="absolute inset-y-0 left-0 flex items-center md:hidden">
                        <!-- Mobile menu button-->
                        <button type="button"
                            class="inline-flex items-center justify-center p-2 text-white duration-500 bg-gray-700 rounded-md outline-none transform-gpu focus:ring-2 ring-inset focus:ring-white"
                            @click="dropDown = !dropDown" aria-controls="mobile-menu" aria-expanded="false">

                            <span class="sr-only">Open main menu</span>

                            <svg class="block w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path x-show.transition.duration.500ms="!dropDown" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    x-transition:enter="transition transform-gpu ease-out"
                                    x-transition:enter-start="opacity-0 scale-90"
                                    x-transition:enter-end="opacity-100 scale-100"
                                    x-transition:leave="transition transform-gpu ease-in"
                                    x-transition:leave-start="opacity-100 scale-100"
                                    x-transition:leave-end="opacity-0 scale-90"
                                    d="M4 6h16M4 12h16M4 18h16" />
                                <path x-show.transition.duration.500ms="dropDown" x-cloak stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    x-transition:enter="transition transform-gpu ease-out"
                                    x-transition:enter-start="opacity-0 scale-90"
                                    x-transition:enter-end="opacity-100 scale-100"
                                    x-transition:leave="transition transform-gpu ease-in"
                                    x-transition:leave-start="opacity-100 scale-100"
                                    x-transition:leave-end="opacity-0 scale-90"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>

                        </button>
                    </div>
                    <div class="flex items-center justify-center flex-1 md:items-stretch md:justify-start">
                        <div class="flex items-center flex-shrink-0">
                            <a id="logo" class="flex flex-row items-center space-x-2 text-2xl font-bold lg:text-3xl"
                                href="#">
                                <svg class="block w-auto h-8 text-gray-300 duration-300 transform-gpu" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24"
                                    :class="{ 'text-gray-700' : !scrollAtTop }" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                    </path>
                                </svg>
                                <div class="hidden w-auto h-8 text-gray-300 duration-300 lg:block transform-gpu"
                                    :class="{ 'text-gray-700' : !scrollAtTop }">MOLABS</div>
                            </a>
                        </div>
                        <div class="hidden md:block md:ml-6">
                            <div class="flex space-x-4">
                                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                                <a href="#"
                                    class="px-3 py-2 text-sm font-medium text-gray-300 duration-300 rounded-md transform-gpu hover:underline hover:text-white"
                                    aria-current="page" :class="{ 'text-gray-700' : !scrollAtTop }">Home</a>

                                <a href="{{ route('our-tech') }}"
                                    class="px-3 py-2 text-sm font-medium text-gray-300 duration-300 rounded-md transform-gpu hover:bg-gray-700 hover:text-white"
                                    :class="{ 'text-gray-700' : !scrollAtTop }">Services</a>

                                <a href="#technologies" onclick="scrollTodiv()"
                                    class="px-3 py-2 text-sm font-medium text-gray-300 duration-300 rounded-md transform-gpu hover:bg-gray-700 hover:text-white"
                                    :class="{ 'text-gray-700' : !scrollAtTop }">Technologies</a>

                                <a href="{{ route('overview') }}"
                                    class="px-3 py-2 text-sm font-medium text-gray-300 duration-300 rounded-md disable transform-gpu hover:bg-gray-700 hover:text-white"
                                    :class="{ 'text-gray-700' : !scrollAtTop }">Community</a>
                            </div>
                        </div>
                    </div>
                    {{-- this to be enalbled after login --}}
                    {{-- <div
                        class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                        <button
                            class="p-1 text-gray-400 bg-gray-800 rounded-full hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
                            <span class="sr-only">View notifications</span>
                            <!-- Heroicon name: outline/bell -->
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                            </svg>
                        </button>

                        <!-- Profile dropdown -->
                        <div class="relative ml-3">
                            <div>
                                <button type="button"
                                    class="flex text-sm bg-gray-800 rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white"
                                    id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                    <span class="sr-only">Open user menu</span>
                                    <img class="w-8 h-8 rounded-full"
                                        src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                        alt="">
                                </button>
                            </div>

                            <div x-show="profileDown"
                                class="absolute right-0 w-48 py-1 mt-2 origin-top-right bg-white rounded-md shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                                role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1"
                                x-transition:enter="transition ease-out duration-100"
                                x-transition:enter-start="opacity-0 transform scale-95"
                                x-transition:enter-end="opacity-100 transform scale-100"
                                x-transition:leave="transition ease-in duration-75"
                                x-transition:leave-start="opacity-100 transform scale-100"
                                x-transition:leave-end="opacity-0 transform scale-95">
                                <!-- Active: "bg-gray-100", Not Active: "" -->
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1"
                                    id="user-menu-item-0">Your Profile</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1"
                                    id="user-menu-item-1">Settings</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1"
                                    id="user-menu-item-2">Sign out</a>
                            </div>
                        </div>
                    </div> --}}
                    <div class="flex-row hidden space-x-4 md:flex">
                        <a href="{{ route('login') }}"
                            class="px-3 py-2 text-sm font-semibold duration-300 border-2 rounded-lg transform-gpu hover:border-black hover:bg-teal-400"
                            :class="{ 'text-gray-900 bg-gray-300' : scrollAtTop }">Sign In</a>
                        <a href="{{ route('register') }}"
                            class="px-3 py-2 text-sm font-semibold duration-300 border-2 rounded-lg transform-gpu hover:border-black hover:bg-green"
                            :class="{ 'text-gray-900 bg-gray-300' : scrollAtTop }">Register</a>
                    </div>
                </div>
            </div>

        </nav>
        <!-- Mobile menu, show/hide based on menu state. -->
        <div class="fixed z-50 w-full mt-24 md:hidden sm:max-w-sm" id="mobile-menu" x-show.transition.duration.500ms="dropDown" x-cloak
            x-transition:enter="transition ease-out transform-gpu"
            x-transition:enter-start="opacity-0 scale-90"
            x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in transform-gpu"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-90">
            <div class="p-2 mt-2 ml-2 space-y-1 bg-white rounded-lg">
                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                <a href="#"
                    class="block px-3 py-2 text-base font-medium text-white duration-300 bg-gray-900 rounded-md transform-gpu"
                    aria-current="page">Home</a>

                <a href="{{ route('our-tech') }}"
                    class="block px-3 py-2 text-base font-medium text-gray-700 duration-300 rounded-md transform-gpu hover:bg-gray-700 hover:text-white">Services</a>

                <a href="#technologies" onclick="scrollTodiv()"
                    class="block px-3 py-2 text-base font-medium text-gray-700 duration-300 rounded-md transform-gpu hover:bg-gray-700 hover:text-white">Technologies</a>

                <a href="{{ route('overview') }}"
                    class="block px-3 py-2 text-base font-medium text-gray-700 duration-300 rounded-md transform-gpu hover:bg-gray-700 hover:text-white">Community</a>
                <div class="flex flex-row w-full justify-evenly">
                    <a href="{{ route('login') }}"
                        class="block px-3 py-1 text-base font-medium text-gray-300 duration-300 bg-gray-900 rounded-md hover:bg-blue transform-gpu">Sign
                        In</a>
                    <a href="{{ route('register') }}"
                        class="block px-3 py-1 text-base font-medium text-gray-300 duration-300 bg-gray-900 rounded-md hover:bg-green transform-gpu">Register</a>
                </div>
            </div>
        </div>

        {{-- old navbar --}}
        {{-- <nav x-data="{ open: false }" id="header" class="top-0 z-30 w-full py-1 text-white lg:py-6">
            <div id="navitems"
                class="container flex flex-wrap items-center justify-between w-full px-3 py-0 m-0 mx-auto">
                <div class="flex items-center pl-4">
                    <a :class="{'hidden': open}" id="logo"
                        class="text-2xl font-bold no-underline hover:no-underline lg:text-4xl" href="#">
                        <svg class="inline-block w-6 h-6 text-yellow-700" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                            </path>
                        </svg>
                        MOLABS
                    </a>
                </div>
                <!--responsive nav menu-->
                <div :class="{'flex flex-col items-center justify-center': open, 'hidden': ! open}"
                    class="hidden sm:hidden">
                    <ul id="responsive" class="flex flex-col items-center flex-1 list-reset lg:flex">
                        <li class="">
                            <a id="nav-link" class="inline-block text-lg no-underline" href="#">Home</a>
                        </li>
                        <li class="">
                            <a id="nav-link" class="inline-block no-underline hover:text-gray-800 hover:text-underline"
                                href="{{ route('our-tech') }}">Services</a>
        </li>
        <li class="">
            <a onclick="scrollTodiv()" id="nav-link"
                class="inline-block no-underline hover:text-gray-800 hover:text-underline"
                href="#technologies">Technologies</a>
        </li>
        <li class="">
            <a id="nav-link" class="inline-block no-underline hover:text-gray-800 hover:text-underline"
                href={{ route('overview') }}>Our Community</a>
        </li>
        <li class="">
            <a id="nav-link" class="inline-block no-underline hover:text-gray-800 hover:text-underline"
                href="{{ route('login') }}">Login</a>
        </li>
        <li class="">
            <a id="nav-link" class="inline-block no-underline hover:text-gray-800 hover:text-underline"
                href="{{ route('register') }}">Register</a>
        </li>
        </ul>
    </div>

    <div class="flex lg:hidden">
        <button @click="open = ! open" id="nav-toggle"
            class="flex items-center px-3 py-2 text-gray-500 border border-gray-600 rounded appearance-none hover:text-gray-800 hover:border-green-500 focus:outline-none">
            <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round"
                    stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                    stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>


    <div class="z-20 flex-grow hidden w-full p-4 mt-2 text-black lg:flex lg:items-center lg:w-auto lg:mt-0 lg:p-0">
        <ul id="navcontent" class="justify-center flex-1 mx-auto list-reset lg:flex">
            <li class="">
                <a id="nav-link" class="inline-block px-4 py-2 no-underline" href="#">Home</a>
            </li>
            <li class="">
                <a id="nav-link" class="inline-block px-4 py-2 no-underline hover:text-gray-800 hover:text-underline"
                    href="{{ route('our-tech') }}">Services</a>
            </li>
            <li class="">
                <a onclick="scrollTodiv()" id="nav-link"
                    class="inline-block px-4 py-2 no-underline hover:text-gray-800 hover:text-underline"
                    href="#technologies">Technologies</a>
            </li>
            <li class="">
                <a id="nav-link" class="inline-block px-4 py-2 no-underline hover:text-gray-800 hover:text-underline"
                    href={{ route('overview') }}>Our Community</a>
            </li>
        </ul>
        <div id="" class="flex justify-end space-x-3 text-gray-800">
            <a href={{ route('login') }} id="login"
                class="px-4 py-3 text-sm font-semibold text-gray-900 bg-white rounded-lg hover:bg-gray-300 hover:text-gray-700 focus:outline-none focus-visible:ring-2 focus-visible:ring-white focus-visible:ring-offset-2 focus-visible:ring-offset-gray-900 hover:scale-110 hover:underline">
                Login
            </a>
            <a href={{ route('register') }} id="register"
                class="px-4 py-3 text-sm font-semibold text-gray-300 bg-gray-800 rounded-lg hover:bg-gray-700 focus:outline-none focus-visible:ring-2 focus-visible:ring-gray-700 focus-visible:ring-offset-2 focus-visible:ring-offset-gray-900">
                Register
            </a>
        </div>
    </div>
    </div>

    </nav> --}}

    <div class="w-full pt-40 -mt-32 overflow-hidden text-gray-300 bg-green-900 2xl:px-44">

        <div class="px-4 pt-16 pb-16 mx-auto max-w-container sm:px-6 lg:px-8 lg:pt-9 xl:pt-20">
            <div class="sm:mb-24 xl:mb-32 lg:flex">
                <div
                    class="relative z-10 flex flex-col items-start flex-none w-auto mx-auto mb-12 lg:pt-10 lg:max-w-2xl lg:mx-0 lg:pr-20 sm:mb-16 lg:mb-0">
                    <h1 class="order-1 mb-4 text-3xl font-extrabold leading-relaxed text-white sm:text-5xl">
                        <span class="leading-relaxed text-teal-400 ">Dedicated team,</span>for building your mobile
                        and web applications
                    </h1>

                    <p class="mb-4 text-sm font-semibold tracking-wide uppercase">E-commerce, Messaging, Socialmedia
                        Networking, B2B & B2C</p>
                    <p class="order-2 mb-8 leading-relaxed">We are a leading application development company based
                        in Algeria. Molabs helps businesses and individuals develop professional mobile and web
                        applications using cutting edge technologies to ensure customer satisfaction.</p>
                    <dl class="flex items-center order-1 mb-4 text-xs font-semibold tracking-wide uppercase">
                        <dt class="sr-only">All technologies include</dt>
                        <dd class="flex items-center">
                            <svg viewBox="0 0 25 27" width="25" height="27" fill="none" class="flex-none mr-2">
                                <g filter="url(#html-logo-filter)">
                                    <path d="M1 .85h22.5l-2 20.5-9.25 4-9.25-4L1 .85z" stroke="#4B5563"
                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                </g>
                                <path d="M16.5 5.85H8v5.5h8.5v6l-4.25 2-4.25-2v-2.5" stroke="#9CA3AF" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                <defs>
                                    <filter id="html-logo-filter" x=".25" y="-.899" width="24" height="27"
                                        filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                        <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                        <feBlend in="SourceGraphic" in2="BackgroundImageFix" result="shape">
                                        </feBlend>
                                        <feColorMatrix in="SourceAlpha"
                                            values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha">
                                        </feColorMatrix>
                                        <feOffset dy="-1"></feOffset>
                                        <feGaussianBlur stdDeviation=".5"></feGaussianBlur>
                                        <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1">
                                        </feComposite>
                                        <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.08 0">
                                        </feColorMatrix>
                                        <feBlend in2="shape" result="effect1_innerShadow"></feBlend>
                                    </filter>
                                </defs>
                            </svg>
                            HTML
                        </dd>
                        <dd class="flex items-center ml-6">
                            <svg viewBox="0 0 29 29" width="29" height="29" fill="none" class="flex-none mr-2">
                                <g filter="url(#react-logo-filter-0)">
                                    <ellipse cx="14.75" cy="14.106" rx="13.25" ry="5.25" stroke="#4B5563"
                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></ellipse>
                                </g>
                                <g filter="url(#react-logo-filter-1)">
                                    <ellipse cx="14.75" cy="14.099" rx="13.25" ry="5.25"
                                        transform="rotate(-60 14.75 14.1)" stroke="#4B5563" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round"></ellipse>
                                </g>
                                <g filter="url(#react-logo-filter-2)">
                                    <ellipse cx="14.75" cy="14.1" rx="13.25" ry="5.25"
                                        transform="rotate(-120 14.75 14.1)" stroke="#4B5563" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round"></ellipse>
                                </g>
                                <circle cx="14.75" cy="14.106" r="2" fill="#1F2937" stroke="#9CA3AF" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round"></circle>
                                <defs>
                                    <filter id="react-logo-filter-0" x=".75" y="7.106" width="28" height="13"
                                        filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                        <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                        <feBlend in="SourceGraphic" in2="BackgroundImageFix" result="shape">
                                        </feBlend>
                                        <feColorMatrix in="SourceAlpha"
                                            values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha">
                                        </feColorMatrix>
                                        <feOffset dy="-1"></feOffset>
                                        <feGaussianBlur stdDeviation=".5"></feGaussianBlur>
                                        <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1">
                                        </feComposite>
                                        <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.08 0">
                                        </feColorMatrix>
                                        <feBlend in2="shape" result="effect1_innerShadow"></feBlend>
                                    </filter>
                                    <filter id="react-logo-filter-1" x="5.964" y=".575" width="17.572" height="26.047"
                                        filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                        <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                        <feBlend in="SourceGraphic" in2="BackgroundImageFix" result="shape">
                                        </feBlend>
                                        <feColorMatrix in="SourceAlpha"
                                            values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha">
                                        </feColorMatrix>
                                        <feOffset dy="-1"></feOffset>
                                        <feGaussianBlur stdDeviation=".5"></feGaussianBlur>
                                        <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1">
                                        </feComposite>
                                        <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.08 0">
                                        </feColorMatrix>
                                        <feBlend in2="shape" result="effect1_innerShadow"></feBlend>
                                    </filter>
                                    <filter id="react-logo-filter-2" x="5.964" y=".576" width="17.572" height="26.047"
                                        filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                        <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                        <feBlend in="SourceGraphic" in2="BackgroundImageFix" result="shape">
                                        </feBlend>
                                        <feColorMatrix in="SourceAlpha"
                                            values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha">
                                        </feColorMatrix>
                                        <feOffset dy="-1"></feOffset>
                                        <feGaussianBlur stdDeviation=".5"></feGaussianBlur>
                                        <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1">
                                        </feComposite>
                                        <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.08 0">
                                        </feColorMatrix>
                                        <feBlend in2="shape" result="effect1_innerShadow"></feBlend>
                                    </filter>
                                </defs>
                            </svg>
                            React
                        </dd>
                        <dd class="flex items-center ml-6">
                            <svg viewBox="0 0 29 25" width="29" height="25" fill="none" class="flex-none mr-2">
                                <g filter="url(#vue-logo-filter)">
                                    <title>VueJs</title>
                                    <path d="M18.25.85l-4 6.5-4-6.5H1l13.25 22.5L27.5.85h-9.25z" stroke="#4B5563"
                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                </g>
                                <path d="M18.25.85l-4 6.5-4-6.5H6l8.25 13.5L22.5.85h-4.25z" fill="#1F2937"
                                    stroke="#9CA3AF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                </path>
                                <defs>
                                    <filter id="vue-logo-filter" x=".25" y="-.899" width="28" height="25"
                                        filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                        <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                        <feBlend in="SourceGraphic" in2="BackgroundImageFix" result="shape">
                                        </feBlend>
                                        <feColorMatrix in="SourceAlpha"
                                            values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha">
                                        </feColorMatrix>
                                        <feOffset dy="-1"></feOffset>
                                        <feGaussianBlur stdDeviation=".5"></feGaussianBlur>
                                        <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1">
                                        </feComposite>
                                        <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.08 0">
                                        </feColorMatrix>
                                        <feBlend in2="shape" result="effect1_innerShadow"></feBlend>
                                    </filter>
                                </defs>
                            </svg>
                            Vue
                        </dd>
                        <dd class="flex items-center ml-6">
                            <svg width="29" height="29" viewBox="0 0 84.1 57.6">
                                <title>laravel</title>
                                <path fill="#4B5563"
                                    d="M83.8 26.9c-.6-.6-8.3-10.3-9.6-11.9-1.4-1.6-2-1.3-2.9-1.2s-10.6 1.8-11.7 1.9c-1.1.2-1.8.6-1.1 1.6.6.9 7 9.9 8.4 12l-25.5 6.1L21.2 1.5c-.8-1.2-1-1.6-2.8-1.5C16.6.1 2.5 1.3 1.5 1.3c-1 .1-2.1.5-1.1 2.9S17.4 41 17.8 42c.4 1 1.6 2.6 4.3 2 2.8-.7 12.4-3.2 17.7-4.6 2.8 5 8.4 15.2 9.5 16.7 1.4 2 2.4 1.6 4.5 1 1.7-.5 26.2-9.3 27.3-9.8 1.1-.5 1.8-.8 1-1.9-.6-.8-7-9.5-10.4-14 2.3-.6 10.6-2.8 11.5-3.1 1-.3 1.2-.8.6-1.4zm-46.3 9.5c-.3.1-14.6 3.5-15.3 3.7-.8.2-.8.1-.8-.2-.2-.3-17-35.1-17.3-35.5-.2-.4-.2-.8 0-.8S17.6 2.4 18 2.4c.5 0 .4.1.6.4 0 0 18.7 32.3 19 32.8.4.5.2.7-.1.8zm40.2 7.5c.2.4.5.6-.3.8-.7.3-24.1 8.2-24.6 8.4-.5.2-.8.3-1.4-.6s-8.2-14-8.2-14L68.1 32c.6-.2.8-.3 1.2.3.4.7 8.2 11.3 8.4 11.6zm1.6-17.6c-.6.1-9.7 2.4-9.7 2.4l-7.5-10.2c-.2-.3-.4-.6.1-.7.5-.1 9-1.6 9.4-1.7.4-.1.7-.2 1.2.5.5.6 6.9 8.8 7.2 9.1.3.3-.1.5-.7.6z" />
                            </svg>
                            <p class="pl-3">Laravel</p>
                        </dd>
                    </dl>
                    <div class="grid order-2 w-full grid-cols-1 gap-3 text-center sm:flex sm:gap-0 sm:space-x-6">
                        <a @click="showOrderModal = true" href="#"
                            class="px-4 py-3 text-sm font-semibold text-gray-900 duration-300 bg-gray-300 rounded-lg transform-gpu hover:bg-teal-400 focus:outline-none focus-visible:ring-2 focus-visible:ring-white focus-visible:ring-offset-2 focus-visible:ring-offset-gray-900">Hire
                            Molabs</a>
                        <a href="{{ route('our-tech') }}"
                            class="px-4 py-3 text-sm font-semibold text-gray-300 duration-300 bg-gray-800 rounded-lg transform-gpu hover:bg-gray-700 focus:outline-none focus-visible:ring-2 focus-visible:ring-gray-700 focus-visible:ring-offset-2 focus-visible:ring-offset-gray-900">Browse
                            Examples</a>
                    </div>
                </div>

                <div class="relative max-w-screen-sm mx-auto lg:max-w-none lg:-ml-12 lg:mr-0 xl:-ml-32">
                    <img src="img/coding.png" alt="hero">
                </div>
            </div>
            <div
                class="relative grid max-w-screen-sm gap-10 mx-auto text-sm lg:mx-0 lg:max-w-none lg:grid-cols-3 lg:gap-8">
                <div class="flex space-x-6">
                    <svg width="44" height="44" fill="none" class="flex-none">
                        <g filter="url(#hero-feature-1-filter)">
                            <path d="M2 10a8 8 0 018-8h24a8 8 0 018 8v24a8 8 0 01-8 8H10a8 8 0 01-8-8V10z"
                                fill="#1F2937"></path>
                        </g>
                        <path
                            d="M2.75 10A7.25 7.25 0 0110 2.75h24A7.25 7.25 0 0141.25 10v24A7.25 7.25 0 0134 41.25H10A7.25 7.25 0 012.75 34V10z"
                            stroke="#334155" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                        </path>
                        <path
                            d="M29 27.335L32.25 29l-6.603 3.382a8 8 0 01-7.294 0L11.75 29 15 27.335M29 20.336L32.25 22l-6.603 3.382a8 8 0 01-7.294 0L11.75 22 15 20.336"
                            stroke="#475569" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                        </path>
                        <path d="M11.75 15l9.338-4.783a2 2 0 011.824 0L32.25 15l-6.603 3.382a8 8 0 01-7.294 0L11.75 15z"
                            fill="#22D3EE" fill-opacity=".2" stroke="#22D3EE" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round"></path>
                        <defs>
                            <filter id="hero-feature-1-filter" x="2" y="1" width="40" height="41"
                                filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                <feBlend in="SourceGraphic" in2="BackgroundImageFix" result="shape"></feBlend>
                                <feColorMatrix in="SourceAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                    result="hardAlpha"></feColorMatrix>
                                <feOffset dy="-1"></feOffset>
                                <feGaussianBlur stdDeviation=".5"></feGaussianBlur>
                                <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"></feComposite>
                                <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.08 0"></feColorMatrix>
                                <feBlend in2="shape" result="effect1_innerShadow"></feBlend>
                            </filter>
                        </defs>
                    </svg>
                    <div>
                        <h2 class="mb-2 font-semibold text-white">World Class Layouts</h2>
                        <p class="leading-normal">Beautifully designed, expertly crafted components that follow all
                            accessibility best practices and are easy to customize.</p>
                    </div>
                </div>
                <div class="flex space-x-6">
                    <svg width="44" height="44" fill="none" class="flex-none">
                        <g filter="url(#hero-feature-2-filter)">
                            <path d="M2 10a8 8 0 018-8h24a8 8 0 018 8v24a8 8 0 01-8 8H10a8 8 0 01-8-8V10z"
                                fill="#1F2937"></path>
                        </g>
                        <path
                            d="M2.75 10A7.25 7.25 0 0110 2.75h24A7.25 7.25 0 0141.25 10v24A7.25 7.25 0 0134 41.25H10A7.25 7.25 0 012.75 34V10z"
                            stroke="#334155" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                        </path>
                        <path d="M24.25 13.75l-4.5 16.5" stroke="#22D3EE" stroke-width="1.5" stroke-linecap="round">
                        </path>
                        <path
                            d="M18.75 9.75h-1a4 4 0 00-4 4v4.007a3 3 0 01-.879 2.122v0a3 3 0 000 4.242v0a3 3 0 01.879 2.122v4.007a4 4 0 004 4h1M25.25 9.75h1a4 4 0 014 4v4.007a3 3 0 00.879 2.122v0a3 3 0 010 4.242v0a3 3 0 00-.879 2.122v4.007a4 4 0 01-4 4h-1"
                            stroke="#475569" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                        </path>
                        <defs>
                            <filter id="hero-feature-2-filter" x="2" y="1" width="40" height="41"
                                filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                <feBlend in="SourceGraphic" in2="BackgroundImageFix" result="shape"></feBlend>
                                <feColorMatrix in="SourceAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                    result="hardAlpha"></feColorMatrix>
                                <feOffset dy="-1"></feOffset>
                                <feGaussianBlur stdDeviation=".5"></feGaussianBlur>
                                <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"></feComposite>
                                <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.08 0"></feColorMatrix>
                                <feBlend in2="shape" result="effect1_innerShadow"></feBlend>
                            </filter>
                        </defs>
                    </svg>
                    <div>
                        <h2 class="mb-2 font-semibold text-white">Highly optimized code</h2>
                        <p class="leading-normal">Fully interactive, accessibility-focused code snippets for React
                            and Vue, plus vanilla HTML if you’d rather write any necessary JS yourself.</p>
                    </div>
                </div>
                <div class="flex space-x-6">
                    <svg width="44" height="44" fill="none" class="flex-none">
                        <g filter="url(#hero-feature-3-filter)">
                            <path d="M2 10a8 8 0 018-8h24a8 8 0 018 8v24a8 8 0 01-8 8H10a8 8 0 01-8-8V10z"
                                fill="#1F2937"></path>
                        </g>
                        <path
                            d="M2.75 10A7.25 7.25 0 0110 2.75h24A7.25 7.25 0 0141.25 10v24A7.25 7.25 0 0134 41.25H10A7.25 7.25 0 012.75 34V10z"
                            stroke="#334155" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                        </path>
                        <path d="M9.75 23.25v-1.5a4 4 0 014-4h8.5a4 4 0 014 4v8.5a4 4 0 01-4 4h-1.5" stroke="#475569"
                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                        </path>
                        <path d="M29.75 34.25h.5a4 4 0 004-4v-18.5a2 2 0 00-2-2h-18.5a4 4 0 00-4 4v.5" stroke="#475569"
                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                        </path>
                        <path d="M33.5 10.5l-23 23" stroke="#22D3EE" stroke-width="1.5" stroke-linecap="round">
                        </path>
                        <path d="M27.75 9.75h4.5a2 2 0 012 2v4.5M16.25 34.25h-4.5a2 2 0 01-2-2v-4.5" stroke="#22D3EE"
                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                        </path>
                        <defs>
                            <filter id="hero-feature-3-filter" x="2" y="1" width="40" height="41"
                                filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                <feBlend in="SourceGraphic" in2="BackgroundImageFix" result="shape"></feBlend>
                                <feColorMatrix in="SourceAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                    result="hardAlpha"></feColorMatrix>
                                <feOffset dy="-1"></feOffset>
                                <feGaussianBlur stdDeviation=".5"></feGaussianBlur>
                                <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"></feComposite>
                                <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.08 0"></feColorMatrix>
                                <feBlend in2="shape" result="effect1_innerShadow"></feBlend>
                            </filter>
                        </defs>
                    </svg>
                    <div>
                        <h2 class="mb-2 font-semibold text-white">Fully Responsive UI & UX design</h2>
                        <p class="leading-normal">Every example is fully responsive and carefully designed and
                            implemented to look great at any screen size.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Overlay-->
    <div class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-70" x-cloak
        x-show="showOrderModal"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:enter="transition easee duration-500"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        x-transition:leave="transition ease duration-500">
        <!--Dialog-->
        <div class="w-11/12 px-6 py-4 mx-auto text-left bg-white rounded shadow-lg md:max-w-md" x-cloak
        x-show="showOrderModal"
        x-transition:enter-start="scale-90"
        x-transition:enter-end="scale-100"
        x-transition:enter="transform-gpu ease duration-500"
        x-transition:leave-start="scale-100"
        x-transition:leave-end="scale-90"
        x-transition:leave="transform-gpu ease duration-500">

            <!--Title-->
            <div class="flex items-center pb-3">
                <p class="text-2xl font-bold">Let's Talk!</p>
            </div>

            <!-- content -->
            <form method="POST" action="{{ route('client-order.store') }}">
                @csrf

                <div class="relative flex flex-wrap items-stretch w-full mb-4">
                    <div class="flex -mr-px">
                        <span
                            class="flex items-center px-3 text-sm leading-normal whitespace-no-wrap border border-r-0 rounded rounded-r-none bg-grey-lighter border-grey-light text-grey-dark">@</span>
                    </div>
                    <input name="company" type="text" id="company"
                        class="relative flex-auto flex-grow flex-shrink w-px h-10 px-3 leading-normal border rounded rounded-l-none border-grey-light focus:border-blue focus:shadow"
                        placeholder="Company Name">
                </div>

                <div class="relative flex flex-wrap items-stretch w-full mb-4">
                    <div class="flex -mr-px">
                        <span
                            class="flex items-center px-3 text-sm leading-normal whitespace-no-wrap border border-r-0 rounded rounded-r-none bg-grey-lighter border-grey-light text-grey-dark">@</span>
                    </div>
                    <input name="full_name" type="text" id="full_name"
                        class="relative flex-auto flex-grow flex-shrink w-px h-10 px-3 leading-normal border rounded rounded-l-none border-grey-light focus:border-blue focus:shadow"
                        placeholder="Full Name">
                </div>

                <div class="relative flex flex-wrap items-stretch w-full mb-4">
                    <div class="flex -mr-px">
                        <span
                            class="flex items-center px-3 text-sm leading-normal whitespace-no-wrap border border-r-0 rounded rounded-r-none bg-grey-lighter border-grey-light text-grey-dark">@</span>
                    </div>
                    <input name="email" type="text" id="email"
                        class="relative flex-auto flex-grow flex-shrink w-px h-10 px-3 leading-normal border rounded rounded-l-none border-grey-light focus:border-blue focus:shadow"
                        placeholder="Email">
                </div>

                <div class="relative flex flex-wrap items-stretch w-full mb-4">
                    <div class="flex -mr-px">
                        <span
                            class="flex items-center px-3 text-sm leading-normal whitespace-no-wrap border border-r-0 rounded rounded-r-none bg-grey-lighter border-grey-light text-grey-dark">@</span>
                    </div>
                    <input name="phone" type="text" id="phone"
                        class="relative flex-auto flex-grow flex-shrink w-px h-10 px-3 leading-normal border rounded rounded-l-none border-grey-light focus:border-blue focus:shadow"
                        placeholder="Phone with country code">
                </div>

                <div class="flex flex-col space-y-2 text-gray-700">
                    <p>How can we help you?</p>

                    @foreach (['create_app', 'seo', 'mvp', 'wordpress', 'bug_fix'] as $checkbox)
                    <div class="inline-flex items-center space-x-2">
                        <input name="{{ $checkbox }}" id="{{ $checkbox }}" type="checkbox"
                            class="w-5 h-5 text-gray-800 rounded form-checkbox focus:ring-teal-400" checked><span
                            class="">{{ $checkbox }}</span>
                    </div>
                    @endforeach

                </div>
                <!--Footer-->
                <div class="flex justify-end pt-2 space-x-3">
                    <button type="submit" @click="showOrderModal = false"
                        class="px-6 py-2 text-sm font-semibold text-gray-900 bg-teal-400 rounded-lg hover:bg-gray-300 hover:text-gray-700 focus:outline-none focus-visible:ring-2 focus-visible:ring-white focus-visible:ring-offset-2 focus-visible:ring-offset-gray-900 hover:scale-110 hover:underline">Submit</button>
                    <a class="px-6 py-2 text-white bg-black rounded-lg cursor-pointer hover:bg-blue-hover"
                        @click="showOrderModal = false">Close</a>
                </div>

            </form>


        </div>
        <!--/Dialog -->
    </div><!-- /Overlay -->

    @if (session('status'))
    <!--Overlay-->
    <div class="absolute inset-0 z-50 flex items-center justify-center overflow-auto"
        style="background-color: rgba(0,0,0,0.5)" x-show="showStatusModal"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 transform-gpu scale-90"
        x-transition:enter-end="opacity-100 transform-gpu scale-100"
        x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="opacity-100 transform-gpu scale-100"
        x-transition:leave-end="opacity-0 transform-gpu scale-90">
        <!--Dialog-->
        <div class="w-11/12 px-6 py-4 mx-auto text-left bg-white rounded shadow-lg md:max-w-md"
            @click.away="showStatusModal = false">

            <div class="flex flex-col items-center pb-3">
                <p class="text-2xl font-bold text-center" style="color: rgb(75,181,67)">
                    {{ session('status') }}
                </p>
                <p class="pt-2 text-xs font-bold text-center uppercase">(click away to close)</p>
            </div>

        </div>
        <!--/Dialog -->
    </div><!-- /Overlay -->

    @endif

    <div class="relative">
        <svg viewBox="0 0 1428 174" version="1.1" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink">
            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g transform="translate(-2.000000, 44.000000)" fill="#FFFFFF" fill-rule="nonzero">
                    <path
                        d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496"
                        opacity="0.100000001"></path>
                    <path
                        d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z"
                        opacity="0.100000001"></path>
                    <path
                        d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z"
                        id="Path-4" opacity="0.200000003"></path>
                </g>
                <g transform="translate(-4.000000, 76.000000)" fill="#FFFFFF" fill-rule="nonzero">
                    <path
                        d="M0.457,34.035 C57.086,53.198 98.208,65.809 123.822,71.865 C181.454,85.495 234.295,90.29 272.033,93.459 C311.355,96.759 396.635,95.801 461.025,91.663 C486.76,90.01 518.727,86.372 556.926,80.752 C595.747,74.596 622.372,70.008 636.799,66.991 C663.913,61.324 712.501,49.503 727.605,46.128 C780.47,34.317 818.839,22.532 856.324,15.904 C922.689,4.169 955.676,2.522 1011.185,0.432 C1060.705,1.477 1097.39,3.129 1121.236,5.387 C1161.703,9.219 1208.621,17.821 1235.4,22.304 C1285.855,30.748 1354.351,47.432 1440.886,72.354 L1441.191,104.352 L1.121,104.031 L0.457,34.035 Z">
                    </path>
                </g>
            </g>
        </svg>
    </div>

    <section class="relative z-10 py-12 m-0 bg-white border-b">
        <div id="fade-in" class="container max-w-5xl m-8 mx-auto">
            <h2 class="w-full my-2 text-3xl font-black leading-tight text-center text-gray-800">
                Our Suggestions
            </h2>
            <div class="w-full mb-4">
                <div class="w-64 h-1 mx-auto rounded-t opacity-25 gradient"></div>
            </div>

            <div class="flex flex-wrap items-center justify-around flex-1 max-w-xl mx-auto font-bold text-gray-500 ">

                <span class="flex p-4">
                    <svg width="60" height="60">
                        <g transform="matrix(.494102 0 0 .494102 9.258848 4.55222)" fill="#0080ff">
                            <path
                                d="M52.1 102.1V82.5c20.8 0 36.8-20.6 28.9-42.4-3-8.1-9.4-14.6-17.5-17.5-21.8-7.9-42.4 8.1-42.4 28.9H1.5c0-33.1 32-58.9 66.7-48.1 15.2 4.7 27.2 16.8 31.9 31.9 10.8 34.8-14.9 66.8-48 66.8z" />
                            <path d="M32.6 63h19.5v19.5H32.6zm-15 34.5v-15h15v15h-15zM5 70h12.6v12.5H5z"
                                fill-rule="evenodd" />
                        </g>
                    </svg>
                </span>
                <span class="flex p-4">
                    <svg width="60" height="60">
                        <path
                            d="m49.626 11.564a.809.809 0 0 1 .028.209v10.972a.8.8 0 0 1 -.402.694l-9.209 5.302v10.509c0 .286-.152.55-.4.694l-19.223 11.066c-.044.025-.092.041-.14.058-.018.006-.035.017-.054.022a.805.805 0 0 1 -.41 0c-.022-.006-.042-.018-.063-.026-.044-.016-.09-.03-.132-.054l-19.219-11.066a.801.801 0 0 1 -.402-.694v-32.916c0-.072.01-.142.028-.21.006-.023.02-.044.028-.067.015-.042.029-.085.051-.124.015-.026.037-.047.055-.071.023-.032.044-.065.071-.093.023-.023.053-.04.079-.06.029-.024.055-.05.088-.069h.001l9.61-5.533a.802.802 0 0 1 .8 0l9.61 5.533h.002c.032.02.059.045.088.068.026.02.055.038.078.06.028.029.048.062.072.094.017.024.04.045.054.071.023.04.036.082.052.124.008.023.022.044.028.068a.809.809 0 0 1 .028.209v20.559l8.008-4.611v-10.51c0-.07.01-.141.028-.208.007-.024.02-.045.028-.068.016-.042.03-.085.052-.124.015-.026.037-.047.054-.071.024-.032.044-.065.072-.093.023-.023.052-.04.078-.06.03-.024.056-.05.088-.069h.001l9.611-5.533a.801.801 0 0 1 .8 0l9.61 5.533c.034.02.06.045.09.068.025.02.054.038.077.06.028.029.048.062.072.094.018.024.04.045.054.071.023.039.036.082.052.124.009.023.022.044.028.068zm-1.574 10.718v-9.124l-3.363 1.936-4.646 2.675v9.124l8.01-4.611zm-9.61 16.505v-9.13l-4.57 2.61-13.05 7.448v9.216zm-36.84-31.068v31.068l17.618 10.143v-9.214l-9.204-5.209-.003-.002-.004-.002c-.031-.018-.057-.044-.086-.066-.025-.02-.054-.036-.076-.058l-.002-.003c-.026-.025-.044-.056-.066-.084-.02-.027-.044-.05-.06-.078l-.001-.003c-.018-.03-.029-.066-.042-.1-.013-.03-.03-.058-.038-.09v-.001c-.01-.038-.012-.078-.016-.117-.004-.03-.012-.06-.012-.09v-21.483l-4.645-2.676-3.363-1.934zm8.81-5.994-8.007 4.609 8.005 4.609 8.006-4.61-8.006-4.608zm4.164 28.764 4.645-2.674v-20.096l-3.363 1.936-4.646 2.675v20.096zm24.667-23.325-8.006 4.609 8.006 4.609 8.005-4.61zm-.801 10.605-4.646-2.675-3.363-1.936v9.124l4.645 2.674 3.364 1.937zm-18.422 20.561 11.743-6.704 5.87-3.35-8-4.606-9.211 5.303-8.395 4.833z"
                            fill="#ff2d20" />
                    </svg>
                </span>
            </div>
        </div>
    </section>

    <section class="py-8 bg-gray-100 border-b">
        <div id="from-left" class="container max-w-5xl m-8 mx-auto">
            <h2 class="w-full my-2 text-3xl font-black leading-tight text-center text-gray-800">
                Our Mission
            </h2>
            <div class="w-full mb-4">
                <div class="w-64 h-1 py-0 mx-auto my-0 rounded-t opacity-25 gradient"></div>
            </div>

            <div class="flex flex-wrap">
                <div class="w-5/6 p-6 space-y-6 sm:w-1/2">
                    <h3 class="mb-3 text-2xl font-bold leading-normal text-gray-800">
                        Building a new product
                    </h3>
                    <p class="mb-2 text-xl text-gray-600">
                        We'll help you release the smallest product with the biggest value.<br>
                        We specialize in:
                    </p>
                    <div class="flex flex-col">
                        <a class="flex text-orange-500 underline text-blue">
                            SaaS Development
                        </a>
                        <a class="flex text-orange-500 underline text-blue">
                            MVP Development
                        </a>
                        <a class="flex text-orange-500 underline text-blue">
                            Web App Development
                        </a>
                        <a class="flex text-orange-500 underline text-blue">
                            Mobile App Development
                        </a>
                    </div>
                </div>
                <div class="w-full p-6 sm:w-1/2">
                    <svg class="w-full mx-auto sm:h-64" viewBox="0 0 1177 598.5" xmlns="http://www.w3.org/2000/svg">
                        <title>travel booking</title>
                        <path transform="translate(-11.5 -150.75)"
                            d="M274.63,501l-6.29-3.91c-.6-.37-1.19-.77-1.79-1.15a59.86,59.86,0,0,0,6.05-116.62l.31,24.66-13.55-26.83h-.17a59.87,59.87,0,0,0-62.58,57c-.06,1.15,0,2.27,0,3.4-4.71-5.38-9-11.15-11.83-17.47-5.73-12.79-5.84-27.28-5.39-44.9.9-34.9,2.41-70.08,4.37-105.14a59.85,59.85,0,0,0,53.16-56.64c.08-1.83,0-3.63,0-5.43,0-.45,0-.89-.07-1.34-.12-1.74-.28-3.46-.55-5.16,0-.28-.1-.55-.15-.82-.24-1.44-.54-2.86-.88-4.26-.13-.53-.26-1-.4-1.57-.42-1.53-.88-3-1.42-4.52-.18-.49-.39-1-.58-1.46-.42-1.09-.88-2.17-1.37-3.23-.26-.56-.51-1.12-.78-1.67-.08-.14-.13-.29-.21-.43l0,0a59.84,59.84,0,0,0-70.28-30.36l.4,32.1-13.4-26.52a59.57,59.57,0,0,0-28.55,64.51h-.06c.09.43.22.84.32,1.26.19.79.39,1.57.61,2.35.28,1,.6,2,.93,3,.25.74.49,1.47.77,2.2.41,1.06.87,2.09,1.33,3.12.27.6.51,1.22.8,1.81q1.14,2.33,2.48,4.53c.31.52.66,1,1,1.51.64,1,1.28,2,2,2.93.43.59.89,1.16,1.34,1.73.66.83,1.33,1.65,2,2.44.49.57,1,1.12,1.51,1.66.74.78,1.49,1.53,2.27,2.26.52.49,1,1,1.57,1.46.88.79,1.8,1.53,2.73,2.26.47.37.93.75,1.41,1.11,1.42,1,2.88,2,4.39,3,.28.17.59.31.87.48,1.27.74,2.55,1.45,3.87,2.09.57.28,1.15.53,1.73.79,1.08.48,2.17.95,3.29,1.38l2,.7c1.1.37,2.22.72,3.35,1,.66.18,1.33.37,2,.53,1.22.29,2.47.53,3.73.75l.24.05q-1.23,22.19-2.2,44.39a59.83,59.83,0,0,0-83.07-26l10.58,29-21.77-20.9a59.66,59.66,0,0,0-19.34,41.34A58.5,58.5,0,0,0,52.8,354a59.84,59.84,0,0,0,110.06,16.3c0,1.5-.1,3-.14,4.51-.4,15.54-.9,34.88,6.85,52.15,5.25,11.7,13.69,21.21,22,29.73,5.43,5.54,11.06,10.91,16.83,16.1a60.09,60.09,0,0,0,21.62,18c9.48,7.3,19.3,14.17,29.45,20.51l6.34,3.94c5.7,3.53,11.54,7.16,17.26,10.93-1-.1-2-.21-3-.26a59.89,59.89,0,0,0-58.94,39l37.4,30.43-41.14-9.54a59.89,59.89,0,0,0,85.82,53.92l-2.78,3.45q-2.76,3.43-5.45,6.82c-24.34,30.83-31.11,60.09-19.06,82.4l14.66-7.91c-11.73-21.72,5.91-49.52,17.47-64.16q2.64-3.33,5.36-6.7c15.55-19.32,33.17-41.22,32.74-68.08C345.52,545,306.21,520.6,274.63,501Z"
                            fill="#f2f2f2" />
                        <ellipse cx="588.5" cy="577.5" rx="588.5" ry="21" fill="#3f3d56" />
                        <path transform="translate(-11.5 -150.75)"
                            d="M119.9,721.42c-3-5.51.4-12.27,4.29-17.18s8.61-10,8.51-16.29c-.15-9-9.7-14.31-17.33-19.09a84,84,0,0,1-15.56-12.51A22.8,22.8,0,0,1,95,650c-1.58-3.52-1.54-7.52-1.44-11.37q.51-19.26,1.91-38.49"
                            fill="none" stroke="#3f3d56" stroke-miterlimit="10" stroke-width="4" />
                        <path transform="translate(-11.5 -150.75)"
                            d="M81,599.39a14,14,0,0,1,7-11.5l3.14,6.22-.1-7.53a14.22,14.22,0,0,1,4.63-.56A14,14,0,1,1,81,599.39Z"
                            fill="#57b894" />
                        <path transform="translate(-11.5 -150.75)"
                            d="M106,694.38a14,14,0,1,0-.68-11.3l8.77,7.13L104.46,688A14,14,0,0,0,106,694.38Z"
                            fill="#57b894" />
                        <path transform="translate(-11.5 -150.75)"
                            d="M113,667.13a14,14,0,0,0,4.45-27.53l.08,5.78-3.18-6.29h0a14,14,0,0,0-14.67,13.36,13.84,13.84,0,0,0,.6,4.79A14,14,0,0,0,113,667.13Z"
                            fill="#57b894" />
                        <path transform="translate(-11.5 -150.75)"
                            d="M78.88,644.46a14,14,0,1,0-6.21-26.27l2.48,6.8-5.1-4.9a14,14,0,0,0-4.53,9.69,13.79,13.79,0,0,0,.35,3.87A14,14,0,0,0,78.88,644.46Z"
                            fill="#57b894" />
                        <path transform="translate(-11.5 -150.75)"
                            d="m82.88 603.13c3.24 0.35 6.39 1.36 9.64 1.56s6.82-0.57 8.88-3.1c1.1-1.36 1.66-3.08 2.59-4.57a10 10 0 0 1 3.54 -3.33 14 14 0 1 1 -26.24 9.31q0.79 0 1.59 0.13z"
                            opacity=".1" />
                        <path transform="translate(-11.5 -150.75)"
                            d="M78.88,644.46a14,14,0,0,0,13.35-20,10.37,10.37,0,0,0-2.82,2.82c-1,1.51-1.61,3.26-2.78,4.64-2.19,2.57-5.92,3.41-9.31,3.26s-6.66-1.12-10-1.43c-.47,0-.94-.07-1.42-.08A14,14,0,0,0,78.88,644.46Z"
                            opacity=".1" />
                        <path transform="translate(-11.5 -150.75)"
                            d="M113,667.13a14,14,0,0,0,13.46-19.76,11.48,11.48,0,0,0-3,2.85c-1.09,1.54-1.77,3.32-3,4.74-2.37,2.63-6.35,3.56-9.93,3.48s-6.83-.93-10.28-1.2A14,14,0,0,0,113,667.13Z"
                            opacity=".1" />
                        <path transform="translate(-11.5 -150.75)"
                            d="M106,694.38a14,14,0,0,0,25.59-11.45,13.84,13.84,0,0,0-3.08,2.75c-1.34,1.62-2.22,3.47-3.76,5-2.87,2.82-7.5,4-11.63,4.09A60,60,0,0,1,106,694.38Z"
                            opacity=".1" />
                        <path transform="translate(-11.5 -150.75)"
                            d="m141.07 715.07s-11.08-0.34-14.42-2.72-17-5.21-17.86-1.4-16.65 19-4.15 19.06 29.06-1.94 32.4-4 4.03-10.94 4.03-10.94z"
                            fill="#656380" />
                        <path transform="translate(-11.5 -150.75)"
                            d="m104.42 728.69c12.51 0.1 29.06-2 32.39-4 2.54-1.55 3.55-7.09 3.89-9.65h0.37s-0.7 8.94-4 11-19.89 4.07-32.4 4c-3.61 0-4.85-1.31-4.78-3.21 0.47 1.17 1.84 1.83 4.53 1.86z"
                            opacity=".2" />
                        <rect x="171.5" y="111.25" width="834" height="456" rx="20.42" fill="#f2f2f2" />
                        <path d="m172 133.75h268v434h-247.58a20.42 20.42 0 0 1 -20.42 -20.42v-413.58z" fill="#ff6347" />
                        <path transform="translate(-11.5 -150.75)"
                            d="M1017,282.42V294H183V282.42A20.42,20.42,0,0,1,203.42,262H996.58A20.42,20.42,0,0,1,1017,282.42Z"
                            fill="#3f3d56" />
                        <circle cx="193" cy="127.75" r="6" fill="#ff6347" />
                        <circle cx="208" cy="127.75" r="6" fill="#ff6347" />
                        <circle cx="223" cy="127.75" r="6" fill="#ff6347" />
                        <path transform="translate(-11.5 -150.75)"
                            d="M387.5,490A66.5,66.5,0,1,1,321,423.5,66.47,66.47,0,0,1,387.5,490Z" fill="none"
                            stroke="#f2f2f2" stroke-miterlimit="10" stroke-width="2" />
                        <path transform="translate(-11.5 -150.75)"
                            d="M325.38,467.23l8.3,13,35.53,55.59a66.5,66.5,0,0,1-103.32-8.57l43.54-84.94.91,1.43"
                            fill="none" stroke="#f2f2f2" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" />
                        <path transform="translate(-11.5 -150.75)"
                            d="M385.31,507a66.46,66.46,0,0,1-16.1,28.82l-35.53-55.59,15.69-24.78a.66.66,0,0,1,1.1,0C353.76,460.32,371,486,385.31,507Z"
                            fill="none" stroke="#f2f2f2" stroke-miterlimit="10" stroke-width="2" />
                        <path transform="translate(-11.5 -150.75)"
                            d="M337.5,452.5a15,15,0,0,1-12.12,14.73l-15-23.51a15,15,0,0,1,27.16,8.78Z" fill="none"
                            stroke="#f2f2f2" stroke-miterlimit="10" stroke-width="2" />
                        <path transform="translate(-11.5 -150.75)" d="m347.5 481.5" fill="none" stroke="#f2f2f2"
                            stroke-miterlimit="10" stroke-width="2" />
                        <path transform="translate(-11.5 -150.75)" d="m333.5 480.5" fill="none" stroke="#f2f2f2"
                            stroke-miterlimit="10" stroke-width="2" />
                        <path transform="translate(-11.5 -150.75)"
                            d="M563.51,413.13c-.35,0-1.51,0-1.83,0l-6.61.17a.19.19,0,0,1-.17-.09L545,398.42a1.61,1.61,0,0,0-1.37-.75h-2.41c-.57,0-.77.57-.56,1.1l5.09,14.52a.2.2,0,0,1-.18.28l-12.45.18a.81.81,0,0,1-.67-.31l-3.77-4.58a1.59,1.59,0,0,0-1.28-.62h-1.71a.4.4,0,0,0-.38.54l2,7a1.68,1.68,0,0,1,0,1.21l-2,7a.39.39,0,0,0,.38.53h1.7a1.62,1.62,0,0,0,1.28-.62l3.84-4.64a.82.82,0,0,1,.67-.32l12.38.27a.21.21,0,0,1,.18.28L540.65,434c-.21.53,0,1.1.56,1.1h2.41a1.61,1.61,0,0,0,1.37-.76l9.91-14.81a.2.2,0,0,1,.17-.09l6.61.17c.33,0,1.48,0,1.83,0,4.5,0,7.35-1.45,7.35-3.25S568,413.13,563.51,413.13Z"
                            fill="#3f3d56" />
                        <path transform="translate(-11.5 -150.75)"
                            d="M548.32,532.86a.41.41,0,0,0-.51,0l-15.87,12.7a.42.42,0,0,0-.15.31v23.4a.21.21,0,0,0,.2.21h11a.21.21,0,0,0,.2-.21V555a.21.21,0,0,1,.21-.2h9.36a.2.2,0,0,1,.2.2v14.24a.21.21,0,0,0,.2.21h11a.21.21,0,0,0,.2-.21v-23.4a.4.4,0,0,0-.15-.31Z"
                            fill="#3f3d56" />
                        <path transform="translate(-11.5 -150.75)"
                            d="M568.69,543.05l-19.23-15.41a2.23,2.23,0,0,0-1.39-.48,2.26,2.26,0,0,0-1.4.48l-8.37,6.81v-4.29a.2.2,0,0,0-.2-.21H532a.2.2,0,0,0-.2.21v9.38l-4.34,3.57a1.41,1.41,0,0,0-.54,1,1.45,1.45,0,0,0,.41,1.09,1.41,1.41,0,0,0,1,.42,1.47,1.47,0,0,0,.9-.31l18.7-15.06a.22.22,0,0,1,.14,0,.24.24,0,0,1,.13,0l18.71,15a1.44,1.44,0,0,0,2.33-1.19,1.45,1.45,0,0,0-.55-1Z"
                            fill="#3f3d56" />
                        <rect x="604" y="260.14" width="347" height="11" rx="1.24" fill="#ff6347" opacity=".3" />
                        <rect x="604" y="392.07" width="347" height="11" rx="1.24" fill="#ff6347" opacity=".3" />
                        <rect x="878" y="279.75" width="73" height="25" rx="1.24" fill="#ff6347" />
                        <rect x="878" y="411.75" width="73" height="25" rx="1.24" fill="#ff6347" />
                        <path transform="translate(-11.5 -150.75)"
                            d="m978.18 606.93l-1.73 2s-21.05 2-20.2 5.39 25.35-4.55 25.35-4.55z" fill="#ffc1c7" />
                        <path transform="translate(-11.5 -150.75)"
                            d="m1016.3 605.22s-22.5 8-34.74 4.56l5.69 11.39s29.05-0.86 34.18-6-5.13-9.95-5.13-9.95z"
                            fill="#ff6584" />
                        <path transform="translate(-11.5 -150.75)"
                            d="m1016.3 605.22s-22.5 8-34.74 4.56l5.69 11.39s29.05-0.86 34.18-6-5.13-9.95-5.13-9.95z"
                            opacity=".1" />
                        <circle cx="989.6" cy="378.29" r="15.09" fill="#ffc1c7" />
                        <path transform="translate(-11.5 -150.75)"
                            d="m1014 543.21a11.85 11.85 0 0 0 2 2.71 24.62 24.62 0 0 0 7.28 5.44 246.74 246.74 0 0 1 -25.93 3.86c0.92-3.24-0.29-6.7-1.91-9.64s-3.7-5.69-4.72-8.9l10.2 0.28c1.85 0 3.71 0.1 5.56 0 1.39-0.07 3.69-0.9 5-0.59 2.64 0.63 1.3 4.42 2.52 6.84z"
                            fill="#ffc1c7" />
                        <path transform="translate(-11.5 -150.75)"
                            d="M1048.24,614.05l8.54,10.25S1071,657.62,1040,661s-54.11-2.57-54.11-2.57-12.53-6-12.82-1.42-1.42,17.37-8.26,29.9l-6,13.67a8.84,8.84,0,0,0-2.27,7.41c.85,4.27-19.09,5.69-18.8,0,0,0,2.85-4.84,2.85-7.69s4.55-9.68,4.55-9.68l8.26-41s-.57-21.08,18.8-17.09,47-.86,47-.86l6.26-21.92Z"
                            fill="#575a89" />
                        <path transform="translate(-11.5 -150.75)"
                            d="M1048.24,614.05l8.54,10.25S1071,657.62,1040,661s-54.11-2.57-54.11-2.57-12.53-6-12.82-1.42-1.42,17.37-8.26,29.9l-6,13.67a8.84,8.84,0,0,0-2.27,7.41c.85,4.27-19.09,5.69-18.8,0,0,0,2.85-4.84,2.85-7.69s4.55-9.68,4.55-9.68l8.26-41s-.57-21.08,18.8-17.09,47-.86,47-.86l6.26-21.92Z"
                            opacity=".1" />
                        <path transform="translate(-11.5 -150.75)"
                            d="m1086.8 648.79v8.55a1 1 0 0 1 -1 1 1 1 0 0 1 -1 -1v-7.12a1 1 0 0 0 -1 -1h-18.82a1 1 0 0 0 -1 1v7.12a1 1 0 0 1 -1 1 1 1 0 0 1 -1 -1v-8.55a1 1 0 0 1 1 -1h22.78a1 1 0 0 1 1.04 1z"
                            fill="#3c354c" />
                        <path transform="translate(-11.5 -150.75)"
                            d="M999.16,721.79a5.79,5.79,0,0,0,5.14,6l134.88,3.33a.41.41,0,0,0,.32-.11h0a.31.31,0,0,0,.11-.2l1.79-8.32a6.38,6.38,0,0,0,.13-1.44l-2.88-60.37a5.65,5.65,0,0,0-.84-2.8l-2-3.36a1.12,1.12,0,0,0-.25-.28,1,1,0,0,0-.61-.2l-127,1.89a5.8,5.8,0,0,0-5.71,5.53Z"
                            fill="#3f3d56" />
                        <path transform="translate(-11.5 -150.75)"
                            d="M1135.53,654.27l4,76.78h0l.11-.2,1.79-8.32a6.38,6.38,0,0,0,.13-1.44l-2.88-60.37a5.65,5.65,0,0,0-.84-2.8l-2-3.36A1.12,1.12,0,0,0,1135.53,654.27Z"
                            opacity=".1" />
                        <path transform="translate(-11.5 -150.75)"
                            d="m1016.2 613.3s26.06-9.79 40.58 11c0 0 3.7 32.18-11.11 33.6s-34.17 1.14-38.73-3.7-33.32-18.51-33.32-18.51-14.32-7.3-17.12 2.19-3.1 11.77-3.1 11.77-14.81 10.82-20.79 12.81c0 0-4 5.7-6.26 5.7s-16.23 3.13-14.81-7.41l23.07-21.07 23.06-22.5s6.55-9.68 23.36-4.56a346.13 346.13 0 0 0 33.89 8.26z"
                            fill="#575a89" />
                        <path transform="translate(-11.5 -150.75)"
                            d="M955.68,707.46s5.41,13.67.86,15.38-14.24.57-14.24.57-11.4-1.43-14.24-1.14-14.53-2-12.82-6.55,10.54-3.42,10.54-3.42l8-3.7s.86-2.85,2.85-1.71S944.29,712.3,955.68,707.46Z"
                            fill="#cbceda" />
                        <path transform="translate(-11.5 -150.75)"
                            d="m926.06 667s6 13.38-3.7 12.24-17.09-3.13-19.93-3.41-10.49-2.92-9.3-8.19a4.52 4.52 0 0 0 0.08 -1c0-0.71 1-2.09 8.65-1.88 0 0 5.69 0 8-4-0.03-0.01 8.51 10.81 16.2 6.24z"
                            fill="#cbceda" />
                        <path transform="translate(-11.5 -150.75)"
                            d="m990.71 553.1s20.5-12.81 37.59 0 28.48 71.2 28.48 71.2l-39.59-8.83s-1.7-6.83-4-8-2.57-6-2.57-6-12.24-3.7-11.39-17.94-8.52-30.43-8.52-30.43z"
                            fill="#ff6584" />
                        <path transform="translate(-11.5 -150.75)"
                            d="m1001.2 553.67h-10.54s-6.27 7.12-7.12 25.06l-3.42 14.27s-7.12 17.09-2.85 19.94 12.54 2.56 14.24-3.13 13.44-38.76 13.44-38.76z"
                            fill="#ff6584" />
                        <path transform="translate(-11.5 -150.75)"
                            d="M998.23,509.4A15.27,15.27,0,0,1,1014,512c5.47,4.88,6.57,12.85,8,20s4.17,15.21,11,18a28.35,28.35,0,0,1-9.19-.27l10.25,9.19-17.27-5.63c-5.42-1.77-11.11-3.56-16.72-2.56-9.3,1.65-15.78,10.4-24.71,13.47l1-4.85-6,0a11.75,11.75,0,0,0,3.43-4,3.27,3.27,0,0,0-2.29-1.2c-2.5-15.59,6.76-31,18.81-41.17,2.38-2,5-3.92,8.06-4.42s6.64.87,7.71,3.78"
                            fill="#3c354c" />
                    </svg>
                </div>
            </div>

            <div class="flex flex-col-reverse flex-wrap sm:flex-row">
                <div class="w-full p-6 mt-6 sm:w-1/2">
                    <svg id="b055679f-4a0a-4a15-bacc-ef33493940ea" data-name="Layer 1"
                        xmlns="http://www.w3.org/2000/svg" class="w-5/6 mx-auto sm:h-64"
                        viewBox="0 0 835.45858 645.46963">
                        <path
                            d="M983.11154,692.03005c-3.31771-26.67813-19.85136-52.96384-45.29423-61.64564a123.86328,123.86328,0,0,1-.00614,85.04048c-3.90959,10.57529-9.35913,21.9305-5.68165,32.5888,2.28809,6.63189,7.88559,11.70586,14.14246,14.87849,6.25727,3.17263,13.20152,4.68476,20.05886,6.16664l1.34957,1.11616C978.56634,745.594,986.42924,718.70818,983.11154,692.03005Z"
                            transform="translate(-182.27071 -127.26518)" fill="#f0f0f0" />
                        <path
                            d="M937.56483,630.88886a105.86968,105.86968,0,0,1,26.319,59.58345,45.59121,45.59121,0,0,1-.51859,14.27515,26.14862,26.14862,0,0,1-6.50348,12.12824c-2.93126,3.22058-6.30257,6.17543-8.3999,10.05247a16.01079,16.01079,0,0,0-.78221,13.07062c1.85173,5.31109,5.5014,9.64009,9.21758,13.74946,4.12611,4.56266,8.48414,9.23647,10.238,15.28536.21252.7329,1.33731.3603,1.12512-.3715-3.0515-10.524-13.26754-16.50187-18.13955-25.98072-2.27337-4.423-3.22759-9.55792-1.09634-14.22686,1.86368-4.08278,5.3376-7.13282,8.33375-10.36807a27.90257,27.90257,0,0,0,6.80084-11.62187,42.14763,42.14763,0,0,0,1.06551-14.20255,102.71212,102.71212,0,0,0-7.50152-31.21349,107.74683,107.74683,0,0,0-19.3743-31.04833c-.50661-.56729-1.28731.32505-.784.88864Z"
                            transform="translate(-182.27071 -127.26518)" fill="#fff" />
                        <path
                            d="M963.565,683.30194a15.88383,15.88383,0,0,0,12.09073-16.6389c-.06037-.76-1.24413-.70184-1.18368.05912a14.70809,14.70809,0,0,1-11.27854,15.45466c-.74175.17635-.366,1.30046.37149,1.12512Z"
                            transform="translate(-182.27071 -127.26518)" fill="#fff" />
                        <path
                            d="M958.56314,715.43849a30.61482,30.61482,0,0,1-13.67134-17.63188c-.2151-.73213-1.34-.35975-1.12512.37149a31.844,31.844,0,0,0,14.26357,18.31865c.657.38974,1.18635-.67064.53289-1.05826Z"
                            transform="translate(-182.27071 -127.26518)" fill="#fff" />
                        <path
                            d="M951.98354,650.79246a8.991,8.991,0,0,1-8.52045-.43252c-.65176-.39787-1.18041.663-.5329,1.05826a10.07518,10.07518,0,0,0,9.42484.49938.61234.61234,0,0,0,.37681-.7483.59542.59542,0,0,0-.7483-.37682Z"
                            transform="translate(-182.27071 -127.26518)" fill="#fff" />
                        <path
                            d="M860.26386,678.03481c.3999.26.7998.52,1.20019.79a118.40687,118.40687,0,0,1,15.13965,11.81995c.37012.33.74023.67,1.1001,1.01a124.82713,124.82713,0,0,1,27.10986,37.11005,121.22156,121.22156,0,0,1,6.64014,17.18c2.45019,8.13,4.46,17.14,9.31006,23.79a20.79623,20.79623,0,0,0,1.62011,2h43.83008c.09961-.05.19971-.09.29981-.14l1.75.08c-.07032-.31-.14991-.63-.22022-.94-.04-.18-.08984-.36-.12988-.54-.02979-.12-.06006-.24-.08008-.35-.00977-.04-.02-.07995-.02979-.11-.02-.11-.05029-.21-.07031-.31q-.65991-2.685-1.35986-5.37c0-.01,0-.01-.00977-.02-3.59033-13.63-8.35009-27.08-15-39.38-.20019-.37-.3999-.75-.62011-1.12a115.67433,115.67433,0,0,0-10.39014-15.76,102.25826,102.25826,0,0,0-6.81006-7.79,85.037,85.037,0,0,0-21.27978-15.94c-15.72022-8.3-33.91993-11.48-50.72022-6.41C861.114,677.76485,860.69354,677.89479,860.26386,678.03481Z"
                            transform="translate(-182.27071 -127.26518)" fill="#f0f0f0" />
                        <path
                            d="M860.36239,678.5911A105.86972,105.86972,0,0,1,917.25,710.31926a45.59108,45.59108,0,0,1,8.18056,11.71014A26.14851,26.14851,0,0,1,927.54,735.62866c-.40143,4.33627-1.31421,8.72532-.65458,13.08366a16.01083,16.01083,0,0,0,7.24487,10.9071c4.67615,3.12574,10.19656,4.38485,15.63785,5.42855,6.04151,1.15883,12.33511,2.26677,17.37735,6.04049.61094.45724,1.2847-.51747.67468-.974-8.77264-6.56562-20.52866-5.18784-30.12561-9.82288-4.47811-2.1628-8.33157-5.68824-9.44091-10.69928-.97007-4.38194-.03267-8.90876.41174-13.29582a27.9026,27.9026,0,0,0-1.56708-13.374,42.14808,42.14808,0,0,0-7.70017-11.98145,102.71247,102.71247,0,0,0-24.78221-20.40579,107.74722,107.74722,0,0,0-34.16255-13.12569c-.746-.14794-.83213,1.03459-.091,1.18156Z"
                            transform="translate(-182.27071 -127.26518)" fill="#fff" />
                        <path
                            d="M912.67833,704.78614a15.88383,15.88383,0,0,0-.364-20.56468c-.50574-.57044-1.41593.18867-.90951.75986a14.70807,14.70807,0,0,1,.29949,19.13014c-.48606.58739.49073,1.25871.974.67468Z"
                            transform="translate(-182.27071 -127.26518)" fill="#fff" />
                        <path
                            d="M928.03309,
733.45681a30.61483,30.61483,0,0,1-21.53141-5.847c-.61254-.45506-1.28648.5195-.67468.974a31.844,31.844,0,0,0,22.41775,6.03876c.75924-.08439.54346-1.24973-.21166-1.1658Z"
                            transform="translate(-182.27071 -127.26518)" fill="#fff" />
                        <path
                            d="M883.85827,685.802a8.991,8.991,0,0,1-7.06351,4.78455c-.75994.07472-.54333,1.24.21166,1.1658a10.07516,10.07516,0,0,0,7.82586-5.27567.61233.61233,0,0,0-.14967-.82435.59541.59541,0,0,0-.82434.14967Z"
                            transform="translate(-182.27071 -127.26518)" fill="#fff" />
                        <path id="a0650842-7e0d-4738-afc6-e49dd139c2fd" data-name="Path 1"
                            d="M789.6904,223.24569l-523.083-95.836a8.03576,8.03576,0,0,0-3.22.038,6.64094,6.64094,0,0,0-2.642,1.234,6.21382,6.21382,0,0,0-1.788,2.227,6.938,6.938,0,0,0-.657,3.008v468.623a6.941,6.941,0,0,0,.655,3.009,6.214,6.214,0,0,0,1.786,2.228,6.6408,6.6408,0,0,0,2.641,1.236,8.03383,8.03383,0,0,0,3.22.04l523.088-95.837a2.47475,2.47475,0,0,0,1.163-.59,4.42557,4.42557,0,0,0,.947-1.2,6.729,6.729,0,0,0,.637-1.637,7.86484,7.86484,0,0,0,.234-1.9v-279.3a7.86552,7.86552,0,0,0-.233-1.905,6.73568,6.73568,0,0,0-.637-1.638,4.4331,4.4331,0,0,0-.947-1.2,2.47909,2.47909,0,0,0-1.163-.591Z"
                            transform="translate(-182.27071 -127.26518)" fill="#ff6347" />
                        <path id="ab230013-2870-4714-bfc2-3c974790ba7e" data-name="Path 1"
                            d="M797.6904,223.24569l-523.083-95.836a8.03576,8.03576,0,0,0-3.22.038,6.64094,6.64094,0,0,0-2.642,1.234,6.21382,6.21382,0,0,0-1.788,2.227,6.938,6.938,0,0,0-.657,3.008v468.623a6.941,6.941,0,0,0,.655,3.009,6.214,6.214,0,0,0,1.786,2.228,6.6408,6.6408,0,0,0,2.641,1.236,8.03383,8.03383,0,0,0,3.22.04l523.088-95.837a2.47475,2.47475,0,0,0,1.163-.59,4.42557,4.42557,0,0,0,.947-1.2,6.729,6.729,0,0,0,.637-1.637,7.86484,7.86484,0,0,0,.234-1.9v-279.3a7.86552,7.86552,0,0,0-.233-1.905,6.73568,6.73568,0,0,0-.637-1.638,4.4331,4.4331,0,0,0-.947-1.2,2.47909,2.47909,0,0,0-1.163-.591Z"
                            transform="translate(-182.27071 -127.26518)" fill="#fff" />
                        <path id="efb73e9a-ed9f-4c58-9f24-e2c56f2a395b" data-name="Path 2"
                            d="M797.6904,223.24569l-523.083-95.836a8.03576,8.03576,0,0,0-3.22.038,6.64094,6.64094,0,0,0-2.642,1.234,6.21382,6.21382,0,0,0-1.788,2.227,6.938,6.938,0,0,0-.657,3.008v468.623a6.941,6.941,0,0,0,.655,3.009,6.214,6.214,0,0,0,1.786,2.228,6.6408,6.6408,0,0,0,2.641,1.236,8.03383,8.03383,0,0,0,3.22.04l523.088-95.837a2.47475,2.47475,0,0,0,1.163-.59,4.42557,4.42557,0,0,0,.947-1.2,6.729,6.729,0,0,0,.637-1.637,7.86484,7.86484,0,0,0,.234-1.9v-279.3a7.86552,7.86552,0,0,0-.233-1.905,6.73568,6.73568,0,0,0-.637-1.638,4.4331,4.4331,0,0,0-.947-1.2,2.47909,2.47909,0,0,0-1.163-.591Zm1.99,284.812a5.247,5.247,0,0,1-.156,1.272,4.48925,4.48925,0,0,1-.425,1.093,2.95009,2.95009,0,0,1-.632.8,1.649,1.649,0,0,1-.775.392l-523.08,94.773a5.349,5.349,0,0,1-2.145-.03,4.426,4.426,0,0,1-1.757-.825,4.14216,4.14216,0,0,1-1.188-1.484,4.62693,4.62693,0,0,1-.436-2v-467.634a4.6289,4.6289,0,0,1,.435-2,4.14287,4.14287,0,0,1,1.187-1.486,4.423,4.423,0,0,1,1.756-.826,5.34979,5.34979,0,0,1,2.145-.031l523.083,94.776a1.64788,1.64788,0,0,1,.775.392,2.95,2.95,0,0,1,.632.8,4.49143,4.49143,0,0,1,.426,1.092,5.24382,5.24382,0,0,1,.156,1.272v279.653Z"
                            transform="translate(-182.27071 -127.26518)" fill="#cacaca" />
                        <path id="f96011ca-2547-471d-b877-843add24502e" data-name="Path 3"
                            d="M182.27139,273.53369a21.86593,21.86593,0,0,1,1.981-9.268,19.536,19.536,0,0,1,5.372-6.926,20.0878,20.0878,0,0,1,7.887-3.913,23.23687,23.23687,0,0,1,9.529-.287,27.51381,27.51381,0,0,1,9.389,3.485,30.25693,30.25693,0,0,1,7.565,6.386,29.63184,29.63184,0,0,1,5.05,8.378,26.0799,26.0799,0,0,1,1.842,9.518,21.937,21.937,0,0,1-1.842,8.96,19.59008,19.59008,0,0,1-5.05,6.846,19.93719,19.93719,0,0,1-7.565,4.092,22.86011,22.86011,0,0,1-9.389.638h0a27.18811,27.18811,0,0,1-9.524-3.184,30.18529,30.18529,0,0,1-7.884-6.305,29.77808,29.77808,0,0,1-5.373-8.553A26.191,26.191,0,0,1,182.27139,273.53369Z"
                            transform="translate(-182.27071 -127.26518)" fill="#1F2937" />
                        <path id="e2afd39c-bfa9-4aab-9b72-f2692ed67225" data-name="Path 3"
                            d="M182.27139,370.53369a21.86593,21.86593,0,0,1,1.981-9.268,19.536,19.536,0,0,1,5.372-6.926,20.0878,20.0878,0,0,1,7.887-3.913,23.23687,23.23687,0,0,1,9.529-.287,27.51381,27.51381,0,0,
1,9.389,3.485,30.25693,30.25693,0,0,1,7.565,6.386,29.63184,29.63184,0,0,1,5.05,8.378,26.0799,26.0799,0,0,1,1.842,9.518,21.937,21.937,0,0,1-1.842,8.96,19.59008,19.59008,0,0,1-5.05,6.846,19.93719,19.93719,0,0,1-7.565,4.092,22.86011,22.86011,0,0,1-9.389.638h0a27.18811,27.18811,0,0,1-9.524-3.184,30.18529,30.18529,0,0,1-7.884-6.305,29.77808,29.77808,0,0,1-5.373-8.553A26.191,26.191,0,0,1,182.27139,370.53369Z"
                            transform="translate(-182.27071 -127.26518)" fill="#ff6347" />
                        <path id="a7f5fcd6-9ca6-43fc-9a19-c5543edb3dc0" data-name="Path 3"
                            d="M182.27139,467.53369a21.86593,21.86593,0,0,1,1.981-9.268,19.536,19.536,0,0,1,5.372-6.926,20.0878,20.0878,0,0,1,7.887-3.913,23.23687,23.23687,0,0,1,9.529-.287,27.51381,27.51381,0,0,1,9.389,3.485,30.25693,30.25693,0,0,1,7.565,6.386,29.63184,29.63184,0,0,1,5.05,8.378,26.0799,26.0799,0,0,1,1.842,9.518,21.937,21.937,0,0,1-1.842,8.96,19.59008,19.59008,0,0,1-5.05,6.846,19.93719,19.93719,0,0,1-7.565,4.092,22.86011,22.86011,0,0,1-9.389.638h0a27.18811,27.18811,0,0,1-9.524-3.184,30.18529,30.18529,0,0,1-7.884-6.305,29.77808,29.77808,0,0,1-5.373-8.553A26.191,26.191,0,0,1,182.27139,467.53369Z"
                            transform="translate(-182.27071 -127.26518)" fill="#ff6347" />
                        <path id="bf82177c-c5c5-4721-a492-d21e500fa887" data-name="Path 3"
                            d="M188.27139,273.53369a21.86593,21.86593,0,0,1,1.981-9.268,19.536,19.536,0,0,1,5.372-6.926,20.0878,20.0878,0,0,1,7.887-3.913,23.23687,23.23687,0,0,1,9.529-.287,27.51381,27.51381,0,0,1,9.389,3.485,30.25693,30.25693,0,0,1,7.565,6.386,29.63184,29.63184,0,0,1,5.05,8.378,26.0799,26.0799,0,0,1,1.842,9.518,21.937,21.937,0,0,1-1.842,8.96,19.59008,19.59008,0,0,1-5.05,6.846,19.93719,19.93719,0,0,1-7.565,4.092,22.86011,22.86011,0,0,1-9.389.638h0a27.18811,27.18811,0,0,1-9.524-3.184,30.18529,30.18529,0,0,1-7.884-6.305,29.77808,29.77808,0,0,1-5.373-8.553A26.191,26.191,0,0,1,188.27139,273.53369Z"
                            transform="translate(-182.27071 -127.26518)" fill="#1F2937" />
                        <path id="fe313e0a-2048-439a-a54e-0e20ebfa32da" data-name="Path 4"
                            d="M188.27139,369.87268a22.86517,22.86517,0,0,1,1.981-9.418,21.70018,21.70018,0,0,1,5.372-7.32,21.99405,21.99405,0,0,1,7.887-4.5,23.58725,23.58725,0,0,1,9.529-.991,25.758,25.758,0,0,1,9.389,2.791,27.17815,27.17815,0,0,1,7.565,5.827,26.864,26.864,0,0,1,5.05,8,25.028,25.028,0,0,1,1.841,9.393,22.9,22.9,0,0,1-1.842,9.1,21.766,21.766,0,0,1-12.615,11.87,23.394,23.394,0,0,1-9.389,1.331h0a25.6089,25.6089,0,0,1-9.524-2.48,27.21394,27.21394,0,0,1-13.255-13.885A25.10007,25.10007,0,0,1,188.27139,369.87268Z"
                            transform="translate(-182.27071 -127.26518)" fill="#1F2937" />
                        <path id="bd4ad8d1-9beb-4dfd-9043-04087d822fa4" data-name="Path 5"
                            d="M188.27139,466.21168a23.912,23.912,0,0,1,7.353-17.281,24.41659,24.41659,0,0,1,39.415,8.223,24.10866,24.10866,0,0,1-21.999,33.304h0a24.465,24.465,0,0,1-22.78-14.675A24.02889,24.02889,0,0,1,188.27139,466.21168Z"
                            transform="translate(-182.27071 -127.26518)" fill="#1F2937" />
                        <path id="a8cdce74-e5d0-4904-9e42-fa7998d61cd8" data-name="Path 6"
                            d="M203.38039,273.42369l7.262,1.116v-7.16a2.15393,2.15393,0,0,1,.186-.9,1.90985,1.90985,0,0,1,.513-.678,1.95489,1.95489,0,0,1,.762-.391,2.26872,2.26872,0,0,1,.933-.04,2.71287,2.71287,0,0,1,.933.334,3.00987,3.00987,0,0,1,.762.63,2.95889,2.95889,0,0,1,.515.837,2.59017,2.59017,0,0,1,.191.955v7.15l7.124,1.093a2.641,2.641,0,0,1,.918.327,2.947,2.947,0,0,1,1.254,1.448,2.57312,2.57312,0,0,1,.185.947,2.16013,2.16013,0,0,1-.185.891,1.917,1.917,0,0,1-.5.674,1.94126,1.94126,0,0,1-.749.394,2.22112,2.22112,0,0,1-.918.048l-7.134-1.067v7.134a2.17,2.17,0,0,1-.188.9,1.95017,1.95017,0,0,1-.512.683,1.99008,1.99008,0,0,1-.76.4,2.27405,2.27405,0,0,1-.932.054,2.67615,2.67615,0,0,1-.934-.32,2.947,2.947,0,0,1-.763-.62,2.89981,2.89981,0,0,1-.515-.832,2.56591,2.56591,0,0,1-.186-.957v-7.16l-7.262-1.09a2.75021,2.75021,0,0,1-.948-.331,3.02307,3.02307,0,0,1-.775-.631,2.94993,2.94993,0,0,1-.523-.838,2.58017,2.58017,0,0,1-.192-.967,2.16005,2.16005,0,0,1,.192-.907,1.94109,1.94109,0,0,1,.523-.684,2.00489,2.00489,0,0,1,.775-.4A2.32472,2.32472,0,0,1,203.38039,273.42369Z"
                            transform="translate(-182.27071 -127.26518)" fill="#fff" />
                        <path id="b7a04d04-cd1f-49a6-9e27-
762621fbfe12" data-name="Path 7"
                            d="M208.47739,378.19768l20.166,1.462h.074l-9.457-17.17a.7561.7561,0,0,0-.245-.268.7362.7362,0,0,0-.161-.081.70048.70048,0,0,0-.177-.039.65222.65222,0,0,0-.176.008.61406.61406,0,0,0-.161.054.589.589,0,0,0-.245.227l-6.435,10.578-.31.509Z"
                            transform="translate(-182.27071 -127.26518)" fill="#fff" />
                        <path id="aee7be29-824b-4068-b60b-6c8751f56236" data-name="Path 8"
                            d="M196.96839,377.36269l17.792,1.29-3.41-5.176-.246-.374-4.472-6.789a1.02108,1.02108,0,0,0-.291-.262,1.00059,1.00059,0,0,0-.173-.082.96319.96319,0,0,0-.192-.047.91741.91741,0,0,0-.191-.007.87618.87618,0,0,0-.183.032.83014.83014,0,0,0-.169.07.806.806,0,0,0-.15.106l-.015.018-.019.018-.015.019-.015.019Z"
                            transform="translate(-182.27071 -127.26518)" fill="#fff" />
                        <path id="ba3c0334-c882-4ee2-a1c6-8432d6f0f237" data-name="Ellipse 1"
                            d="M210.42339,359.66368a3.219,3.219,0,0,1,1.177.336,3.41489,3.41489,0,0,1,.959.725,3.373,3.373,0,0,1,.646,1.008,3.11891,3.11891,0,0,1,.237,1.186,2.82719,2.82719,0,0,1-.237,1.146,2.67115,2.67115,0,0,1-.646.9,2.708,2.708,0,0,1-.959.563,2.92011,2.92011,0,0,1-1.177.139,3.21608,3.21608,0,0,1-1.179-.333,3.414,3.414,0,0,1-.964-.724,3.37389,3.37389,0,0,1-.651-1.01,3.11984,3.11984,0,0,1-.239-1.192,2.82691,2.82691,0,0,1,.239-1.15,2.671,2.671,0,0,1,.651-.9,2.71,2.71,0,0,1,.964-.558A2.924,2.924,0,0,1,210.42339,359.66368Z"
                            transform="translate(-182.27071 -127.26518)" fill="#fff" />
                        <path id="a6488acd-751d-43fe-95e8-3811e87b97c8" data-name="Rectangle 2"
                            d="M428.03438,428.10869l199.68-189.457.856,1.5-199.288,189.56Z"
                            transform="translate(-182.27071 -127.26518)" fill="#ff6347" />
                        <path id="f4872601-d834-4ac9-b8ed-95180004a4aa" data-name="Rectangle 3"
                            d="M428.0664,213.37569l1.252-1.5,199.234,206.825-.859,1.425Z"
                            transform="translate(-182.27071 -127.26518)" fill="#ff6347" />
                        <path id="fd144007-5a21-49cb-9314-d281c54acffb" data-name="Path 9"
                            d="M625.69439,235.88569l-194.1-26.666a5.967,5.967,0,0,0-2.675.228,5.74989,5.74989,0,0,0-2.193,1.324,6.3929,6.3929,0,0,0-1.485,2.2,7.59974,7.59974,0,0,0-.547,2.878v208.94a7.94788,7.94788,0,0,0,.547,2.92,7.15,7.15,0,0,0,1.484,2.328,6.42288,6.42288,0,0,0,2.193,1.5,6.15286,6.15286,0,0,0,2.675.448l194.101-10.69a3.93593,3.93593,0,0,0,1.845-.6,5.32318,5.32318,0,0,0,1.5-1.421,7.08921,7.08921,0,0,0,1.01-2.037,8.1921,8.1921,0,0,0,.371-2.446v-172.02a8.49992,8.49992,0,0,0-.371-2.477,7.80683,7.80683,0,0,0-1.01-2.12,6.01612,6.01612,0,0,0-1.5-1.545A4.25291,4.25291,0,0,0,625.69439,235.88569Zm-194.1,193.95a4.39385,4.39385,0,0,1-1.909-.324,4.58876,4.58876,0,0,1-1.564-1.074,5.10869,5.10869,0,0,1-1.058-1.666,5.67889,5.67889,0,0,1-.39-2.083v-208.58a5.43086,5.43086,0,0,1,.39-2.051,4.56884,4.56884,0,0,1,1.058-1.574,4.10786,4.10786,0,0,1,1.564-.945,4.259,4.259,0,0,1,1.909-.167l194.1,26.305a3.03505,3.03505,0,0,1,1.319.532,4.29386,4.29386,0,0,1,1.074,1.1,5.575,5.575,0,0,1,.723,1.515,6.06989,6.06989,0,0,1,.266,1.771v172.267a5.85424,5.85424,0,0,1-.266,1.75,5.063,5.063,0,0,1-.723,1.456,3.8,3.8,0,0,1-1.074,1.014,2.809,2.809,0,0,1-1.319.423Z"
                            transform="translate(-182.27071 -127.26518)" fill="#1F2937" />
                        <g id="b5e30cc8-5ae1-449e-85b5-4004b80a7a56" data-name="b12ed9b2-cc32-4c4f-a9d5-2d1deb4d0e3e">
                            <path id="a649d73e-ec59-4c3e-8cce-1f940f947e89" data-name="Path 14"
                                d="M425.16439,454.05067a2.96011,2.96011,0,0,0-1.427.554,4.49326,4.49326,0,0,0-1.158,1.251,6.41734,6.41734,0,0,0-.772,1.758,7.54451,7.54451,0,0,0-.267,2.082,7.01333,7.01333,0,0,0,.3,1.987,5.27718,5.27718,0,0,0,.78,1.58,3.515,3.515,0,0,0,1.147,1.023,2.6,2.6,0,0,0,1.4.315l339.804-28.137a1.164,1.164,0,0,0,.718-.329,2.717,2.717,0,0,0,.59-.828,5.28384,5.28384,0,0,0,.4-1.2,7.28875,7.28875,0,0,0,.156-1.458,7.06832,7.06832,0,0,0-.132-1.445,4.80693,4.80693,0,0,0-.384-1.169,2.33926,2.33926,0,0,0-.574-.779,1.046,1.046,0,0,0-.714-.264h-.06Z"
                                transform="translate(-182.27071 -127.26518)" fill="#1F2937" />
                        </g>
                        <g id="a3d56c43-6c72-48a5-a1aa-00d4337a9f01" data-name="e10bb4bc-6df1-41b6-ac46-84090840b498">
                            <path id="fcd1be7c-dd66-4ef0-bebb-a6cb75017f49" data-name="Path 15"
                                d="M425.16439,486.0707a3.043,3.043,0,0,0-1.427.593,4.67907,4.67907,0,0,0-1.158,1.278,6.612,6.612,0,0,0-.772,1.779,7.62259,
7.62259,0,0,0-.267,2.095,6.92737,6.92737,0,0,0,.3,1.979,5.10741,5.10741,0,0,0,.78,1.559,3.37617,3.37617,0,0,0,1.145.991,2.55609,2.55609,0,0,0,1.4.277l339.806-37.486a1.19994,1.19994,0,0,0,.718-.349,2.82385,2.82385,0,0,0,.59-.845,5.418,5.418,0,0,0,.4-1.216,7.352,7.352,0,0,0,.156-1.463,7.01458,7.01458,0,0,0-.132-1.442,4.69213,4.69213,0,0,0-.384-1.158,2.24884,2.24884,0,0,0-.577-.76,1.021,1.021,0,0,0-.714-.245h-.06Z"
                                transform="translate(-182.27071 -127.26518)" fill="#ff6347" />
                        </g>
                        <g id="b86b841b-6efa-4245-8922-ec58e5370162" data-name="e3c0a870-6a35-4470-a43f-0902a465f5fb">
                            <path id="f8e452a4-70d1-4eed-9ead-ca836e74dca4" data-name="Path 16"
                                d="M425.16439,517.5727a3.13187,3.13187,0,0,0-1.427.632,4.86818,4.86818,0,0,0-1.158,1.31,6.80988,6.80988,0,0,0-.772,1.8,7.70066,7.70066,0,0,0-.267,2.101,6.84328,6.84328,0,0,0,.3,1.97,4.94433,4.94433,0,0,0,.78,1.538,3.24615,3.24615,0,0,0,1.145.96,2.519,2.519,0,0,0,1.4.239l339.806-46.683a1.23808,1.23808,0,0,0,.718-.368,2.93386,2.93386,0,0,0,.59-.861,5.54837,5.54837,0,0,0,.4-1.227,7.41519,7.41519,0,0,0,.156-1.467,6.96133,6.96133,0,0,0-.132-1.438,4.57839,4.57839,0,0,0-.384-1.148,2.16308,2.16308,0,0,0-.577-.744.99991.99991,0,0,0-.714-.226h-.06006Z"
                                transform="translate(-182.27071 -127.26518)" fill="#ff6347" />
                        </g>
                        <path id="fb3cf623-4c27-484d-8f36-79433da26778" data-name="Path 17"
                            d="M222.73439,456.06569l-19.398-.232a2.761,2.761,0,0,0-.954.135,2.726,2.726,0,0,0-.823.437,2.68079,2.68079,0,0,0-.624.687,2.6529,2.6529,0,0,0-.355.883,2.57891,2.57891,0,0,0,.057,1.124,2.61455,2.61455,0,0,0,.21.527,2.659,2.659,0,0,0,.743.873,2.694,2.694,0,0,0,1.605.547l5.834.053a1.413,1.413,0,0,1,1.29.857,1.379,1.379,0,0,1,.11.541v11.444a2.665,2.665,0,0,0,.594,1.739,2.692,2.692,0,0,0,1.579.95,2.613,2.613,0,0,0,2.8-1.472,2.581,2.581,0,0,0,.242-1.089v-11.54a1.371,1.371,0,0,1,1.37193-1.37007l.01307.00007,5.573.044a2.629,2.629,0,0,0,2.663-2.113,2.6007,2.6007,0,0,0-2.531-3.025Z"
                            transform="translate(-182.27071 -127.26518)" fill="#fff" />
                        <path id="a62d2508-f0bf-44ee-9014-84ffc49b2c41" data-name="Ellipse 2"
                            d="M222.73539,471.48368a2.57454,2.57454,0,1,1-2.371,1.573A2.567,2.567,0,0,1,222.73539,471.48368Z"
                            transform="translate(-182.27071 -127.26518)" fill="#fff" />
                        <path
                            d="M677.38272,319.82541a13.38938,13.38938,0,0,1-.433,2.06333l40.43585,48.41576,15.102-2.60224,6.90614,22.27828-26.28741,7.20493a10.17566,10.17566,0,0,1-11.35867-4.48511l-37.58107-61.13912a13.35185,13.35185,0,1,1,13.21613-11.73583Z"
                            transform="translate(-182.27071 -127.26518)" fill="#ffb6b6" />
                        <path
                            d="M719.17588,367.6052a5.7177,5.7177,0,0,1,3.966-2.64321l28.36925-4.5241a15.89617,15.89617,0,0,1,9.64965,30.2924L735.241,403.33208a5.72384,5.72384,0,0,1-7.96122-3.42645l-8.6936-27.57027A5.71739,5.71739,0,0,1,719.17588,367.6052Z"
                            transform="translate(-182.27071 -127.26518)" fill="#3f3d56" />
                        <polygon points="538.487 632.518 526.227 632.518 520.395 585.23 538.489 585.231 538.487 632.518"
                            fill="#ffb6b6" />
                        <path
                            d="M723.88407,771.66753l-39.53077-.00146v-.5a15.3873,15.3873,0,0,1,15.38648-15.38623h.001l24.144.001Z"
                            transform="translate(-182.27071 -127.26518)" fill="#2f2e41" />
                        <polygon points="666.487 632.518 654.227 632.518 648.395 585.23 666.489 585.231 666.487 632.518"
                            fill="#ffb6b6" />
                        <path
                            d="M851.88407,771.66753l-39.53077-.00146v-.5a15.3873,15.3873,0,0,1,15.38648-15.38623h.001l24.144.001Z"
                            transform="translate(-182.27071 -127.26518)" fill="#2f2e41" />
                        <path
                            d="M725.54425,471.73482l53.12549-15.35207c19.353,13.72658,32.71533,41.24025,28.38769,76.83934-6.97412,57.368,33.39879,131.13028,50.81078,205.86906L827.76,740.037,761.8305,582.25741,723.17791,743.32223l-26.89555.84491,17.98569-221.76882Z"
                            transform="translate(-182.27071 -127.26518)" fill="#2f2e41" />
                        <circle cx="566.92971" cy="177.47418" r="27.48195" fill="#ffb6b6" />
                        <path
                            d="M721.23784,426.94229c-6.07438-10.66281-9.07572-23.61267-3.78882-34.68707,1.33127-2.78849,4.96124-5.42426,6.86133-7.861l21.2339-31.6594,23.976-3.85711c20.74916,17.40232,3.024,76.85711,20.024,115.85711l-71,38C723.61925,483.35323,730.46876,443.14609,721.23784,426.94229Z"
                            transform="translate(-182.27071 -127.26518)" fill="#3f3d56" />
                        <path
                            d="M721.54425,293.73482s1.
86127-3.44684,13,1c3.89856,1.55639,5.72674,1.19856,5.98014,4.5852a64.6209,64.6209,0,0,0,13.39649,35.03447l.08459.10943,5.56937-5.0821,7.16061,5.71736,30.23374.63526s4.77379-23.50471-11.13873-50.18576-48.53312-12.07-48.53312-12.07C715.01986,274.7492,721.54425,293.73482,721.54425,293.73482Z"
                            transform="translate(-182.27071 -127.26518)" fill="#ff6347" />
                        <path id="e3bc2865-e5cc-42bd-b905-26cd15d9eaa8" data-name="Path 9"
                            d="M651.38462,258.60734l-194.1-26.666a5.967,5.967,0,0,0-2.675.228,5.74989,5.74989,0,0,0-2.193,1.324,6.393,6.393,0,0,0-1.485,2.2,7.59994,7.59994,0,0,0-.547,2.878v208.94a7.94788,7.94788,0,0,0,.547,2.92,7.14987,7.14987,0,0,0,1.484,2.328,6.42284,6.42284,0,0,0,2.193,1.5,6.15272,6.15272,0,0,0,2.675.448l194.101-10.69a3.9359,3.9359,0,0,0,1.845-.6,5.32318,5.32318,0,0,0,1.5-1.421,7.08924,7.08924,0,0,0,1.01-2.037,8.1921,8.1921,0,0,0,.371-2.446v-172.02a8.49992,8.49992,0,0,0-.371-2.477,7.80715,7.80715,0,0,0-1.01-2.12,6.016,6.016,0,0,0-1.5-1.545A4.25286,4.25286,0,0,0,651.38462,258.60734Z"
                            transform="translate(-182.27071 -127.26518)" fill="#6c63ff" />
                        <path id="b68ff6b4-7e21-4c16-926b-abc7c0c87ae6" data-name="Path 9"
                            d="M651.38462,258.60734l-194.1-26.666a5.967,5.967,0,0,0-2.675.228,5.74989,5.74989,0,0,0-2.193,1.324,6.393,6.393,0,0,0-1.485,2.2,7.59994,7.59994,0,0,0-.547,2.878v208.94a7.94788,7.94788,0,0,0,.547,2.92,7.14987,7.14987,0,0,0,1.484,2.328,6.42284,6.42284,0,0,0,2.193,1.5,6.15272,6.15272,0,0,0,2.675.448l194.101-10.69a3.9359,3.9359,0,0,0,1.845-.6,5.32318,5.32318,0,0,0,1.5-1.421,7.08924,7.08924,0,0,0,1.01-2.037,8.1921,8.1921,0,0,0,.371-2.446v-172.02a8.49992,8.49992,0,0,0-.371-2.477,7.80715,7.80715,0,0,0-1.01-2.12,6.016,6.016,0,0,0-1.5-1.545A4.25286,4.25286,0,0,0,651.38462,258.60734Z"
                            transform="translate(-182.27071 -127.26518)" opacity="0.2" />
                        <path id="b6d259d0-7a66-4dd7-a2f5-b1dbe4f4dee1" data-name="Path 9"
                            d="M659.38462,258.60734l-194.1-26.666a5.967,5.967,0,0,0-2.675.228,5.74989,5.74989,0,0,0-2.193,1.324,6.393,6.393,0,0,0-1.485,2.2,7.59994,7.59994,0,0,0-.547,2.878v208.94a7.94788,7.94788,0,0,0,.547,2.92,7.14987,7.14987,0,0,0,1.484,2.328,6.42284,6.42284,0,0,0,2.193,1.5,6.15272,6.15272,0,0,0,2.675.448l194.101-10.69a3.9359,3.9359,0,0,0,1.845-.6,5.32318,5.32318,0,0,0,1.5-1.421,7.08924,7.08924,0,0,0,1.01-2.037,8.1921,8.1921,0,0,0,.371-2.446v-172.02a8.49992,8.49992,0,0,0-.371-2.477,7.80715,7.80715,0,0,0-1.01-2.12,6.016,6.016,0,0,0-1.5-1.545A4.25286,4.25286,0,0,0,659.38462,258.60734Z"
                            transform="translate(-182.27071 -127.26518)" fill="#1F2937" />
                        <path
                            d="M658.5515,425.64818a13.38917,13.38917,0,0,1,1.46764,1.51354l62.75346-6.41451,6.29527-13.9718,22.32769,6.74471-8.74081,25.81738a10.17565,10.17565,0,0,1-10.07381,6.90318l-71.7-3.072a13.35185,13.35185,0,1,1-2.32942-17.52055Z"
                            transform="translate(-182.27071 -127.26518)" fill="#ffb6b6" />
                        <path
                            d="M721.53754,417.7529a5.71764,5.71764,0,0,1,.02907-4.766l12.12758-26.04234a15.89617,15.89617,0,0,1,30.50463,8.95619l-4.06256,28.53311a5.72385,5.72385,0,0,1-7.29509,4.68008l-27.71366-8.22505A5.71742,5.71742,0,0,1,721.53754,417.7529Z"
                            transform="translate(-182.27071 -127.26518)" fill="#3f3d56" />
                        <path d="M1016.72929,772.73482h-381a1,1,0,0,1,0-2h381a1,1,0,0,1,0,2Z"
                            transform="translate(-182.27071 -127.26518)" fill="#cacaca" />
                    </svg>
                </div>
                <div class="w-full p-6 mt-6 space-y-6 sm:w-1/2">
                    <h3 class="mb-3 text-2xl font-bold leading-none text-gray-800">
                        SEO / Marketing
                    </h3>
                    <p class="mb-8 text-xl text-gray-600">
                        With SEO, we will help you get a higher rank on Search Engines.<br>
                        We specialize in:
                    </p>
                    <div class="flex flex-col">
                        <a class="flex text-orange-500 underline text-blue">
                            Wordpress
                        </a>
                        <a class="flex text-orange-500 underline text-blue">
                            Woocommerce
                        </a>
                        <a class="flex text-orange-500 underline text-blue">
                            Shopify
                        </a>
                    </div>
                    <a class="text-orange-500 underline" href="#"></a>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="tech" class="py-8 bg-white border-b">
        <div class="container flex flex-col flex-wrap pt-4 pb-10 mx-auto space-y-12">

            <div id="section-title">
                <h2 class="w-full my-2 text-3xl font-black leading-tight text-center text-gray-800">
                    Our Technologies
                </h2>
                <div class="w-full mb-4">
                    <div class="w-64 h-1 py-0 mx-auto my-0 rounded-t opacity-25 gradient"></div>
                </div>
            </div>

            <div class="grid grid-cols-1 mx-auto gap-x-24 gap-y-10 sm:grid-cols-2 lg:grid-cols-4">

                <div class="w-full p-6 space-y-6 duration-300 transform rounded shadow-lg hover:bg-gray-100">
                    <h2 class="text-lg font-medium text-center text-gray-900 sm:text-xl title-font">Laravel</h2>
                    <svg class="" height="100" viewBox="0 0 49 51" width="100" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="m49.626 11.564a.809.809 0 0 1 .028.209v10.972a.8.8 0 0 1 -.402.694l-9.209 5.302v10.509c0 .286-.152.55-.4.694l-19.223 11.066c-.044.025-.092.041-.14.058-.018.006-.035.017-.054.022a.805.805 0 0 1 -.41 0c-.022-.006-.042-.018-.063-.026-.044-.016-.09-.03-.132-.054l-19.219-11.066a.801.801 0 0 1 -.402-.694v-32.916c0-.072.01-.142.028-.21.006-.023.02-.044.028-.067.015-.042.029-.085.051-.124.015-.026.037-.047.055-.071.023-.032.044-.065.071-.093.023-.023.053-.04.079-.06.029-.024.055-.05.088-.069h.001l9.61-5.533a.802.802 0 0 1 .8 0l9.61 5.533h.002c.032.02.059.045.088.068.026.02.055.038.078.06.028.029.048.062.072.094.017.024.04.045.054.071.023.04.036.082.052.124.008.023.022.044.028.068a.809.809 0 0 1 .028.209v20.559l8.008-4.611v-10.51c0-.07.01-.141.028-.208.007-.024.02-.045.028-.068.016-.042.03-.085.052-.124.015-.026.037-.047.054-.071.024-.032.044-.065.072-.093.023-.023.052-.04.078-.06.03-.024.056-.05.088-.069h.001l9.611-5.533a.801.801 0 0 1 .8 0l9.61 5.533c.034.02.06.045.09.068.025.02.054.038.077.06.028.029.048.062.072.094.018.024.04.045.054.071.023.039.036.082.052.124.009.023.022.044.028.068zm-1.574 10.718v-9.124l-3.363 1.936-4.646 2.675v9.124l8.01-4.611zm-9.61 16.505v-9.13l-4.57 2.61-13.05 7.448v9.216zm-36.84-31.068v31.068l17.618 10.143v-9.214l-9.204-5.209-.003-.002-.004-.002c-.031-.018-.057-.044-.086-.066-.025-.02-.054-.036-.076-.058l-.002-.003c-.026-.025-.044-.056-.066-.084-.02-.027-.044-.05-.06-.078l-.001-.003c-.018-.03-.029-.066-.042-.1-.013-.03-.03-.058-.038-.09v-.001c-.01-.038-.012-.078-.016-.117-.004-.03-.012-.06-.012-.09v-21.483l-4.645-2.676-3.363-1.934zm8.81-5.994-8.007 4.609 8.005 4.609 8.006-4.61-8.006-4.608zm4.164 28.764 4.645-2.674v-20.096l-3.363 1.936-4.646 2.675v20.096zm24.667-23.325-8.006 4.609 8.006 4.609 8.005-4.61zm-.801 10.605-4.646-2.675-3.363-1.936v9.124l4.645 2.674 3.364 1.937zm-18.422 20.561 11.743-6.704 5.87-3.35-8-4.606-9.211 5.303-8.395 4.833z"
                            fill="#ff2d20" />
                    </svg>
                </div>

                <div class="w-full p-6 space-y-6 duration-300 transform rounded shadow-lg hover:bg-gray-100">
                    <h2 class="text-lg font-medium text-center text-gray-900 sm:text-xl title-font">NodeJs</h2>
                    <svg class="" width="100" height="100" viewBox="0 0 256 282" xmlns="http://www.w3.org/2000/svg">
                        <g fill="#8CC84B">
                            <path
                                d="M116.504 3.58c6.962-3.985 16.03-4.003 22.986 0 34.995 19.774 70.001 39.517 104.99 59.303 6.581 3.707 10.983 11.031 10.916 18.614v118.968c.049 7.897-4.788 15.396-11.731 19.019-34.88 19.665-69.742 39.354-104.616 59.019-7.106 4.063-16.356 3.75-23.24-.646-10.457-6.062-20.932-12.094-31.39-18.15-2.137-1.274-4.546-2.288-6.055-4.36 1.334-1.798 3.719-2.022 5.657-2.807 4.365-1.388 8.374-3.616 12.384-5.778 1.014-.694 2.252-.428 3.224.193 8.942 5.127 17.805 10.403 26.777 15.481 1.914 1.105 3.852-.362 5.488-1.274 34.228-19.345 68.498-38.617 102.72-57.968 1.268-.61 1.969-1.956 1.866-3.345.024-39.245.006-78.497.012-117.742.145-1.576-.767-3.025-2.192-3.67-34.759-19.575-69.5-39.18-104.253-58.76a3.621 3.621 0 0 0-4.094-.006C91.2 39.257 56.465 58.88 21.712 78.454c-1.42.646-2.373 2.071-2.204 3.653.006 39.245 0 78.497 0 117.748a3.329 3.329 0 0 0 1.89 3.303c9.274 5.259 18.56 10.481 27.84 15.722 5.228 2.814 11.647 4.486 17.407 2.33 5.083-1.823 8.646-7.01 8.549-12.407.048-39.016-.024-78.038.036-117.048-.127-1.732 1.516-3.163 3.2-3 4.456-.03 8.918-.06 13.374.012 1.86-.042 3.14 1.823 2.91 3.568-.018 39.263.048 78.527-.03 117.79.012 10.464-4.287 21.85-13.966 26.97-11.924 6.177-26.662 4.867-38.442-1.056-10.198-5.09-19.93-11.097-29.947-16.55C5.368 215.886.555 208.357.604 200.466V81.497c-.073-7.74 4.504-15.197 11.29-18.85C46.768 42.966 81.636 23.27 116.504 3.58z" />
                            <path
                                d="M146.928 85.99c15.21-.979 31.493-.58 45.18 6.913 10.597 5.742 16.472 17.793 16.659 29.566-.296 1.588-1.956 2.464-3.472 2.355-4.413-.006-8.827.06-13.24-.03-1.872.072-2.96-1.654-3.195-3.309-1.268-5.633-4.34-11.212-9.642-13.929-8.139-4.075-17.576-3.87-26.451-3.785-6.479.344-13.446.905-18.935 4.715-4.214 2.886-5.494 8.712-3.99 13.404 1.418 3.369 5.307 4.456 8.489 5.458 18.33 4.794 37.754 4.317 55.734 10.626 7.444 2.572 14.726 7.572 17.274 15.366 3.333 10.446 1.872 22.932-5.56 31.318-6.027 6.901-14.805 10.657-23.56 12.697-11.647 2.597-23.734 2.663-35.562 1.51-11.122-1.268-22.696-4.19-31.282-11.768-7.342-6.375-10.928-16.308-10.572-25.895.085-1.619 1.697-2.748 3.248-2.615 4.444-.036 8.888-.048 13.332.006 1.775-.127 3.091 1.407 3.182 3.08.82 5.367 2.837 11 7.517 14.182 9.032 5.827 20.365 5.428 30.707 5.591 8.568-.38 18.186-.495 25.178-6.158 3.689-3.23 4.782-8.634 3.785-13.283-1.08-3.925-5.186-5.754-8.712-6.95-18.095-5.724-37.736-3.647-55.656-10.12-7.275-2.571-14.31-7.432-17.105-14.906-3.9-10.578-2.113-23.662 6.098-31.765 8.006-8.06 19.563-11.164 30.551-12.275z" />
                        </g>
                    </svg>
                </div>

                <div class="w-full p-6 space-y-6 duration-300 transform rounded shadow-lg hover:bg-gray-100">
                    <h2 class="text-lg font-medium text-center text-gray-900 sm:text-xl title-font">Electron</h2>
                    <svg class="" fill="none" height="100" width="100" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 353 381">
                        <g fill="#2dd0ed">
                            <path
                                d="M124.561 82.06c-49.756-9.062-89.097.425-104.776 27.579-11.7 20.263-8.36 47.133 8.106 75.854a5.102 5.102 0 0 0 6.967 1.89 5.107 5.107 0 0 0 1.89-6.968c-14.834-25.869-17.725-49.058-8.125-65.674 13.023-22.558 48.11-31.02 94.106-22.641a5.105 5.105 0 0 0 5.976-6.103 5.105 5.105 0 0 0-4.149-3.936zM53.765 220.4c20.117 22.11 46.255 42.847 76.064 60.059 72.173 41.67 149.009 52.808 186.875 26.987a5.103 5.103 0 0 0-5.747-8.432c-33.892 23.11-106.88 12.529-176.025-27.393-28.921-16.699-54.229-36.777-73.618-58.086a5.108 5.108 0 0 0-5.538-1.437 5.103 5.103 0 0 0-2.011 8.302z" />
                            <path
                                d="M304.629 214.194c32.578-38.486 43.955-77.197 28.31-104.297-11.513-19.94-35.854-30.468-68.198-30.888a5.106 5.106 0 0 0-5.171 5.034 5.092 5.092 0 0 0 3.087 4.756 5.104 5.104 0 0 0 1.948.415c29.091.376 50.063 9.448 59.497 25.786 12.993 22.51 2.851 57.031-27.261 92.603a5.098 5.098 0 0 0 .535 7.264 5.11 5.11 0 0 0 7.253-.673zM220.903 83.76c-29.458 6.313-60.81 18.652-90.918 36.035C55.474 162.813 6.87 226.24 13.623 272.236a5.102 5.102 0 1 0 10.093-1.484c-5.991-40.835 40.078-100.962 111.367-142.119 29.209-16.865 59.57-28.809 87.959-34.898a5.104 5.104 0 0 0-2.139-9.975z" />
                            <path
                                d="M100.195 304.121c17.041 47.559 44.903 76.846 76.241 76.846 22.851 0 43.994-15.576 60.483-43.003a5.109 5.109 0 0 0 .68-3.919 5.1 5.1 0 0 0-8.096-2.877c-.54.419-.99.941-1.324 1.537-14.82 24.649-33.023 38.062-51.743 38.062-26.026 0-50.884-26.123-66.631-70.088a5.115 5.115 0 0 0-2.611-2.972 5.12 5.12 0 0 0-1.953-.505 5.109 5.109 0 0 0-5.375 4.929 5.105 5.105 0 0 0 .334 1.99zm155.596-9.307c8.818-28.173 13.55-60.683 13.55-94.56 0-84.522-29.58-157.388-71.719-176.099a5.103 5.103 0 0 0-4.141 9.326c37.583 16.69 65.66 85.84 65.66 166.773 0 32.861-4.59 64.346-13.086 91.514a5.092 5.092 0 0 0 .28 3.953 5.103 5.103 0 0 0 9.456-.907zm96.089-4.995a24.419 24.419 0 1 0-48.837.001 24.419 24.419 0 0 0 48.837-.001zm-10.205 0a14.217 14.217 0 0 1-14.214 14.214 14.213 14.213 0 1 1 14.214-14.214zM25.059 314.238a24.416 24.416 0 0 0 24.419-24.419 24.417 24.417 0 0 0-24.42-24.419A24.417 24.417 0 0 0 .64 289.819a24.417 24.417 0 0 0 24.419 24.419zm0-10.205a14.217 14.217 0 1 1 0-28.434 14.217 14.217 0 0 1 0 28.434z" />
                            <path
                                d="M176.436 49.063a24.415 24.415 0 0 0 22.56-15.075A24.422 24.422 0 0 0 176.436.225a24.417 24.417 0 0 0-17.267 41.685 24.418 24.418 0 0 0 17.267 7.152zm0-10.206a14.217 14.217 0 0 1-13.132-8.774 14.201 14.201 0 0 1 0-10.879 14.207 14.207 0 0 1 7.692-7.692 14.216 14.216 0 1 1 5.44 27.35zm3.73 178.672a17.677 17.677 0 0 1-13.306-2.421 17.67 17.67 0 0 1 5.845-32.125 17.674 17.674 0 0 1 20.738 13.597 17.674 17.674 0 0 1-13.277 20.944z" />
                        </g>
                    </svg>
                </div>

                <div class="w-full p-6 space-y-6 duration-300 transform rounded shadow-lg hover:bg-gray-100">
                    <h2 class="text-lg font-medium text-center text-gray-900 sm:text-xl title-font">Flutter</h2>
                    <svg class="" height="100" viewBox="0 0 77 95" width="100" xmlns="http://www.w3.org/2000/svg">
                        <g fill="none" fill-rule="evenodd">
                            <path d="m48.75 95.97-25.91-25.74 14.32-14.57 40.39 40.31z" fill="#02539a" />
                            <g fill="#45d1fd">
                                <path d="m22.52 70.25 25.68-25.68h28.87l-39.95 39.95z" fill-opacity=".85" />
                                <path d="m.29 47.85 14.58 14.57 62.2-62.2h-29.02z" />
                            </g>
                        </g>
                    </svg>
                </div>

            </div>

            <a href="{{ route('our-tech') }}"
                class="px-8 py-3 mx-auto font-extrabold text-gray-300 duration-300 ease-in-out transform bg-gray-900 rounded shadow hover:scale-110 hover:underline">
                Explore More
            </a>
        </div>
    </section>



    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-col w-full mb-12 text-center">
                <h2 class="w-full my-2 text-3xl font-black leading-tight text-center text-white">
                    Subscribe to our Newsletter
                </h2>
                <p class="mx-auto text-base leading-relaxed text-white lg:w-2/3">In Molabs, we write to our friends
                    every few weeks with new interresting stuff.</p>
            </div>

            <div>
                <form
                    class="flex flex-col items-end w-full px-8 mx-auto space-y-4 lg:w-2/3 sm:flex-row sm:space-x-4 sm:space-y-0 sm:px-0"
                    name="email-list" method="POST" action="{{ route('email-list') }}">
                    @csrf
                    <div class="relative flex-grow w-full">
                        <label for="full-name" class="text-sm leading-7 text-gray-100">Full Name</label>
                        <input type="text" id="name" name="name"
                            class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none focus:border-indigo-500 focus:bg-transparent focus:ring-2 focus:ring-indigo-200">
                    </div>
                    <div class="relative flex-grow w-full">
                        <label for="email" class="text-sm leading-7 text-gray-100">Email</label>
                        <input type="email" id="email" name="email"
                            class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none focus:border-indigo-500 focus:bg-transparent focus:ring-2 focus:ring-indigo-200">
                    </div>
                    <button type="submit"
                        class="px-8 py-2 mx-auto font-extrabold text-gray-800 duration-300 ease-in-out transform bg-gray-200 rounded shadow hover:scale-110 hover:underline">Subscribe</button>
                </form>
            </div>

        </div>
    </section>

    <!--Footer-->
    <footer class="bg-white ">
        <div class="container px-8 mx-auto mt-8">
            <div class="flex flex-col w-full py-6 md:flex-row">
                <div class="flex-1 mb-6">
                    <a class="text-2xl font-bold text-orange-600 no-underline hover:no-underline lg:text-4xl" href="#">
                        <svg class="inline-block w-6 h-6 " fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                            </path>
                        </svg>
                        Molabs
                    </a>
                </div>

                <div class="flex-1">
                    <p class="font-extrabold text-gray-500 uppercase md:mb-6">Links</p>
                    <ul class="mb-6 list-reset">
                        <li class="inline-block mt-2 mr-2 md:block md:mr-0">
                            <a href="#"
                                class="font-light text-gray-800 no-underline hover:underline hover:text-orange-500">FAQ</a>
                        </li>
                        <li class="inline-block mt-2 mr-2 md:block md:mr-0">
                            <a href="#"
                                class="font-light text-gray-800 no-underline hover:underline hover:text-orange-500">Help</a>
                        </li>
                        <li class="inline-block mt-2 mr-2 md:block md:mr-0">
                            <a href="#"
                                class="font-light text-gray-800 no-underline hover:underline hover:text-orange-500">Support</a>
                        </li>
                    </ul>
                </div>
                <div class="flex-1">
                    <p class="font-extrabold text-gray-500 uppercase md:mb-6">Legal</p>
                    <ul class="mb-6 list-reset">
                        <li class="inline-block mt-2 mr-2 md:block md:mr-0">
                            <a href="#"
                                class="font-light text-gray-800 no-underline hover:underline hover:text-orange-500">Terms</a>
                        </li>
                        <li class="inline-block mt-2 mr-2 md:block md:mr-0">
                            <a href="#"
                                class="font-light text-gray-800 no-underline hover:underline hover:text-orange-500">Privacy</a>
                        </li>
                    </ul>
                </div>
                <div class="flex-1">
                    <p class="font-extrabold text-gray-500 uppercase md:mb-6">Social</p>
                    <ul class="mb-6 list-reset">
                        <li class="inline-block mt-2 mr-2 md:block md:mr-0">
                            <a href="#"
                                class="font-light text-gray-800 no-underline hover:underline hover:text-orange-500">Facebook</a>
                        </li>
                        <li class="inline-block mt-2 mr-2 md:block md:mr-0">
                            <a href="#"
                                class="font-light text-gray-800 no-underline hover:underline hover:text-orange-500">Linkedin</a>
                        </li>
                        <li class="inline-block mt-2 mr-2 md:block md:mr-0">
                            <a href="#"
                                class="font-light text-gray-800 no-underline hover:underline hover:text-orange-500">Twitter</a>
                        </li>
                    </ul>
                </div>
                <div class="flex-1">
                    <p class="font-extrabold text-gray-500 uppercase md:mb-6">
                        Company
                    </p>
                    <ul class="mb-6 list-reset">
                        <li class="inline-block mt-2 mr-2 md:block md:mr-0">
                            <a href="#"
                                class="font-light text-gray-800 no-underline hover:underline hover:text-orange-500">Official
                                Blog</a>
                        </li>
                        <li class="inline-block mt-2 mr-2 md:block md:mr-0">
                            <a href="#"
                                class="font-light text-gray-800 no-underline hover:underline hover:text-orange-500">About
                                Us</a>
                        </li>
                        <li class="inline-block mt-2 mr-2 md:block md:mr-0">
                            <a href="#"
                                class="font-light text-gray-800 no-underline hover:underline hover:text-orange-500">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="flex items-center justify-center">

            <a href="https://www.upwork.com/workwith/mellaouimohamed" class="inline-flex px-2 pt-6 text-blue-500">Built
                with
                <svg fill="#e53e3e" viewBox="0 0 24 24" class="w-5 h-5 pt-px mx-1 text-red-600" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                </svg>by Mohammed Elghazali Mellaoui.</a>
        </div>

    </footer>

    <script>
        /*Toggle dropdown list*/
        /*https://gist.github.com/slavapas/593e8e50cf4cc16ac972afcbad4f70c8*/

        var navMenuDiv = document.getElementById("nav-content");
        var navMenu = document.getElementById("nav-toggle");


        var i = 0;
        var txt = "Hi this is Innova software company"; /* The text */
        var speed = 50; /* The speed/duration of the effect in milliseconds */

        var fadeitems = document.querySelectorAll('#fade-in');

        var slideitems = document.querySelectorAll("#from-left");

        var options = {
            threshold: 0,
            rootMargin: "0px 0px -250px 0px"
        };
        var appearOnscroll = new IntersectionObserver(function(entries, appearOnscroll) {
            entries.forEach(entry => {
                if (!entry.isIntersecting) {
                    return;
                } else {
                    entry.target.classList.add('appear');
                    appearOnscroll.unobserve(entry.target);
                }
            })
        }, options);

        fadeitems.forEach(fade => {
            appearOnscroll.observe(fade);
        });

        slideitems.forEach(slider => {
            appearOnscroll.observe(slider);
        })


        const event = new Event('move');

        let el = document.getElementById('tech');

        //Listen for the event

        addEventListener('move', function(e) {
            document.querySelector("tech").scrollIntoView({
                behavior: 'smooth'
            });
        }, false);

        // Dispatch the event.
        function scrollTodiv() {
            el.scrollIntoView({
                behavior: 'smooth'
            });

        }

        /*splash screen*/
    </script>

</x-guest-layout>
