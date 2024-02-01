<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Products</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @include('partials.style')

        <style>
            .bannerSize{
                height: 200px;
            }
        </style>
    </head>
    <body>
        @include('partials.nav')
    <section class="flex justify-center items-center bg-opacity-50 bg-[url('/public/bannerbg.jpg')] bg-contain text-center bannerSize text-4xl font-bold text-gray-50">
        Products
    </section>

    <section class="mx-auto max-w-screen-xl py-10">
        <span class="text-gray-400 text-lg">Home</span> > Products
    </section>

    <section class="flex items-start gap-4 mx-auto max-w-screen-xl mb-3">
        <div class="hidden sm:block w-2/6 bg-gray-200">
            <div class="text-2xl font-bold bg-gray-200 my-3 mx-3">Categories</div>
            
<div class="my-3 text-sm font-medium text-gray-900 bg-white border  dark:bg-gray-700 dark:border-gray-600 dark:text-white">
    <button type="button" class="w-full px-4 py-3 font-medium text-left border-b border-gray-200 cursor-pointer hover:bg-gray-100 hover:text-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:border-gray-600 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:ring-gray-500 dark:focus:text-white">
        Rice cookers
    </button>
    <button type="button" class="w-full px-4 py-3 font-medium text-left border-b border-gray-200 cursor-pointer hover:bg-gray-100 hover:text-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:border-gray-600 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:ring-gray-500 dark:focus:text-white">
        Blenders
    </button>
    <button type="button" class="w-full px-4 py-3 font-medium text-left border-b border-gray-200 cursor-pointer hover:bg-gray-100 hover:text-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:border-gray-600 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:ring-gray-500 dark:focus:text-white">
        Air Fryers
    </button>
    <button type="button" class="w-full px-4 py-3 font-medium text-left border-b border-gray-200 cursor-pointer hover:bg-gray-100 hover:text-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:border-gray-600 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:ring-gray-500 dark:focus:text-white">
        Frying pans
    </button>
    
</div>

        </div>
        <div class="w-full sm:w-auto bg-gray-100">
        <div class="grid grid-cols-2 gap-4 md:grid-cols-4 lg:grid-cols-4 py-4 px-4">
        <a href="{{url('/details')}}" class="block h-100 w-100 max-w-sm bg-white border border-gray-200 shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
        <img class="object-cover h-40 w-full" src="ricecooker.jpg">
        <div class="px-4 py-4 text-md text-center">Rice cookers</div>
        </a>

        <a href="#" class="block h-100 w-100 max-w-sm bg-white border border-gray-200 shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
        <img class="object-cover h-40 w-full" src="blender.WEBP">
        <div class="px-4 py-4 text-md text-center">Rice cookers</div>
        </a>

        <a href="#" class="block h-100 w-100 max-w-sm bg-white border border-gray-200 shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
        <img class="object-cover h-40 w-full" src="air.WEBP">
        <div class="px-4 py-4 text-md text-center">Rice cookers</div>
        </a>

        <a href="#" class="block h-100 w-100 max-w-sm bg-white border border-gray-200 shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
        <img class="object-cover h-40 w-full" src="pan.jpg">
        <div class="px-4 py-4 text-md text-center">Rice cookers</div>
        </a>
        <a href="#" class="block h-100 w-100 max-w-sm bg-white border border-gray-200 shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
        <img class="object-cover h-40 w-full" src="blender.WEBP">
        <div class="px-4 py-4 text-md text-center">Rice cookers</div>
        </a>

        <a href="#" class="block h-100 w-100 max-w-sm bg-white border border-gray-200 shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
        <img class="object-cover h-40 w-full" src="air.WEBP">
        <div class="px-4 py-4 text-md text-center">Rice cookers</div>
        </a>

        <a href="#" class="block h-100 w-100 max-w-sm bg-white border border-gray-200 shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
        <img class="object-cover h-40 w-full" src="pan.jpg">
        <div class="px-4 py-4 text-md text-center">Rice cookers</div>
        </a>
        <a href="#" class="block h-100 w-100 max-w-sm bg-white border border-gray-200 shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
        <img class="object-cover h-40 w-full" src="blender.WEBP">
        <div class="px-4 py-4 text-md text-center">Rice cookers</div>
        </a>

        <a href="#" class="block h-100 w-100 max-w-sm bg-white border border-gray-200 shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
        <img class="object-cover h-40 w-full" src="air.WEBP">
        <div class="px-4 py-4 text-md text-center">Rice cookers</div>
        </a>

        <a href="#" class="block h-100 w-100 max-w-sm bg-white border border-gray-200 shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
        <img class="object-cover h-40 w-full" src="pan.jpg">
        <div class="px-4 py-4 text-md text-center">Rice cookers</div>
        </a>
        <a href="#" class="block h-100 w-100 max-w-sm bg-white border border-gray-200 shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
        <img class="object-cover h-40 w-full" src="blender.WEBP">
        <div class="px-4 py-4 text-md text-center">Rice cookers</div>
        </a>

        <a href="#" class="block h-100 w-100 max-w-sm bg-white border border-gray-200 shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
        <img class="object-cover h-40 w-full" src="air.WEBP">
        <div class="px-4 py-4 text-md text-center">Rice cookers</div>
        </a>
        </div>
        </div>
    </section>
    
    
        





        @include('partials.quote')
        @include('partials.footer')
        
        <script src="" async defer></script>
    </body>
</html>