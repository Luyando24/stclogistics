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
    <section class="flex justify-center items-center bg-opacity-50 bg-[url('/public/lg.jpeg')] bg-contain text-center bannerSize text-4xl font-bold text-gray-50">
        Shipping Rates
    </section>

    <section class="mx-auto max-w-screen-xl py-10">
        <span class="text-gray-400 text-lg">Home</span> > Shipping rates
    </section>

    
    <section class="flex bg-blue-400 px-6 py-6 justify-between">
        <div class="font-bold text-lg">SEA CARGO</div>
        <div class="">Duration: 40 - 50 DAYS</div>
        </section>
    <div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left text-gray-500">
        <thead class="text-xs text-gray-700 uppercase bg-gray-100">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Country
                </th>
                <th scope="col" class="px-6 py-3">
                    0.1cbm - 1cbm
                </th>
                <th scope="col" class="px-6 py-3">
                    1cbm - 2cbm
                </th>
                <th scope="col" class="px-6 py-3">
                    2cbm - 8cbm
                </th>
                <th scope="col" class="px-6 py-3">
                    8cbm or more
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $searate)
            <tr class="bg-white border-b">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                    {{$searate->country}}
                </th>
                <td class="px-6 py-4">
                    ${{$searate->first_cbm}}
                </td>
                <td class="px-6 py-4">
                    ${{$searate->second_cbm}}
                </td>
                <td class="px-6 py-4">
                    ${{$searate->third_cbm}}
                </td>
                <td class="px-6 py-4">
                    ${{$searate->fourth_cbm}}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>



        @include('partials.quote')
        @include('partials.footer')
        
        <script src="" async defer></script>
    </body>
</html>