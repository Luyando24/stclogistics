<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @include('partials.style')
  
</head>
<body class="bg-gray-80">
<!--NAVBAR-->
@include('partials.nav')
<!--END NAVBAR-->


<!--TRACKING FORM-->
<div class="my-10"></div>
@include('partials.tracking')
<div class="text-center my-8 mx-8">
<div class="text-lg text-red" style="color:red;">Shipment Not Found!</div>
<p class="font-red">The provided tracking number does not match any shipment records.</p>
</div>
<!--END TRACKING FORM-->


<!--INTRODUCTION-->

<!--END INTRODUCTION-->




<!--COMPANY VIDEO
<section class="my-12 w-full">
<iframe class="w-full" height="538" src="https://www.youtube.com/embed/WH7QFi9UpbA" title="Amazing Process of Making Kitchenware with Silicone. Korea Cookware Factory" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
</section>
-->

<!--PROJECTS-->

<!--END PROJECTS-->







<!--FOOTER-->
@include('partials.footer')
<!--END FOOTER-->
</div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
</html>