<section>
  <nav class="relative flex items-center justify-between h-20 py-4 px-6 bg-white"><a class="inline-block"
          href="#">
          <img src="{{ Vite::asset('resources/assets/logos/logo-coleos-2.svg') }}" alt=""></a>
      {{-- links --}}
      <div class="hidden lg:flex absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
          <a class="mx-5 font-base font-medium text-rhino-700 hover:text-rhino-400" href="{{ route('affiliate.store') }}"
              contenteditable="false">
              Home
          </a>
          <a class="mx-5 font-base font-medium text-rhino-700 hover:text-rhino-400" href="{{ route('affiliate.products') }}"
              contenteditable="false">
              Collections
          </a>
          <a class="mx-5 font-base font-medium text-rhino-700 hover:text-rhino-400" href="#">
              Contact Us
          </a>
      </div>
      <div class="flex pl-6 items-center">
          <a class="group relative inline-block mr-6" href="#">
              <div
                  class="absolute top-0 right-0 -mt-2 -mr-2 inline-flex h-5 w-5 items-center justify-center rounded-full bg-orange-500 text-white text-xs font-bold">
                  2</div>
              <div class="text-coolGray-400 group-hover:text-coolGray-600">
                  <svg width="24" height="24" viewbox="0 0 24 24" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path
                          d="M9 23C9.55228 23 10 22.5523 10 22C10 21.4477 9.55228 21 9 21C8.44772 21 8 21.4477 8 22C8 22.5523 8.44772 23 9 23Z"
                          stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                      </path>
                      <path
                          d="M20 23C20.5523 23 21 22.5523 21 22C21 21.4477 20.5523 21 20 21C19.4477 21 19 21.4477 19 22C19 22.5523 19.4477 23 20 23Z"
                          stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                      </path>
                      <path
                          d="M1 2H5L7.68 15.39C7.77144 15.8504 8.02191 16.264 8.38755 16.5583C8.75318 16.8526 9.2107 17.009 9.68 17H19.4C19.8693 17.009 20.3268 16.8526 20.6925 16.5583C21.0581 16.264 21.3086 15.8504 21.4 15.39L23 7H6"
                          stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                      </path>
                  </svg>
              </div>
          </a>
          <a class="inline-block mr-6 text-coolGray-400 hover:text-coolGray-600" href="#">
              <svg width="20" height="20" viewbox="0 0 20 20" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path
                      d="M9 17C13.4183 17 17 13.4183 17 9C17 4.58172 13.4183 1 9 1C4.58172 1 1 4.58172 1 9C1 13.4183 4.58172 17 9 17Z"
                      stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                  </path>
                  <path d="M19 19L14.65 14.65" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                      stroke-linejoin="round"></path>
              </svg></a>
          <button class="navbar-burger rtl:mr-5 text-coolGray-400 hover:text-coolGray-600">
              <svg width="24" height="24" viewbox="0 0 24 24" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path d="M3 12H21" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                      stroke-linejoin="round"></path>
                  <path d="M3 6H21" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                      stroke-linejoin="round"></path>
                  <path d="M3 18H21" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                      stroke-linejoin="round"></path>
              </svg></button>
      </div>
  </nav>
  {{-- hidden nav --}}
  <div class="hidden navbar-menu fixed top-0 left-0 bottom-0 w-5/6 max-w-md z-50">
      <div class="navbar-backdrop fixed inset-0 bg-purple-800 opacity-70"></div>
      <nav class="relative flex flex-col pt-12 pb-6 px-8 w-full h-full bg-white overflow-y-auto">
          <div class="flex justify-between mb-12 items-center">
              <a class="inline-block" href="#">
                  <img class="h-8" src="{{ Vite::asset('resources/assets/logos/logo-coleos-2.svg') }}"
                      alt=""></a>
              <a class="navbar-close" href="#">
                  <svg width="24" height="24" viewbox="0 0 24 24" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path d="M6 18L18 6M6 6L18 18" stroke="#252E4A" stroke-width="2" stroke-linecap="round"
                          stroke-linejoin="round"></path>
                  </svg>
              </a>
          </div>
          {{-- search input --}}
          <div class="flex w-full max-w-xs items-center px-6 border border-coolGray-200 rounded-full">
              <input
                  class="h-12 w-full bg-transparent border-0 text-sm text-coolGray-500 placeholder-coolGray-500 outline-none"
                  type="search" placeholder="Search..."><button
                  class="inline-block ml-auto text-coolGray-400 hover:text-rhino-500" type="submit">
                  <svg width="14" height="14" viewbox="0 0 14 14" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path
                          d="M6.33333 11.6667C9.27885 11.6667 11.6667 9.27885 11.6667 6.33333C11.6667 3.38782 9.27885 1 6.33333 1C3.38782 1 1 3.38782 1 6.33333C1 9.27885 3.38782 11.6667 6.33333 11.6667Z"
                          stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                          stroke-linejoin="round"></path>
                      <path d="M13.0001 13L10.1001 10.1" stroke="currentColor" stroke-width="1.5"
                          stroke-linecap="round" stroke-linejoin="round"></path>
                  </svg></button>
          </div>

          <div class="py-12 mb-auto">
              <ul class="flex-col">
                  <li class="mb-12">
                      <a class="inline-flex items-center text-base text-purple-400 hover:text-purple-200"
                          href="#">
                          <span class="text-purple-400">
                              <svg width="18" height="17" viewbox="0 0 18 17" fill="none"
                                  xmlns="http://www.w3.org/2000/svg">
                                  <path
                                      d="M6.99992 15.3333C7.36811 15.3333 7.66658 15.0349 7.66658 14.6667C7.66658 14.2985 7.36811 14 6.99992 14C6.63173 14 6.33325 14.2985 6.33325 14.6667C6.33325 15.0349 6.63173 15.3333 6.99992 15.3333Z"
                                      stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                      stroke-linejoin="round"></path>
                                  <path
                                      d="M14.3334 15.3333C14.7016 15.3333 15.0001 15.0349 15.0001 14.6667C15.0001 14.2985 14.7016 14 14.3334 14C13.9652 14 13.6667 14.2985 13.6667 14.6667C13.6667 15.0349 13.9652 15.3333 14.3334 15.3333Z"
                                      stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                      stroke-linejoin="round"></path>
                                  <path
                                      d="M1.66675 1.33334H4.33341L6.12008 10.26C6.18104 10.5669 6.34802 10.8426 6.59178 11.0389C6.83554 11.2351 7.14055 11.3393 7.45341 11.3333H13.9334C14.2463 11.3393 14.5513 11.2351 14.7951 11.0389C15.0388 10.8426 15.2058 10.5669 15.2667 10.26L16.3334 4.66667H5.00008"
                                      stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                      stroke-linejoin="round"></path>
                              </svg></span>
                          <span class="font-semibold text-rhino-700 ltr:ml-2 rtl:mr-2">Cart</span>
                      </a>
                  </li>
                  <li class="mb-4">
                      <a class="flex items-center text-base font-bold text-rhino-700" href="#">Home</a>
                  </li>
                  <li class="mb-4">
                      <a class="flex items-center text-base font-bold text-rhino-700"
                          href="#">Collections</a>
                  </li>
                  <li class="mb-4">
                      <a class="flex items-center text-base font-bold text-rhino-700" href="#">Contact
                          Us</a>
                  </li>
              </ul>
          </div>
          <div>
              <p class="text-center text-sm text-coolGray-400">
                  COD ART - 2023
              </p>
          </div>
      </nav>
  </div>
  <script>
    const burger_btn = document.querySelector('.navbar-burger');
    const mobile_nav = document.querySelector('.navbar-menu');
    const navbar_close = document.querySelector('.navbar-close');

    burger_btn.addEventListener('click', () => {
        mobile_nav.classList.remove('hidden')
    });

    navbar_close.addEventListener('click', () => {
        mobile_nav.classList.add('hidden')
    })
  </script>
</section>