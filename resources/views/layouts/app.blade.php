<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
        @guest
        <header class="bg-white shadow">
            <nav class="flex items-center justify-between p-6 mx-auto max-w-7xl lg:px-8" aria-label="Global">
              <div class="flex lg:flex-1">
                <a href="#" class="-m-1.5 p-1.5">
                  <span class="sr-only">Your Company</span>
                  <img class="w-auto h-8" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="">
                </a>
              </div>
              <div class="hidden lg:flex lg:gap-x-12">
                <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Features</a>
                <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Marketplace</a>
                <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Company</a>
                @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">Home</a>
                        @else
                            <a href="{{ route('login') }}" class="font-semibold @if(Route::currentRouteName() == 'login') text-blue-600 @else text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white @endif">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 font-semibold @if(Route::currentRouteName() == 'register') text-blue-600 @else text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white @endif">Register</a>
                            @endif
                        @endauth
                @endif
              </div>
            </nav>
          </header>
        @else
        <header class="bg-white shadow">
            <nav class="flex items-center justify-between p-6 mx-auto max-w-7xl lg:px-8" aria-label="Global">
              <div class="flex lg:flex-1">
                <a href="#" class="-m-1.5 p-1.5">
                  <span class="sr-only">Your Company</span>
                  <img class="w-auto h-8" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="">
                </a>
              </div>
              <div class="hidden lg:flex lg:gap-x-12">

                <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Features</a>
                <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Marketplace</a>
                <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Company</a>
                @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">Home</a>
                        @else
                            <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">Register</a>
                            @endif
                        @endauth
                @endif
              </div>
            </nav>
          </header>
        @endguest

        @yield("content")
</body>
</html>
