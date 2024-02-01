<nav class="bg-white border-gray-200 py-2">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    <a href="https://flowbite.com/" class="flex items-center">
        <img src="logo.png" class=" mr-3" alt="Flowbite Logo" />
        <span class="self-center text-2xl font-semibold whitespace-nowrap"></span>
    </a>
    <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="navbar-default" aria-expanded="false">
      <span class="sr-only">Open main menu</span>
      <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
    </button>
    <div class="hidden w-full md:block md:w-auto" id="navbar-default">
      <ul class="font-medium flex flex-col md:p-0 mt-4rounded-lg md:flex-row md:space-x-8 md:mt-0">
        <li>
          <a href="#" class="block py-2 pl-3 pr-4 bg-blue-700 rounded md:bg-transparent md:p-0 text-gray-950" aria-current="page">Home</a>
        </li>
        <li>
          <a href="{{url('/destinations')}}" class="block py-2 pl-3 pr-4 text-gray-900 hover:text-red-500 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-red-600 md:p-0  md:dark:hover:text-blue-500 md:dark:hover:bg-transparent">Destinations</a>
        </li>
        <li>
          <a href="{{url('/track_parcel')}}" class="block py-2 pl-3 pr-4 text-gray-900 hover:text-red-500 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-red-600 md:p-0  md:dark:hover:text-blue-500 md:dark:hover:bg-transparent">Tracking</a>
        </li>
        <li>
          <a href="#" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-red-600 md:p-0 md:dark:hover:text-blue-500 md:dark:hover:bg-transparent">Help</a>
        </li>
        
        <li>
        @if(Auth::id())
          <a href="{{url('/ship')}}" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-red-600 md:p-0 md:dark:hover:text-blue-500 md:dark:hover:bg-transparent">Ship Now</a>
        @else
          <a href="{{url('/login')}}" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-red-600 md:p-0 md:dark:hover:text-blue-500 md:dark:hover:bg-transparent">Submit parcel</a>
        @endif
        </li>
      
        <li>
          <a href="#" class="block py-2 pl-3 pr-4 text-regray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-red-600 md:p-0 md:dark:hover:text-blue-500 md:dark:hover:bg-transparent">Orders</a>
        </li>
        <li>
        @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                    @auth
                        <li><a href="{{ url('/user/profile') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Profile</a></li>
                    @else
                        <li><a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a></li>

                        @if (Route::has('register'))
                            <li><a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a></li>
                        @endif
                    @endauth
                </div>
            @endif
        </li>
      </ul>
    </div>
  </div>
</nav>