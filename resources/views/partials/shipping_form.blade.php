<form class="max-w-2xl mx-auto mt-5 mb-5 w-2/3" action="{{url('/new_parcel')}}" method="post" enctype="multipart/form-data">


@csrf

  <div class="bg-white p-5 mb-3 rounded-md">
  <div class="mb-5">
    <label for="text" class="block mb-2 text-sm font-medium text-gray-900">China warehouse address</label>
    <input type="text" id="china_address" name="china_address" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Your warehouse address in China" required>
  </div>
  <div class="mb-5">
    <label for="text" class="block mb-2 text-sm font-medium text-gray-900">Delivery address</label>
    <input type="text" id="china_address" name="destination_address" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Destination address" required>
  </div>
  <div class="mb-5">
    <label for="text" class="block mb-2 text-sm font-medium text-gray-900">Local tracking number</label>
    <input type="text" id="local_tracking_no" name="local_tracking_no" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Tracking number provided by your supplier in China" required>
  </div>
</div>

<div class="bg-white p-5 mb-3 rounded-md">
  <div class="mb-5">
    <label for="text" class="block mb-2 text-sm font-medium text-gray-900">Product info</label>
    <input type="text" id="product_info" name="product_info" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Product name or description" required>
  </div>
  <div class="mb-5">
    <label for="text" class="block mb-2 text-sm font-medium text-gray-900">Quantity</label>
    <input type="number" id="qty" name="qty" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Quantity" required>
  </div>
  <div class="mb-5">
    <label for="text" class="block mb-2 text-sm font-medium text-gray-900">Unit price</label>
    <input type="text" id="product_price" name="product_price" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Price in RMB" required>
  </div>
</div>

  <div class="flex items-start mb-5">
    <div class="flex items-center h-5">
      <input id="terms" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300" required>
    </div>
    <label for="terms" class="ms-2 text-sm font-medium text-gray-900">I agree with the <a href="#" class="text-blue-600 hover:underline">terms and conditions</a></label>
  </div>
  <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Submit</button>
</form>
