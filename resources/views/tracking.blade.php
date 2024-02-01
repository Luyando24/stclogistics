<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @include('partials.style')
  
</head>
<body class="bg-gray-100">
<!--NAVBAR-->
@include('partials.nav')
<!--END NAVBAR-->

<!--BANNER-->
@include('partials.banner')
<!--END BANNER-->

<!--TRACKING FORM-->
@include('partials.tracking')
<!--END TRACKING FORM-->



<!--Shipment status-->
<ol class="bg-white my-3 px-5 mx-auto justify-center md:w-2/4 rounded-md z-20 relative content-center py-5 border-s border-gray-200 dark:border-gray-700">                  
    @foreach($shipments as $update)
    <li class="ms-4" style="margin-top:8px">
        <div class="absolute mx-5 w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
        <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">{{$update->created_at}}</time>
        <h3 class="text-md font-semibold text-gray-900 dark:text-white">{{$update->status}} ({{$update->location}})</h3>
        <p class="text-base font-normal text-gray-500 dark:text-gray-400">{{$update->description}}</p>
    </li>
    @endforeach
</ol>





<!--FOOTER-->
@include('partials.footer')
<!--END FOOTER-->
</div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
</html>