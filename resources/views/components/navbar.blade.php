<nav class="relative py-6 mb-12 md:mb-24 bg-transparent z-50">
  <div class="container px-4 mx-auto">
      <div class="flex items-center relative">
          <a class="inline-block text-lg font-bold" href="{{ route('home') }}">
              <img class="h-10" src="{{ Vite::asset('resources/assets/logos/logo-saturn-dark.svg') }}"
                  alt="" width="auto"></a>
          <div class="xl:hidden ml-auto">
              <button
                  class="navbar-burger flex w-12 h-12 items-center justify-center bg-gray-100 hover:bg-gray-200 rounded-md transition duration-200">
                  <svg width="24" height="24" viewbox="0 0 24 24" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path d="M3 12H21" stroke="black" stroke-width="2" stroke-linecap="round"
                          stroke-linejoin="round"></path>
                      <path d="M3 6H21" stroke="black" stroke-width="2" stroke-linecap="round"
                          stroke-linejoin="round"></path>
                      <path d="M3 18H21" stroke="black" stroke-width="2" stroke-linecap="round"
                          stroke-linejoin="round"></path>
                  </svg></button>
          </div>
          <ul
              class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 hidden xl:flex lg:w-auto lg:space-x-12">
              <li><a class="inline-block text-sm text-gray-900 hover:text-vermilion-500 font-medium"
                      href="#features">Features</a></li>
              <li><a class="inline-block text-sm text-gray-900 hover:text-vermilion-500 font-medium"
                      href="#about">About Us</a></li>
              <li><a class="inline-block text-sm text-gray-900 hover:text-vermilion-500 font-medium"
                      href="#reviews">Reviews</a></li>
              <li><a class="inline-block text-sm text-gray-900 hover:text-vermilion-500 font-medium"
                      href="#faq">FAQ</a></li>
          </ul>
          <div class="hidden xl:block ml-auto">
              <div class="flex items-center">
                  <a class="inline-block mr-9 text-sm font-semibold text-vermilion-500 hover:text-gray-900"
                      href="{{ route('login') }}">Sign In</a>
                  <x-ui.button 
                  href="{{ route('signup') }}"
                  style="secondary" 
                  size="md" 
                  bg-hover="bg-vermilion-500" 
                  class="rounded-lg">
                      Create an account
                  </x-ui.button>
              </div>
          </div>
      </div>
  </div>
</nav>