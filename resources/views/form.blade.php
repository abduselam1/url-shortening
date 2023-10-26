<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
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
<body class="bg-gray-100">
    {{-- Navigation --}}
    <div class="flex justify-center py-3 bg-white">
        <div class="flex justify-center">
            <a class="text-gray-600 font-semibold px-5 py-1 text-lg hover:bg-gray-200 rounded-lg transform duration-500 ease-in-out" href="">Dashboard</a>
            <a class="text-gray-600 font-semibold px-5 py-1 text-lg hover:bg-gray-200 rounded-lg transform duration-500 ease-in-out" href="">Url</a>
            <a class="text-gray-600 font-semibold px-5 py-1 text-lg hover:bg-gray-200 rounded-lg transform duration-500 ease-in-out" href="">Profile</a>
        </div>
    </div>

    {{-- Body --}}
    <div class="mt-10 bg-white p-5 mx-auto max-w-3xl rounded">
        <h1 class="text-2xl font-bold text-gray-800">Create Url</h1>

        <form action="" class="pt-10">
            <div class="flex items-center">

                <div class="mt-3 w-full pr-2">
                    <label class="font-semibold text-gray-500 " for="destination" >Destination Url <sup class="text-sm text-red-300">*</sup></label>
                    <input type="text" id="destination" class="mt-2 text-gray-600 outline-none outline-gray-200 focus:outline-blue-500 rounded-lg px-2 py-1 w-full">
                </div>

                <div class="mt-3 w-full pl-2">
                    <label class="font-semibold text-gray-500 " for="expiration" >Expiration Date</label>
                    <input type="date" id="expiration" class="mt-2 text-gray-600 outline-none outline-gray-200 focus:outline-blue-500 rounded-lg px-2 py-1 w-full">
                </div>

                {{-- buttons --}}
                
                
            </div>
            <div class="flex pt-10 pb-5">
                <button class="px-3 py-1 text-white bg-blue-500 font-semibold rounded-lg">Create</button>
                <button class="mx-1 px-3 py-1 text-gray-600 border border-gray-300 font-semibold rounded-lg">Create & Create another</button>
            </div>
        </form>
    </div>
    
</body>
</html>