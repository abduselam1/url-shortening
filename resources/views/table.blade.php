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
        <h1 class="text-2xl font-bold text-gray-800">URLs</h1>

        <div class=" max-w-3xl bg-white border-gray-200 rounded-xl py-3 pl-5">
            <div class="flex pb-3 justify-end">
                <input type="search" placeholder="Search" class=" text-gray-600 outline-none outline-gray-200 focus:outline-blue-500 rounded-lg px-2 py-1" name="" id="">
            </div>

            {{-- <div class="w-full overflow-x-auto">
                <table class="w-full divide-y overflow-x-auto">
                    <thead class="">
                        <tr class="bg-gray-500/5">
                            <td class=" box-border text-gray-700">Destination</td>
                            <td class=" box-border text-gray-700">Shortened url</td>
                            <td class=" box-border text-gray-700">View count</td>
                            <td class=" box-border text-gray-700">Last accessed url</td>
                            <td class=" box-border text-gray-700">Expired at</td>
                            <td class=" box-border text-gray-700">Actions</td>
                            
                            
                            
                        </tr>
                    </thead>
                    <tbody class=" divide-y whitespace-nowrap">
                        <tr class="hover:bg-gray-50">
                            <td class=""  >
                                     
                                <span class="">http://127.0.0.1/phpmyadmin/index.php?route=/sql&amp;db=url_shortening&amp;table=urls&amp;pos=0</span>

                            </td>
                            <td>
                                <span>API sdkfjasdlkfj asdfkasdjflk</span>
                            </td>
                            <td>
                                <span>23</span>
                            </td>
                            <td>
                                2 days ago
                            </td>
                            <td>with in hours</td>
                            <td>Edit, delete</td>
                        </tr>
                    </tbody>
                </table>
            </div> --}}
            <!-- component -->
<div class="flex flex-col overflow-x-auto">
  <div class="sm:-mx-6 lg:-mx-8">
    <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
      <div class="overflow-x-auto">
        <table class="min-w-full text-left text-sm font-light">
          <thead class="border-b font-medium dark:border-neutral-500">
            <tr>
              <th scope="col" class="px-6 py-4">#</th>
              <th scope="col" class="px-6 py-4">Heading</th>
              <th scope="col" class="px-6 py-4">Heading</th>
              <th scope="col" class="px-6 py-4">Heading</th>
              <th scope="col" class="px-6 py-4">Heading</th>
              <th scope="col" class="px-6 py-4">Heading</th>
              <th scope="col" class="px-6 py-4">Heading</th>
              <th scope="col" class="px-6 py-4">Heading</th>
              <th scope="col" class="px-6 py-4">Heading</th>
            </tr>
          </thead>
          <tbody>
            <tr class="border-b dark:border-neutral-500">
              <td class="whitespace-nowrap px-6 py-4 font-medium">1</td>
              <td class="whitespace-nowrap px-6 py-4">Cell</td>
              <td class="whitespace-nowrap px-6 py-4">Cell</td>
              <td class="whitespace-nowrap px-6 py-4">Cell</td>
              <td class="whitespace-nowrap px-6 py-4">Cell</td>
              <td class="whitespace-nowrap px-6 py-4">Cell</td>
              <td class="whitespace-nowrap px-6 py-4">Cell</td>
              <td class="whitespace-nowrap px-6 py-4">Cell</td>
              <td class="whitespace-nowrap px-6 py-4">Cell</td>
            </tr>
            <tr class="border-b dark:border-neutral-500">
              <td class="whitespace-nowrap px-6 py-4 font-medium ">2</td>
              <td class="whitespace-nowrap px-6 py-4">Cell</td>
              <td class="whitespace-nowrap px-6 py-4">Cell</td>
              <td class="whitespace-nowrap px-6 py-4">Cell</td>
              <td class="whitespace-nowrap px-6 py-4">Cell</td>
              <td class="whitespace-nowrap px-6 py-4">Cell</td>
              <td class="whitespace-nowrap px-6 py-4">Cell</td>
              <td class="whitespace-nowrap px-6 py-4 ">Cell</td>
              <td class="whitespace-nowrap px-6 py-4 ">Cell</td>
            </tr>
            <tr class="border-b ">
              <td class="whitespace-nowrap px-6 py-4 font-medium ">3</td>
              <td class="whitespace-nowrap px-6 py-4">Cell</td>
              <td class="whitespace-nowrap px-6 py-4">Cell</td>
              <td class="whitespace-nowrap px-6 py-4">Cell</td>
              <td class="whitespace-nowrap px-6 py-4">Cell</td>
              <td class="whitespace-nowrap px-6 py-4">Cell</td>
              <td class="whitespace-nowrap px-6 py-4">Cell</td>
              <td class="whitespace-nowrap px-6 py-4">Cell</td>
              <td class="whitespace-nowrap px-6 py-4">Cell</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
        </div>
    </div>
    
</body>
</html>