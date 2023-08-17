<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="ETDEL is an online food ordering and delivery platform developed by Ethipian for Ethipian. You can order from your favorite restaurant and also groceries, flower shop and more" >

        <title>{{config('app.name')}}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <style>


            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased bg-gradient-to-r from-orange-50 font-brand ">
        
        <div class=" w-full h-screen ">
            <img src="{{asset('images/link.png')}}" class=" w-full h-4/5 object-cover shadow-lg" alt="">

            <div class="absolute left-0 top-1/3 w-full flex justify-evenly  ">
                <div class="sm:max-w-4xl max-w-2xl ">

                    <h3 class="sm:text-6xl text-4xl text-center font-bold text-etdel-brand">
                        Url shortning My by Abduselam Hafiz. 
                    </h3>
                </div>
            </div>

            <nav class=" bg-white shadow-md opacity-100 fixed z-20 flex sm:justify-between justify-between items-center top-0 left-0 w-full   px-5  py-3 ">
                
                <div class="flex items-center">
                    <h3 class="sm:text-4xl text-xl text-etdel-brand font-bold">Url shortning</h3>
                </div>
                
                <div class=" flex justify-between items-center">
                    @auth
                        <div class=" md:block hidden mx-2 px-4 py-1 hover:bg-gray-200 hover:text-gray-700 font-semibold text-gray-600 rounded-xl">
                            <a href="/admin" class="focus:outline-none focus:outline-etdel-brand rounded-md">Admin board</a>
                        </div>
                    @endauth

                    @guest
                        <div class=" md:block hidden mx-2 px-4 py-1 hover:bg-gray-200 hover:text-gray-700 font-semibold text-gray-600 rounded-xl">
                            <a href="{{route('filament.auth.login')}} " class="focus:outline-none focus:outline-etdel-brand rounded-md">Sign Up</a>
                        </div>
                    @endguest
                    
                </div>
            </nav>

            

            <div class="my-20 mx-2">

                <div class="block sm:flex justify-between my-5">
                    <div class="h-full my-auto ">
                        <h3 class="text-gray-800 text-center text-5xl font-semibold pb-3"> 
                            It's All in your hand
                        </h3>
                        <p class="text-center text-gray-700 font-medium text-lg pb-2">
                            With simple and manageable way we can make your shorten your web address.

                        </p>
                        
                        <p  class=" text-center mb-5 sm:mb-0">
                            <a href="" class="bg-etdel-brand py-1 px-8 rounded-xl text-white outline-brand">Find out</a>
                        </p>
                    </div>
                    <div class="w-full flex justify-evenly">
                        <img src="{{asset('images/url-shortener.jpg')}}" class="w-4/5 object-cover rounded-tl-2xl rounded-br-2xl sm:rounded-tl-3xl sm:rounded-br-2xl" alt="Picture of foods">
                    </div>
                </div>

                <div class="block sm:flex justify-between my-5">
                    <div class=" block sm:hidden h-full my-auto mb-5 sm:mb-0">
                        <h3 class="text-gray-800 text-center text-5xl font-semibold pb-3"> 
                            It's All in your hand
                        </h3>
                        <p class="text-center text-gray-700 font-medium text-lg pb-2">
                             With simple and manageable way we can make your shorten your web address.

                        </p>
                        
                        <p  class=" text-center ">
                            <a href="#" class="bg-etdel-brand py-1 px-8 rounded-xl text-white outline-brand">Find out</a>
                        </p>                    
                    </div>
                    <div class="w-full flex justify-evenly">
                        <img src="{{asset('images/scissor.jpg')}}" class="w-4/5 object-cover rounded-tr-2xl rounded-bl-2xl sm:rounded-tr-3xl sm:rounded-bl-2xl" alt="Picture of people gathering in restaurant">
                    </div>

                    <div class=" hidden sm:block h-full my-auto">
                        <h3 class="text-gray-800 text-center text-5xl font-semibold pb-3"> 
                            It's All in your hand
                        </h3>
                        <p class="text-center text-gray-700 font-medium text-lg pb-2">
                            With simple and manageable way we can make your shorten your web address.

                        </p>
                        
                        <p  class=" text-center  ">
                            <a href="" class="bg-etdel-brand py-1 px-8 rounded-xl text-white outline-brand">Find out</a>
                        </p>                    
                    </div>
                </div>

            </div>
            
            <div id="map" class="w-full">
                <div class="w-full px-5 py-5 text-center bg-gray-50  flex justify-center">
    <div>
        <span class="text-center text-gray-500 font-semibold">All right reserved &copy; Abduselam</span>
        
        <div class="flex justify-center pt-3">
            <a class="px-2" href="https://t.me/abdu_curry" target="_blank" >
                <img src="{{asset('images/social/Telegram.svg')}}"  class="w-7 h-7" alt="Telegram" >
                {{-- <img src="" alt=""> --}}
            </a>
            <a class="px-2" href="https://github.com/abduselam1" target="_blank">
                <img src="{{asset('images/social/GitHub.svg')}}"  class="w-7 h-7" alt="Telegram" >
                {{-- <img src="" alt=""> --}}
            </a>
            <a class="px-2" href="https://www.instagram.com/abduselamhafiz/" target="_blank">
                <img src="{{asset('images/social/Instagram.svg')}}"  class="w-7 h-7" alt="Telegram" >
                {{-- <img src="" alt=""> --}}
            </a>
            
                </div>
        </div>
        
        
        
    </body>
</html>
