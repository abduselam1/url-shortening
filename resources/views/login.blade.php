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
    
    <div class="mt-10 bg-white rounded px-10 py-5 max-h-full max-w-xl mx-auto">
        <div>
            <h1 class="text-gray-700 ">Url shortening</h1>
        </div>
    </div>

    
    
</body>
</html>