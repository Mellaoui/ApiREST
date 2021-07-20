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

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>

        <style>
            @import url("https://rsms.me/inter/inter.css");
            html {
              font-family: "Inter", -apple-system, BlinkMacSystemFont, "Segoe UI",
                Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif,
                "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol",
                "Noto Color Emoji";
            }

            #header{
              --background: transparent;
                position: fixed;
                top: 0;
                left: 0;
                right: 0;
                z-index: 0;
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding: 2em 3em;
                transition: background 250ms ease-in;
                background: var(--background);
                color: var(--text);
            }

            #logo{
              color: azure;
            }

            #logo.active{
              color: #333;
            }

            #header.active{
              --text: #333;
              --text-inverse: #f4f4f4;
              --background: #f4f4f4;
                box-shadow: 0 3px 20px rgba(0, 0, 0, 0.2);
                z-index: 999;

            }

            #navcontent{
              list-style: none;
              color: #f4f4f4;
              margin: 0;
              padding: 0;
              display: flex;

            }
            #responsive{
              list-style: none;
              color: #f4f4f4;
              margin: 0;
              padding: 0;
              display: flex;
            }
            #navcontent.active{
              color: rgb(19, 18, 18);
            }

            #responsive.active{
              color: rgb(19, 18, 18);
            }
            #nav-link{
              --spacing: 1em;
                text-decoration: none;
                color: inherit;
                display: inline-block;
                padding: calc(var(--spacing) / 2) var(--spacing);
                position: relative;
                text-transform: uppercase;
                letter-spacing: 2px;
                font-size: 0.9rem;
            }

            #nav-link::after{
              content: "";
              position: absolute;
              bottom: 0;
              left: var(--spacing);
              right: var(--spacing);
              height: 2px;
              background: currentColor;
              -webkit-transform: scaleX(0);
                      transform: scaleX(0);
              transition: -webkit-transform 150ms ease-in-out;
              transition: transform 150ms ease-in-out;
              transition: transform 150ms ease-in-out, -webkit-transform 150ms ease-in-out
            }

            #nav-link:hover::after{
              -webkit-transform: scaleX(1);
                      transform: scaleX(1);
            }

            #fade-in{
              opacity: 0;
              transition: 500ms ease-in;
            }

            #fade-in.appear{
              opacity: 1;
            }

            #from-left{
              transform: translateX(-50%);
              transition: 500ms ease-in;
              opacity: 0;
            }

            #from-left.appear{
              transform: translate(0);
              opacity: 1;
            }

            #offer.li{
              color: aliceblue;
            }

            .gradient {
              background-image: linear-gradient(189deg, rgba(2,0,36,1) 0%, rgba(78,160,177,1) 100%);
            }

            .button,
            .gradient2 {
              background-color: #f39f86;
              background-image: linear-gradient(315deg, #f39f86 0%, #f9d976 74%);
            }
            .gradient2 {
              background-color: #f39f86;
              background-image: linear-gradient(315deg, #f39f86 0%, #f9d976 74%);
            }
            /* Browser mockup code
            * Contribute: https://gist.github.com/jarthod/8719db9fef8deb937f4f
            * Live example: https://updown.io
            */

            .browser-mockup {
              border-top: 2em solid rgba(230, 230, 230, 0.7);
              position: relative;
              height: 60vh;
            }

            .browser-mockup:before {
              display: block;
              position: absolute;
              content: "";
              top: -1.25em;
              left: 1em;
              width: 0.5em;
              height: 0.5em;
              border-radius: 50%;
              background-color: #f44;
              box-shadow: 0 0 0 2px #f44, 1.5em 0 0 2px #9b3, 3em 0 0 2px #fb5;
            }

            .browser-mockup > * {
              display: block;
            }

            /*splash screen*/


          </style>
    </head>
    <body x-data="{ showModal: false }" class="flex flex-col leading-relaxed tracking-wide gradient" style="overflow:scroll">
        <div class="font-sans antialiased text-gray-900 main">
            {{ $slot }}
        </div>
    </body>
</html>
