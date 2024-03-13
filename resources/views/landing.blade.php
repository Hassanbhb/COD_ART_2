<x-layouts.masterLayout title="COD ART">
    {{-- <img src="{{ Vite::asset('resources/assets/logos/logo-saturn-light.svg')}}" alt=""> --}}
    <div class="">

        <section class="relative pb-20 xl:pb-32 overflow-hidden">
            <img class="absolute top-0 left-1/2 transform -translate-x-1/2 ml-24"
                src="{{ Vite::asset('resources/assets/images/headers/center-orange-light.png') }}" alt="">
            <img class="absolute bottom-0 left-0"
                src="{{ Vite::asset('resources/assets/images/headers/blue-light-left-bottom.png') }}" alt="">
            <img class="absolute top-0 right-0 w-52 md:w-auto"
                src="{{ Vite::asset('resources/assets/images/headers/star-background-header.png') }}" alt="">
            <img class="hidden sm:block lg:hidden absolute top-1/2 w-64 sm:w-auto right-0 -mt-20 mr-5"
                src="{{ Vite::asset('resources/assets/images/headers/small-image.png') }}" alt="">
            <nav class="relative py-6 mb-12 md:mb-24 bg-transparent z-50">
                <div class="container px-4 mx-auto">
                    <div class="flex items-center relative">
                        <a class="inline-block text-lg font-bold" href="#">
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
                                    href="login.html">Sign In</a>
                                <a class="relative group inline-block py-3 px-4 text-sm font-semibold text-vermilion-500 hover:text-vermilion-50 bg-vermilion-50 rounded-md overflow-hidden transition duration-300"
                                    href="login.html">
                                    <div
                                        class="absolute top-0 right-full w-full h-full bg-vermilion-500 transform group-hover:translate-x-full group-hover:scale-102 transition duration-500">
                                    </div>
                                    <span class="relative">Create an account</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
            <div class="relative container px-4 mx-auto">
                <div class="lg:mb-32">
                    <span
                        class="inline-block py-2 px-5 mb-8 font-semibold text-vermilion-500 bg-vermilion-50 rounded-full"
                        contenteditable="false">Making e-commerce easy!</span>
                    <div class="relative">
                        <h1
                            class="font-heading text-5xl xs:text-6xl md:text-8xl xl:text-9xl font-bold text-gray-900 mb-8 sm:mb-14">
                            <span>Build an online business</span>
                            <span class="font-serif italic">Today</span>
                        </h1>
                        <p class="text-gray-900 font-semibold mb-5 w-1/2" contenteditable="false">Comfortably manage
                            your Cash on Delivery orders in one place, from leads management to order confirmation and
                            shipping</p>
                        <img class="hidden lg:block absolute bottom-0 right-0 -mb-6"
                            src="{{ Vite::asset('resources/assets/images/headers/small-image.png')}}" alt="">
                    </div>
                    <div class="lg:flex items-center">
                        <div class="mb-10 lg:mb-0 lg:mr-10">
                            <svg width="120" height="10" viewbox="0 0 120 10" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M1 4.25C0.585786 4.25 0.25 4.58579 0.25 5C0.25 5.41421 0.585786 5.75 1 5.75L1 4.25ZM120 5.00001L112.5 0.669883L112.5 9.33014L120 5.00001ZM1 5.75L113.25 5.75001L113.25 4.25001L1 4.25L1 5.75Z"
                                    fill="#1E2238"></path>
                            </svg>
                        </div>
                        <div class="mb-8 lg:mb-0 lg:mr-8">
                            <a class="relative group inline-block w-full sm:w-auto py-4 px-8 text-white font-semibold bg-vermilion-500 rounded-md overflow-hidden"
                                href="#">
                                <div
                                    class="absolute top-0 right-full w-full h-full bg-gray-900 transform group-hover:translate-x-full group-hover:scale-102 transition duration-500">
                                </div>
                                <div class="relative flex items-center justify-center">
                                    <span class="mr-4">Start Selling</span>
                                    <span>
                                        <svg width="8" height="12" viewbox="0 0 8 12" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M6.83 5.29L2.59 1.05C2.49704 0.956274 2.38644 0.881879 2.26458 0.83111C2.14272 0.780342 2.01202 0.754204 1.88 0.754204C1.74799 0.754204 1.61729 0.780342 1.49543 0.83111C1.37357 0.881879 1.26297 0.956274 1.17 1.05C0.983753 1.23736 0.879211 1.49082 0.879211 1.755C0.879211 2.01919 0.983753 2.27264 1.17 2.46L4.71 6L1.17 9.54C0.983753 9.72736 0.879211 9.98082 0.879211 10.245C0.879211 10.5092 0.983753 10.7626 1.17 10.95C1.26344 11.0427 1.37426 11.116 1.4961 11.1658C1.61794 11.2155 1.7484 11.2408 1.88 11.24C2.01161 11.2408 2.14207 11.2155 2.26391 11.1658C2.38575 11.116 2.49656 11.0427 2.59 10.95L6.83 6.71C6.92373 6.61704 6.99813 6.50644 7.04889 6.38458C7.09966 6.26272 7.1258 6.13201 7.1258 6C7.1258 5.86799 7.09966 5.73728 7.04889 5.61543C6.99813 5.49357 6.92373 5.38297 6.83 5.29Z"
                                                fill="#FFF2EE"></path>
                                        </svg></span>
                                </div>
                            </a>
                        </div>
                        <div class="flex items-center">
                            <img class="w-10 h-10"
                                src="{{ Vite::asset('resources/assets/images/headers/avatar4.png') }}"
                                alt=""><img class="w-10 h-10 -ml-2"
                                src="{{ Vite::asset('resources/assets/images/headers/avatar3.png') }}"
                                alt=""><img class="w-10 h-10 -ml-2"
                                src="{{ Vite::asset('resources/assets/images/headers/avatar2.png') }}"
                                alt=""><img class="w-10 h-10 -ml-2"
                                src="{{ Vite::asset('resources/assets/images/headers/avatar1.png') }}" alt="">
                            <div class="p-px bg-white rounded-full -ml-2">
                                <div class="flex items-center justify-center w-10 h-10 rounded-full bg-gray-200">
                                    <span class="font-semibold">5K+</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="xl:flex">
                    <div class="max-w-2xl mb-12 xl:mb-0 xl:mr-auto">
                        <span class="block mb-6 text-sm font-semibold text-gray-500">OUR PARTNERS</span>
                        <div class="flex items-center -mx-4">
                            <div class="w-1/3 px-4">
                                <img class="block"
                                    src="{{ Vite::asset('resources/assets/logos/brands/logo-example3.png') }}"
                                    alt="">
                            </div>
                            <div class="w-1/3 px-4">
                                <img class="block"
                                    src="{{ Vite::asset('resources/assets/logos/brands/logo-example2.png') }}"
                                    alt="">
                            </div>
                            <div class="w-1/3 px-4">
                                <img class="block"
                                    src="{{ Vite::asset('resources/assets/logos/brands/logo-example1.png') }}"
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hidden navbar-menu fixed top-0 left-0 bottom-0 w-5/6 max-w-md z-50">
                <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>
                <nav class="relative flex flex-col py-6 px-10 w-full h-full bg-white border-r overflow-y-auto">
                    <div class="flex items-center mb-16">
                        <a class="mr-auto text-2xl font-medium leading-none" href="#">
                            <img class="h-10" src="resources/assets/logos/logo-saturn-dark.svg" alt=""
                                width="auto"></a>
                        <button class="navbar-close">
                            <svg class="h-6 w-6 text-gray-500 cursor-pointer hover:text-gray-500"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12"></path>
                            </svg></button>
                    </div>
                    <div>
                        <ul class="mb-2">
                            <li><a class="block py-4 px-5 text-gray-900 hover:bg-vermilion-50 rounded-lg"
                                    href="#">About Us</a></li>
                            <li><a class="block py-4 px-5 text-gray-900 hover:bg-vermilion-50 rounded-lg"
                                    href="#">Featured</a></li>
                            <li><a class="block py-4 px-5 text-gray-900 hover:bg-vermilion-50 rounded-lg"
                                    href="#">Solutions</a></li>
                            <li><a class="block py-4 px-5 text-gray-900 hover:bg-vermilion-50 rounded-lg"
                                    href="#">Products</a></li>
                            <li><a class="block py-4 px-5 text-gray-900 hover:bg-vermilion-50 rounded-lg"
                                    href="#">Articles</a></li>
                        </ul>
                        <div class="py-8 px-6 mb-6 border-t border-b border-gray-200">
                            <a class="flex items-center text-sm font-semibold text-vermilion-500 hover:text-vermilion-600"
                                href="#">
                                <svg width="18" height="16" viewbox="0 0 18 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M17.3337 6.05833C17.2811 5.9059 17.1854 5.77202 17.0582 5.67292C16.931 5.57381 16.7777 5.51374 16.617 5.5L11.8754 4.80833L9.75038 0.499999C9.68215 0.359106 9.5756 0.240284 9.44296 0.157143C9.31031 0.074003 9.15693 0.0299072 9.00039 0.0299072C8.84384 0.0299072 8.69046 0.074003 8.55781 0.157143C8.42517 0.240284 8.31862 0.359106 8.25039 0.499999L6.12539 4.8L1.38372 5.5C1.22949 5.52192 1.08449 5.58663 0.96518 5.6868C0.845868 5.78696 0.757021 5.91856 0.708721 6.06666C0.664509 6.21139 0.660541 6.36543 0.697245 6.51224C0.733948 6.65905 0.809936 6.7931 0.917055 6.9L4.35872 10.2333L3.52539 14.9667C3.49564 15.1229 3.51121 15.2844 3.57028 15.432C3.62935 15.5797 3.72943 15.7074 3.85872 15.8C3.98474 15.8901 4.13337 15.9433 4.28793 15.9536C4.44249 15.9639 4.59686 15.9309 4.73372 15.8583L9.00039 13.6333L13.2504 15.8667C13.3673 15.9326 13.4994 15.9671 13.6337 15.9667C13.8102 15.9673 13.9824 15.9118 14.1254 15.8083C14.2547 15.7157 14.3548 15.588 14.4138 15.4404C14.4729 15.2927 14.4885 15.1312 14.4587 14.975L13.6254 10.2417L17.067 6.90833C17.1874 6.8064 17.2763 6.67242 17.3235 6.52195C17.3707 6.37149 17.3742 6.21073 17.3337 6.05833ZM12.2087 9.39166C12.111 9.48619 12.0379 9.6032 11.9957 9.73247C11.9536 9.86175 11.9438 9.99937 11.9671 10.1333L12.5671 13.625L9.43372 11.9583C9.31315 11.8941 9.17865 11.8605 9.04205 11.8605C8.90546 11.8605 8.77095 11.8941 8.65039 11.9583L5.51705 13.625L6.11705 10.1333C6.14033 9.99937 6.13048 9.86175 6.08836 9.73247C6.04623 9.6032 5.97312 9.48619 5.87539 9.39166L3.37539 6.89166L6.88372 6.38333C7.01872 6.36455 7.14705 6.31295 7.25747 6.23304C7.36789 6.15313 7.45702 6.04736 7.51705 5.925L9.00039 2.75L10.5671 5.93333C10.6271 6.0557 10.7162 6.16147 10.8266 6.24137C10.9371 6.32128 11.0654 6.37289 11.2004 6.39166L14.7087 6.9L12.2087 9.39166Z"
                                        fill="currentColor"></path>
                                </svg><span class="ml-3">Upgrade to Premium</span>
                            </a>
                        </div>
                        <div class="flex px-6 mb-16 items-center"><a
                                class="inline-block mr-9 text-sm font-semibold text-vermilion-500 hover:text-gray-900"
                                href="#">Sign In</a><a
                                class="inline-block py-3 px-4 text-sm font-semibold text-vermilion-500 hover:text-white border border-gray-300 hover:border-vermilion-600 hover:bg-vermilion-500 rounded-md transition duration-200"
                                href="#">Create an account</a></div>
                        <div>
                            <div class="flex w-20 h-20 mb-6 items-center justify-center bg-vermilion-50 rounded-full">
                                <svg width="29" height="28" viewbox="0 0 29 28" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M25.3333 16.6667C24.9797 16.6667 24.6406 16.8072 24.3905 17.0572C24.1405 17.3073 24 17.6464 24 18V23.3334C24 23.687 23.8595 24.0261 23.6095 24.2762C23.3594 24.5262 23.0203 24.6667 22.6667 24.6667H4C3.64638 24.6667 3.30724 24.5262 3.05719 24.2762C2.80714 24.0261 2.66667 23.687 2.66667 23.3334V10.5467L10.5067 18.4C11.2567 19.1491 12.2733 19.5698 13.3333 19.5698C14.3933 19.5698 15.41 19.1491 16.16 18.4L18.3467 16.2134C18.5977 15.9623 18.7388 15.6218 18.7388 15.2667C18.7388 14.9116 18.5977 14.5711 18.3467 14.32C18.0956 14.069 17.7551 13.9279 17.4 13.9279C17.0449 13.9279 16.7044 14.069 16.4533 14.32L14.2667 16.5067C14.0174 16.751 13.6823 16.8878 13.3333 16.8878C12.9843 16.8878 12.6492 16.751 12.4 16.5067L4.54667 8.66669H13.3333C13.687 8.66669 14.0261 8.52622 14.2761 8.27617C14.5262 8.02612 14.6667 7.68698 14.6667 7.33336C14.6667 6.97974 14.5262 6.6406 14.2761 6.39055C14.0261 6.1405 13.687 6.00002 13.3333 6.00002H4C2.93913 6.00002 1.92172 6.42145 1.17157 7.1716C0.421427 7.92174 0 8.93916 0 10V23.3334C0 24.3942 0.421427 25.4116 1.17157 26.1618C1.92172 26.9119 2.93913 27.3334 4 27.3334H22.6667C23.7275 27.3334 24.7449 26.9119 25.4951 26.1618C26.2452 25.4116 26.6667 24.3942 26.6667 23.3334V18C26.6667 17.6464 26.5262 17.3073 26.2761 17.0572C26.0261 16.8072 25.687 16.6667 25.3333 16.6667ZM27.6133 5.05336L23.6133 1.05336C23.4865 0.93197 23.337 0.836817 23.1733 0.773358C22.8487 0.64 22.4846 0.64 22.16 0.773358C21.9963 0.836817 21.8468 0.93197 21.72 1.05336L17.72 5.05336C17.4689 5.30443 17.3279 5.64496 17.3279 6.00002C17.3279 6.35509 17.4689 6.69562 17.72 6.94669C17.9711 7.19776 18.3116 7.33881 18.6667 7.33881C19.0217 7.33881 19.3623 7.19776 19.6133 6.94669L21.3333 5.21336V12.6667C21.3333 13.0203 21.4738 13.3595 21.7239 13.6095C21.9739 13.8595 22.313 14 22.6667 14C23.0203 14 23.3594 13.8595 23.6095 13.6095C23.8595 13.3595 24 13.0203 24 12.6667V5.21336L25.72 6.94669C25.844 7.07166 25.9914 7.17086 26.1539 7.23855C26.3164 7.30624 26.4907 7.34109 26.6667 7.34109C26.8427 7.34109 27.017 7.30624 27.1794 7.23855C27.3419 7.17086 27.4894 7.07166 27.6133 6.94669C27.7383 6.82274 27.8375 6.67527 27.9052 6.51279C27.9729 6.35032 28.0077 6.17604 28.0077 6.00002C28.0077 5.82401 27.9729 5.64973 27.9052 5.48726C27.8375 5.32478 27.7383 5.17731 27.6133 5.05336Z"
                                        fill="black"></path>
                                </svg>
                            </div>
                            <span class="block mb-3 text-sm text-gray-500">Drop us a line</span>
                            <a class="font-semibold text-black" href="#">hello@shuffle.dev</a>
                        </div>
                    </div>
                </nav>
            </div>
        </section>

        <section class="relative py-20 md:py-24 bg-gray-100 overflow-hidden">
            <img class="absolute top-0 left-0" src="{{ Vite::asset('resources/assets/images/team/light-blue.png') }}"
                alt="">
            <img class="absolute bottom-0 right-0"
                src="{{ Vite::asset('resources/assets/images/team/light-vermilion.png') }}" alt="">
            <div class="relative container px-4 mx-auto">
                <div class="max-w-md md:max-w-2xl mx-auto xl:max-w-7xl">
                    <div class="flex flex-wrap mb-20 -mx-4 items-center">
                        <div class="w-full xl:w-1/2 px-4">
                            <div>
                                <h1 class="font-heading text-5xl xs:text-6xl md:text-7xl font-bold text-gray-900 mb-8">
                                    <span>Get to know our amazing</span>
                                    <span class="font-serif italic">Team</span>
                                </h1>
                            </div>
                        </div>
                        <div class="w-full xl:w-1/2 px-4">
                            <div class="max-w-lg xl:ml-auto">
                                <p class="text-lg text-gray-500">Mi turpis turpis in justo pellentesque id nibh
                                    praesent. Posuere vel sit dignissim eu nisl gravida. Fringilla sodales lobortis eget
                                    citudin fringilla.</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-4 -mb-12">
                        <div class="w-full md:w-1/2 xl:w-1/4 px-4 mb-12">
                            <div class="max-w-xs md:max-w-none mx-auto">
                                <div class="flex flex-col items-center">
                                    <img class="block h-48 w-48"
                                        src="{{ Vite::asset('resources/assets/images/team/circle-team-members1.png') }}"
                                        alt="">
                                    <div
                                        class="inline-flex -mt-6 mb-5 items-center justify-center py-3 px-5 bg-white rounded-full">
                                        <a class="inline-block mr-3 p-1 hover:bg-vermilion-100 rounded-md"
                                            href="#">
                                            <img src="{{ Vite::asset('resources/assets/images/team/icon-facebook.svg') }}"
                                                alt="">
                                        </a>
                                        <a class="inline-block mr-3 p-1 hover:bg-vermilion-100 rounded-md"
                                            href="#">
                                            <img src="{{ Vite::asset('resources/assets/images/team/icon-linkedin.svg') }}"
                                                alt="">
                                        </a>
                                        <a class="inline-block mr-3 p-1 hover:bg-vermilion-100 rounded-md"
                                            href="#">
                                            <img src="{{ Vite::asset('resources/assets/images/team/icon-instagram.svg') }}"
                                                alt="">
                                        </a>
                                        <a class="inline-block p-1 hover:bg-vermilion-100 rounded-md" href="#">
                                            <img src="{{ Vite::asset('resources/assets/images/team/icon-twitter.svg') }}"
                                                alt="">
                                        </a>
                                    </div>
                                    <h5 class="text-2xl font-bold">Jessica Aduhai</h5>
                                    <span class="text-sm text-gray-500">Founder, CTO</span>
                                </div>
                            </div>
                        </div>
                        <div class="w-full md:w-1/2 xl:w-1/4 px-4 mb-12">
                            <div class="max-w-xs md:max-w-none mx-auto">
                                <div class="flex flex-col items-center">
                                    <img class="block h-48 w-48"
                                        src="{{ Vite::asset('resources/assets/images/team/circle-team-members2.png') }}"
                                        alt="">
                                    <div
                                        class="inline-flex -mt-6 mb-5 items-center justify-center py-3 px-5 bg-white rounded-full">
                                        <a class="inline-block mr-3 p-1 hover:bg-vermilion-100 rounded-md"
                                            href="#">
                                            <img src="{{ Vite::asset('resources/assets/images/team/icon-facebook.svg') }}"
                                                alt="">
                                        </a>
                                        <a class="inline-block mr-3 p-1 hover:bg-vermilion-100 rounded-md"
                                            href="#">
                                            <img src="{{ Vite::asset('resources/assets/images/team/icon-linkedin.svg') }}"
                                                alt="">
                                        </a>
                                        <a class="inline-block mr-3 p-1 hover:bg-vermilion-100 rounded-md"
                                            href="#">
                                            <img src="{{ Vite::asset('resources/assets/images/team/icon-instagram.svg') }}"
                                                alt="">
                                        </a>
                                        <a class="inline-block p-1 hover:bg-vermilion-100 rounded-md" href="#">
                                            <img src="{{ Vite::asset('resources/assets/images/team/icon-twitter.svg') }}"
                                                alt="">
                                        </a>
                                    </div>
                                    <h5 class="text-2xl font-bold">Asep Rashford</h5>
                                    <span class="text-sm text-gray-500">Product Manager</span>
                                </div>
                            </div>
                        </div>
                        <div class="w-full md:w-1/2 xl:w-1/4 px-4 mb-12">
                            <div class="max-w-xs md:max-w-none mx-auto">
                                <div class="flex flex-col items-center">
                                    <img class="block h-48 w-48"
                                        src="{{ Vite::asset('resources/assets/images/team/circle-team-members3.png') }}"
                                        alt="">
                                    <div
                                        class="inline-flex -mt-6 mb-5 items-center justify-center py-3 px-5 bg-white rounded-full">
                                        <a class="inline-block mr-3 p-1 hover:bg-vermilion-100 rounded-md"
                                            href="#">
                                            <img src="{{ Vite::asset('resources/assets/images/team/icon-facebook.svg') }}"
                                                alt="">
                                        </a>
                                        <a class="inline-block mr-3 p-1 hover:bg-vermilion-100 rounded-md"
                                            href="#">
                                            <img src="{{ Vite::asset('resources/assets/images/team/icon-linkedin.svg') }}"
                                                alt="">
                                        </a>
                                        <a class="inline-block mr-3 p-1 hover:bg-vermilion-100 rounded-md"
                                            href="#">
                                            <img src="{{ Vite::asset('resources/assets/images/team/icon-instagram.svg') }}"
                                                alt="">
                                        </a>
                                        <a class="inline-block p-1 hover:bg-vermilion-100 rounded-md" href="#">
                                            <img src="{{ Vite::asset('resources/assets/images/team/icon-twitter.svg') }}"
                                                alt="">
                                        </a>
                                    </div>
                                    <h5 class="text-2xl font-bold">Gatot Sugih</h5>
                                    <span class="text-sm text-gray-500">Tech Lead</span>
                                </div>
                            </div>
                        </div>
                        <div class="w-full md:w-1/2 xl:w-1/4 px-4 mb-12">
                            <div class="max-w-xs md:max-w-none mx-auto">
                                <div class="flex flex-col items-center">
                                    <img class="block h-48 w-48"
                                        src="{{ Vite::asset('resources/assets/images/team/circle-team-members4.png') }}"
                                        alt="">
                                    <div
                                        class="inline-flex -mt-6 mb-5 items-center justify-center py-3 px-5 bg-white rounded-full">
                                        <a class="inline-block mr-3 p-1 hover:bg-vermilion-100 rounded-md"
                                            href="#">
                                            <img src="{{ Vite::asset('resources/assets/images/team/icon-facebook.svg') }}"
                                                alt="">
                                        </a>
                                        <a class="inline-block mr-3 p-1 hover:bg-vermilion-100 rounded-md"
                                            href="#">
                                            <img src="{{ Vite::asset('resources/assets/images/team/icon-linkedin.svg') }}"
                                                alt="">
                                        </a>
                                        <a class="inline-block mr-3 p-1 hover:bg-vermilion-100 rounded-md"
                                            href="#">
                                            <img src="{{ Vite::asset('resources/assets/images/team/icon-instagram.svg') }}"
                                                alt="">
                                        </a>
                                        <a class="inline-block p-1 hover:bg-vermilion-100 rounded-md" href="#">
                                            <img src="{{ Vite::asset('resources/assets/images/team/icon-twitter.svg') }}"
                                                alt="">
                                        </a>
                                    </div>
                                    <h5 class="text-2xl font-bold">Nirmala Azalea</h5>
                                    <span class="text-sm text-gray-500">CMO</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="relative py-20 lg:py-32 overflow-hidden">
            <img class="absolute top-0 left-0"
                src="{{ Vite::asset('resources/assets/images/features/star-left.png') }}" alt="">
            <div class="relative container px-4 mx-auto">
                <div class="max-w-2xl mx-auto mb-20 text-center">
                    <h1 class="font-heading text-5xl xs:text-6xl md:text-7xl font-bold text-gray-900 mb-6">
                        <span>How COD ART</span>
                        <span class="font-serif italic">Works</span>
                    </h1>
                    <p class="max-w-md mx-auto text-lg text-gray-500">We are a team of 20+ who are passionate about
                        making the world a better place.</p>
                </div>
                <div class="max-w-7xl mx-auto px-8 py-18 xs:px-12 sm:p-24 bg-vermilion-50 rounded-3xl">
                    <div class="flex flex-wrap -mx-4">
                        <div class="w-full lg:w-1/2 px-4 order-last lg:order-first">
                            <div class="lg:max-w-sm">
                                <div class="flex items-center pb-12 mb-12 border-b border-gray-200 border-opacity-50">
                                    <div
                                        class="flex flex-shrink-0 w-12 h-12 mr-6 items-center justify-center bg-blue-100 rounded-full">
                                        <img src="{{ Vite::asset('resources/assets/images/features/icon-mouse.svg') }}"
                                            alt="">
                                    </div>
                                    <div>
                                        <h3 class="text-xl font-semibold">Simple &amp; Uniuqe</h3>
                                        <span class="text-sm text-gray-400">Created by our talented designer</span>
                                    </div>
                                </div>
                                <div class="flex items-center pb-12 mb-12 border-b border-gray-200 border-opacity-50">
                                    <div
                                        class="flex flex-shrink-0 w-12 h-12 mr-6 items-center justify-center bg-red-100 rounded-full">
                                        <img src="{{ Vite::asset('resources/assets/images/features/icon-point.svg') }}"
                                            alt="">
                                    </div>
                                    <div>
                                        <h3 class="text-xl font-semibold">Layered &amp; Well Documented</h3>
                                        <span class="text-sm text-gray-400">We are not tolerant about taste</span>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div
                                        class="flex flex-shrink-0 w-12 h-12 mr-6 items-center justify-center bg-yellow-300 rounded-full">
                                        <img src="{{ Vite::asset('resources/assets/images/features/icon-plane.svg') }}"
                                            alt="">
                                    </div>
                                    <div>
                                        <h3 class="text-xl font-semibold">World Class UI Design</h3>
                                        <span class="text-sm text-gray-400">We are not tolerant about taste</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-full lg:w-1/2 px-4 mb-20 lg:mb-0">
                            <div class="flex flex-col h-full justify-between lg:max-w-md ml-auto">
                                <div class="mb-12">
                                    <h3 class="text-3xl md:text-5xl font-bold mb-5">
                                        <span>Start custom</span>
                                        <span class="block">&amp; build!</span>
                                    </h3>
                                    <p class="text-gray-900">Nunc et tellus non erat accumsan aliquam eget non mi.
                                        Integer fringilla pellentesque finibus.</p>
                                </div>
                                <div class="flex flex-wrap items-center justify-between">
                                    <div class="w-full xs:w-auto mb-8 sm:mb-0 mr-4">
                                        <span class="block text-3xl font-bold text-gray-900 leading-tight">Only
                                            $50</span>
                                        <span class="text-sm text-gray-500">for Silver package</span>
                                    </div>
                                    <a class="relative group inline-block w-full sm:w-auto py-4 px-6 text-vermilion-50 font-semibold bg-vermilion-500 rounded-full overflow-hidden"
                                        href="#">
                                        <div
                                            class="absolute top-0 right-full w-full h-full bg-gray-900 transform group-hover:translate-x-full group-hover:scale-102 transition duration-500">
                                        </div>
                                        <div class="relative flex items-center justify-center">
                                            <span class="mr-2">See our plans</span>
                                            <span>
                                                <svg width="13" height="13" viewbox="0 0 13 13"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M12.9199 0.62C12.8185 0.375651 12.6243 0.181475 12.3799 0.0799999C12.2597 0.028759 12.1306 0.00157999 11.9999 0H1.99994C1.73472 0 1.48037 0.105357 1.29283 0.292893C1.1053 0.48043 0.999939 0.734784 0.999939 1C0.999939 1.26522 1.1053 1.51957 1.29283 1.70711C1.48037 1.89464 1.73472 2 1.99994 2H9.58994L1.28994 10.29C1.19621 10.383 1.12182 10.4936 1.07105 10.6154C1.02028 10.7373 0.994141 10.868 0.994141 11C0.994141 11.132 1.02028 11.2627 1.07105 11.3846C1.12182 11.5064 1.19621 11.617 1.28994 11.71C1.3829 11.8037 1.4935 11.8781 1.61536 11.9289C1.73722 11.9797 1.86793 12.0058 1.99994 12.0058C2.13195 12.0058 2.26266 11.9797 2.38452 11.9289C2.50638 11.8781 2.61698 11.8037 2.70994 11.71L10.9999 3.41V11C10.9999 11.2652 11.1053 11.5196 11.2928 11.7071C11.4804 11.8946 11.7347 12 11.9999 12C12.2652 12 12.5195 11.8946 12.707 11.7071C12.8946 11.5196 12.9999 11.2652 12.9999 11V1C12.9984 0.869323 12.9712 0.740222 12.9199 0.62V0.62Z"
                                                        fill="#FFF2EE"></path>
                                                </svg>
                                            </span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="relative py-20 md:py-32 overflow-hidden">
            <img class="absolute top-0 right-0 md:mt-10 -mr-20 md:-mr-0"
                src="{{ Vite::asset('resources/assets/images/stats/star-circle.svg') }}" alt="">
            <img class="absolute bottom-0 left-0"
                src="{{ Vite::asset('resources/assets/images/stats/left-blue-light.png') }}" alt="">
            <div class="relative container px-4 mx-auto">
                <div class="max-w-5xl mx-auto">
                    <div class="flex flex-wrap -mx-4 mb-24 items-end">
                        <div class="w-full lg:w-1/2 px-4 mb-8 lg:mb-0">
                            <div class="max-w-md md:max-w-lg">
                                <span
                                    class="inline-block py-1 px-3 mb-5 text-xs font-semibold text-vermilion-500 bg-vermilion-50 rounded-full">PRODUCT
                                    OVERVIEW</span>
                                <h1 class="font-heading text-5xl xs:text-6xl md:text-7xl font-bold">
                                    <span>Build</span>
                                    <span class="font-serif italic">Exclusively</span>
                                </h1>
                            </div>
                        </div>
                        <div class="w-full lg:w-1/2 px-4">
                            <div class="max-w-md lg:ml-auto lg:pb-3">
                                <p class="text-xl text-gray-500 font-semibold">Nisi eu pellentesque felis volutpat
                                    aliquet pulvinar sed. Vitae fames vestibulum urna vel odio mauris urna orci est.</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-4">
                        <div class="relative w-full md:w-1/3 px-4 pb-9 md:pb-0 mb-12 lg:mb-0">
                            <div
                                class="hidden md:block absolute top-1/2 right-0 w-px h-28 bg-gray-200 transform -translate-y-1/2">
                            </div>
                            <div
                                class="md:hidden absolute bottom-0 left-1/2 h-px w-40 bg-gray-200 transform -translate-x-1/2">
                            </div>
                            <div class="text-center">
                                <span class="block text-5xl lg:text-7xl font-bold text-gray-900 mb-5">300+</span>
                                <span class="text-xl text-gray-500">PRODUCTS</span>
                            </div>
                        </div>
                        <div class="relative w-full md:w-1/3 px-4 pb-9 md:pb-0 mb-12 lg:mb-0">
                            <div
                                class="hidden md:block absolute top-1/2 right-0 w-px h-28 bg-gray-200 transform -translate-y-1/2">
                            </div>
                            <div
                                class="md:hidden absolute bottom-0 left-1/2 h-px w-40 bg-gray-200 transform -translate-x-1/2">
                            </div>
                            <div class="text-center">
                                <span class="block text-5xl lg:text-7xl font-bold text-gray-900 mb-5">85</span>
                                <span class="text-xl text-gray-500">WEB TEMPLATE</span>
                            </div>
                        </div>
                        <div class="w-full md:w-1/3 px-4">
                            <div class="text-center">
                                <span class="block text-5xl lg:text-7xl font-bold text-gray-900 mb-5">215</span>
                                <span class="text-xl text-gray-500">MOBILE TEMPLATE</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="relative py-20 lg:pt-32 lg:pb-36 bg-gray-50 overflow-hidden">
            <img class="absolute top-0 right-0 mt-6 -mr-24 md:-mr-0"
                src="{{ Vite::asset('resources/assets/images/testimonials/circle-star-bg.svg') }}" alt="">
            <div class="relative container px-4 mx-auto">
                <div class="max-w-7xl mx-auto">
                    <div class="flex flex-wrap -mx-4 items-center mb-16">
                        <div class="w-full lg:w-2/3 px-4 mb-12 lg:mb-0">
                            <span
                                class="inline-block py-1 px-3 mb-4 text-xs font-semibold text-vermilion-500 bg-vermilion-50 rounded-full">TESTIMONIALS</span>
                            <h1 class="font-heading text-4xl xs:text-6xl font-bold text-gray-900 mb-4">
                                <span>What our clients</span>
                                <span class="font-serif italic">said</span>
                            </h1>
                            <p class="text-gray-500">Risus viverra justo sagittis vestibulum metus.</p>
                        </div>
                        <div class="w-full lg:w-1/3 px-4">
                            <div class="flex items-center justify-end">
                                <a class="inline-flex mr-3 w-14 h-14 items-center justify-center rounded-full border border-gray-200 hover:border-vermilion-500 text-gray-600 hover:text-vermilion-500 transition duration-200"
                                    href="#">
                                    <svg width="12" height="14" viewbox="0 0 12 14" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M0.0799999 6.62C0.127594 6.49725 0.19896 6.38511 0.290001 6.29L5.29 1.29C5.38324 1.19676 5.49393 1.1228 5.61575 1.07234C5.73757 1.02188 5.86814 0.995911 6 0.995911C6.2663 0.995911 6.5217 1.1017 6.71 1.29C6.80324 1.38324 6.8772 1.49393 6.92766 1.61575C6.97812 1.73758 7.00409 1.86814 7.00409 2C7.00409 2.2663 6.8983 2.5217 6.71 2.71L3.41 6H11C11.2652 6 11.5196 6.10536 11.7071 6.2929C11.8946 6.48043 12 6.73479 12 7C12 7.26522 11.8946 7.51957 11.7071 7.70711C11.5196 7.89465 11.2652 8 11 8H3.41L6.71 11.29C6.80373 11.383 6.87812 11.4936 6.92889 11.6154C6.97966 11.7373 7.0058 11.868 7.0058 12C7.0058 12.132 6.97966 12.2627 6.92889 12.3846C6.87812 12.5064 6.80373 12.617 6.71 12.71C6.61704 12.8037 6.50644 12.8781 6.38458 12.9289C6.26272 12.9797 6.13201 13.0058 6 13.0058C5.86799 13.0058 5.73728 12.9797 5.61542 12.9289C5.49356 12.8781 5.38296 12.8037 5.29 12.71L0.290001 7.71C0.19896 7.6149 0.127594 7.50275 0.0799999 7.38C-0.0200176 7.13654 -0.0200176 6.86346 0.0799999 6.62Z"
                                            fill="currentColor"></path>
                                    </svg>
                                </a>
                                <a class="inline-flex w-14 h-14 items-center justify-center rounded-full bg-vermilion-50 hover:bg-vermilion-100 text-vermilion-500 transition duration-200"
                                    href="#">
                                    <svg width="12" height="14" viewbox="0 0 12 14" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11.92 6.62C11.8724 6.49725 11.801 6.38511 11.71 6.29L6.71 1.29C6.61676 1.19676 6.50607 1.1228 6.38425 1.07234C6.26243 1.02188 6.13186 0.995911 6 0.995911C5.7337 0.995911 5.4783 1.1017 5.29 1.29C5.19676 1.38324 5.1228 1.49393 5.07234 1.61575C5.02188 1.73758 4.99591 1.86814 4.99591 2C4.99591 2.2663 5.1017 2.5217 5.29 2.71L8.59 6H1C0.734784 6 0.48043 6.10536 0.292893 6.2929C0.105357 6.48043 0 6.73479 0 7C0 7.26522 0.105357 7.51957 0.292893 7.70711C0.48043 7.89465 0.734784 8 1 8H8.59L5.29 11.29C5.19627 11.383 5.12188 11.4936 5.07111 11.6154C5.02034 11.7373 4.9942 11.868 4.9942 12C4.9942 12.132 5.02034 12.2627 5.07111 12.3846C5.12188 12.5064 5.19627 12.617 5.29 12.71C5.38296 12.8037 5.49356 12.8781 5.61542 12.9289C5.73728 12.9797 5.86799 13.0058 6 13.0058C6.13201 13.0058 6.26272 12.9797 6.38458 12.9289C6.50644 12.8781 6.61704 12.8037 6.71 12.71L11.71 7.71C11.801 7.6149 11.8724 7.50275 11.92 7.38C12.02 7.13654 12.02 6.86346 11.92 6.62Z"
                                            fill="#FF460C"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-4">
                        <div class="w-full lg:w-1/3 px-4 mb-8 lg:mb-0">
                            <div
                                class="flex flex-col justify-between h-full max-w-md mx-auto lg:max-w-none bg-white rounded-3xl shadow-lg overflow-hidden">
                                <div class="p-6">
                                    <div class="flex mb-4 items-center">
                                        <img class="block mr-1.5"
                                            src="{{ Vite::asset('resources/assets/images/testimonials/star.svg') }}"
                                            alt="">
                                        <img class="block mr-1.5"
                                            src="{{ Vite::asset('resources/assets/images/testimonials/star.svg') }}"
                                            alt="">
                                        <img class="block mr-1.5"
                                            src="{{ Vite::asset('resources/assets/images/testimonials/star.svg') }}"
                                            alt="">
                                        <img class="block mr-1.5"
                                            src="{{ Vite::asset('resources/assets/images/testimonials/star.svg') }}"
                                            alt="">
                                        <img class="block"
                                            src="{{ Vite::asset('resources/assets/images/testimonials/star.svg') }}"
                                            alt="">
                                    </div>
                                    <p class="text-lg text-gray-900">It was a pleasure working with the Saturn. They
                                        understood the brief correctly and delivered great designs exceeding the
                                        expectations.</p>
                                </div>
                                <div class="px-8 py-4 bg-vermilion-500">
                                    <div class="flex items-center">
                                        <img class="block w-15 h-15 rounded-full"
                                            src="{{ Vite::asset('resources/assets/images/testimonials/avatar-group-5.png') }}"
                                            alt="">
                                        <div class="ml-5">
                                            <span class="block text-xl text-white font-semibold leading-none">Marvin
                                                McKinney</span>
                                            <span class="block text-sm text-vermilion-200">CEO of Coca Soft</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-full lg:w-1/3 px-4 mb-8 lg:mb-0">
                            <div
                                class="flex flex-col justify-between h-full max-w-md mx-auto lg:max-w-none bg-white rounded-3xl shadow-lg overflow-hidden">
                                <div class="p-6">
                                    <div class="flex mb-4 items-center">
                                        <img class="block mr-1.5"
                                            src="{{ Vite::asset('resources/assets/images/testimonials/star.svg') }}"
                                            alt="">
                                        <img class="block mr-1.5"
                                            src="{{ Vite::asset('resources/assets/images/testimonials/star.svg') }}"
                                            alt="">
                                        <img class="block mr-1.5"
                                            src="{{ Vite::asset('resources/assets/images/testimonials/star.svg') }}"
                                            alt="">
                                        <img class="block mr-1.5"
                                            src="{{ Vite::asset('resources/assets/images/testimonials/star.svg') }}"
                                            alt="">
                                        <img class="block"
                                            src="{{ Vite::asset('resources/assets/images/testimonials/star.svg') }}"
                                            alt="">
                                    </div>
                                    <p class="text-lg text-gray-900">With Saturn the results are very satisfying.
                                        wrapped with Hight quality and innovative design that makes a surge of visitors.
                                    </p>
                                </div>
                                <div class="px-8 py-4 bg-vermilion-500">
                                    <div class="flex items-center">
                                        <img class="block w-15 h-15 rounded-full"
                                            src="{{ Vite::asset('resources/assets/images/testimonials/avatar-group-6.png') }}"
                                            alt="">
                                        <div class="ml-5">
                                            <span class="block text-xl text-white font-semibold leading-none">Kathryn
                                                Murphy</span>
                                            <span class="block text-sm text-vermilion-200">Founder ABC Studio</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-full lg:w-1/3 px-4">
                            <div
                                class="flex flex-col justify-between h-full max-w-md mx-auto lg:max-w-none bg-white rounded-3xl shadow-lg overflow-hidden">
                                <div class="p-6">
                                    <div class="flex mb-4 items-center">
                                        <img class="block mr-1.5"
                                            src="{{ Vite::asset('resources/assets/images/testimonials/star.svg') }}"
                                            alt="">
                                        <img class="block mr-1.5"
                                            src="{{ Vite::asset('resources/assets/images/testimonials/star.svg') }}"
                                            alt="">
                                        <img class="block mr-1.5"
                                            src="{{ Vite::asset('resources/assets/images/testimonials/star.svg') }}"
                                            alt="">
                                        <img class="block mr-1.5"
                                            src="{{ Vite::asset('resources/assets/images/testimonials/star.svg') }}"
                                            alt="">
                                        <img class="block"
                                            src="{{ Vite::asset('resources/assets/images/testimonials/star.svg') }}"
                                            alt="">
                                    </div>
                                    <p class="text-lg text-gray-900">It was a pleasure working with the Saturn. They
                                        understood the brief correctly and delivered great designs exceeding the
                                        expectations.</p>
                                </div>
                                <div class="px-8 py-4 bg-vermilion-500">
                                    <div class="flex items-center">
                                        <img class="block w-15 h-15 rounded-full"
                                            src="{{ Vite::asset('resources/assets/images/testimonials/avatar-group-4.png') }}"
                                            alt="">
                                        <div class="ml-5">
                                            <span class="block text-xl text-white font-semibold leading-none">Beby
                                                Aduhai</span>
                                            <span class="block text-sm text-vermilion-200">CEO of Sans Design</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="relative py-20 overflow-hidden bg-gray-50">
            <img class="absolute top-0 left-0 mt-44"
                src="{{ Vite::asset('resources/assets/images/faq/light-blue-left.png') }}" alt="">
            <img class="absolute top-0 right-0 mt-10"
                src="{{ Vite::asset('resources/assets/images/faq/star-right.svg') }}" alt="">
            <div class="relative container px-4 mx-auto">
                <div class="max-w-5xl mx-auto">
                    <div class="text-center mb-24">
                        <span
                            class="inline-block py-1 px-3 mb-4 text-xs font-semibold text-vermilion-500 bg-vermilion-50 rounded-full">FREQUENTLY
                            ASK QUESTION</span>
                        <h1 class="font-heading text-5xl xs:text-6xl md:text-7xl font-bold text-gray-900">
                            <span>You ask? We</span>
                            <span class="font-serif italic">answer</span>
                        </h1>
                    </div>
                    <div class="pt-16 sm:pt-24 px-8 sm:px-20 pb-16 bg-white rounded-3xl shadow-lg">
                        <button
                            class="flex mb-8 pb-8 group w-full items-start justify-between border-b border-gray-100 text-left">
                            <div class="max-w-xl pr-5">
                                <h3 class="text-xl font-semibold text-vermilion-500 mb-3">Do you provide a complete
                                    design
                                    style?</h3>
                                <p class="text-lg text-gray-500">Pretium ac auctor quis urna orci feugiat. Vulputate
                                    tellus velit tellus orci auctor vel nulla facilisi ut. Ante nunc risus viverra
                                    vivamus. Eros amet at lectus ac ac nibh dignissim.</p>
                            </div>
                            <div class="pt-1">
                                <span>
                                    <svg width="17" height="3" viewbox="0 0 17 3" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M15.4619 0.045166H1.46194C1.19673 0.045166 0.942374 0.150523 0.754838 0.338059C0.567302 0.525596 0.461945 0.77995 0.461945 1.04517C0.461945 1.31038 0.567302 1.56474 0.754838 1.75227C0.942374 1.93981 1.19673 2.04517 1.46194 2.04517H15.4619C15.7272 2.04517 15.9815 1.93981 16.1691 1.75227C16.3566 1.56474 16.4619 1.31038 16.4619 1.04517C16.4619 0.77995 16.3566 0.525596 16.1691 0.338059C15.9815 0.150523 15.7272 0.045166 15.4619 0.045166Z"
                                            fill="#FF460C"></path>
                                    </svg>
                                </span>
                            </div>
                        </button>
                        <button
                            class="flex mb-8 pb-8 group w-full items-start justify-between border-b border-gray-100 text-left">
                            <div class="max-w-xl pr-5">
                                <h3 class="text-xl font-semibold text-black group-hover:text-vermilion-500">Do you
                                    provide
                                    a complete design style?</h3>
                                <p class="hidden group-hover:block mt-3 text-lg text-gray-500">Pretium ac auctor quis
                                    urna orci feugiat. Vulputate tellus velit tellus orci auctor vel nulla facilisi ut.
                                    Ante nunc risus viverra vivamus. Eros amet at lectus ac ac nibh dignissim.</p>
                            </div>
                            <div class="pt-1">
                                <span class="hidden group-hover:block">
                                    <svg width="17" height="3" viewbox="0 0 17 3" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M15.4619 0.045166H1.46194C1.19673 0.045166 0.942374 0.150523 0.754838 0.338059C0.567302 0.525596 0.461945 0.77995 0.461945 1.04517C0.461945 1.31038 0.567302 1.56474 0.754838 1.75227C0.942374 1.93981 1.19673 2.04517 1.46194 2.04517H15.4619C15.7272 2.04517 15.9815 1.93981 16.1691 1.75227C16.3566 1.56474 16.4619 1.31038 16.4619 1.04517C16.4619 0.77995 16.3566 0.525596 16.1691 0.338059C15.9815 0.150523 15.7272 0.045166 15.4619 0.045166Z"
                                            fill="#FF460C"></path>
                                    </svg>
                                </span>
                                <span class="block group-hover:hidden">
                                    <svg width="17" height="16" viewbox="0 0 17 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M15.4619 7H9.46194V1C9.46194 0.734784 9.35659 0.48043 9.16905 0.292893C8.98151 0.105357 8.72716 0 8.46194 0C8.19673 0 7.94237 0.105357 7.75484 0.292893C7.5673 0.48043 7.46194 0.734784 7.46194 1V7H1.46194C1.19673 7 0.942374 7.10536 0.754838 7.29289C0.567302 7.48043 0.461945 7.73478 0.461945 8C0.461945 8.26522 0.567302 8.51957 0.754838 8.70711C0.942374 8.89464 1.19673 9 1.46194 9H7.46194V15C7.46194 15.2652 7.5673 15.5196 7.75484 15.7071C7.94237 15.8946 8.19673 16 8.46194 16C8.72716 16 8.98151 15.8946 9.16905 15.7071C9.35659 15.5196 9.46194 15.2652 9.46194 15V9H15.4619C15.7272 9 15.9815 8.89464 16.1691 8.70711C16.3566 8.51957 16.4619 8.26522 16.4619 8C16.4619 7.73478 16.3566 7.48043 16.1691 7.29289C15.9815 7.10536 15.7272 7 15.4619 7Z"
                                            fill="black"></path>
                                    </svg>
                                </span>
                            </div>
                        </button>
                        <button
                            class="flex mb-8 pb-8 group w-full items-start justify-between border-b border-gray-100 text-left">
                            <div class="max-w-xl pr-5">
                                <h3 class="text-xl font-semibold text-black group-hover:text-vermilion-500">How was the
                                    license?</h3>
                                <p class="hidden group-hover:block mt-3 text-lg text-gray-500">Pretium ac auctor quis
                                    urna orci feugiat. Vulputate tellus velit tellus orci auctor vel nulla facilisi ut.
                                    Ante nunc risus viverra vivamus. Eros amet at lectus ac ac nibh dignissim.</p>
                            </div>
                            <div class="pt-1">
                                <span class="hidden group-hover:block">
                                    <svg width="17" height="3" viewbox="0 0 17 3" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M15.4619 0.045166H1.46194C1.19673 0.045166 0.942374 0.150523 0.754838 0.338059C0.567302 0.525596 0.461945 0.77995 0.461945 1.04517C0.461945 1.31038 0.567302 1.56474 0.754838 1.75227C0.942374 1.93981 1.19673 2.04517 1.46194 2.04517H15.4619C15.7272 2.04517 15.9815 1.93981 16.1691 1.75227C16.3566 1.56474 16.4619 1.31038 16.4619 1.04517C16.4619 0.77995 16.3566 0.525596 16.1691 0.338059C15.9815 0.150523 15.7272 0.045166 15.4619 0.045166Z"
                                            fill="#FF460C"></path>
                                    </svg>
                                </span>
                                <span class="block group-hover:hidden">
                                    <svg width="17" height="16" viewbox="0 0 17 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M15.4619 7H9.46194V1C9.46194 0.734784 9.35659 0.48043 9.16905 0.292893C8.98151 0.105357 8.72716 0 8.46194 0C8.19673 0 7.94237 0.105357 7.75484 0.292893C7.5673 0.48043 7.46194 0.734784 7.46194 1V7H1.46194C1.19673 7 0.942374 7.10536 0.754838 7.29289C0.567302 7.48043 0.461945 7.73478 0.461945 8C0.461945 8.26522 0.567302 8.51957 0.754838 8.70711C0.942374 8.89464 1.19673 9 1.46194 9H7.46194V15C7.46194 15.2652 7.5673 15.5196 7.75484 15.7071C7.94237 15.8946 8.19673 16 8.46194 16C8.72716 16 8.98151 15.8946 9.16905 15.7071C9.35659 15.5196 9.46194 15.2652 9.46194 15V9H15.4619C15.7272 9 15.9815 8.89464 16.1691 8.70711C16.3566 8.51957 16.4619 8.26522 16.4619 8C16.4619 7.73478 16.3566 7.48043 16.1691 7.29289C15.9815 7.10536 15.7272 7 15.4619 7Z"
                                            fill="black"></path>
                                    </svg>
                                </span>
                            </div>
                        </button>
                        <button
                            class="flex mb-8 pb-8 group w-full items-start justify-between border-b border-gray-100 text-left">
                            <div class="max-w-xl pr-5">
                                <h3 class="text-xl font-semibold text-black group-hover:text-vermilion-500">How was the
                                    license?</h3>
                                <p class="hidden group-hover:block mt-3 text-lg text-gray-500">Pretium ac auctor quis
                                    urna orci feugiat. Vulputate tellus velit tellus orci auctor vel nulla facilisi ut.
                                    Ante nunc risus viverra vivamus. Eros amet at lectus ac ac nibh dignissim.</p>
                            </div>
                            <div class="pt-1">
                                <span class="hidden group-hover:block">
                                    <svg width="17" height="3" viewbox="0 0 17 3" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M15.4619 0.045166H1.46194C1.19673 0.045166 0.942374 0.150523 0.754838 0.338059C0.567302 0.525596 0.461945 0.77995 0.461945 1.04517C0.461945 1.31038 0.567302 1.56474 0.754838 1.75227C0.942374 1.93981 1.19673 2.04517 1.46194 2.04517H15.4619C15.7272 2.04517 15.9815 1.93981 16.1691 1.75227C16.3566 1.56474 16.4619 1.31038 16.4619 1.04517C16.4619 0.77995 16.3566 0.525596 16.1691 0.338059C15.9815 0.150523 15.7272 0.045166 15.4619 0.045166Z"
                                            fill="#FF460C"></path>
                                    </svg>
                                </span>
                                <span class="block group-hover:hidden">
                                    <svg width="17" height="16" viewbox="0 0 17 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M15.4619 7H9.46194V1C9.46194 0.734784 9.35659 0.48043 9.16905 0.292893C8.98151 0.105357 8.72716 0 8.46194 0C8.19673 0 7.94237 0.105357 7.75484 0.292893C7.5673 0.48043 7.46194 0.734784 7.46194 1V7H1.46194C1.19673 7 0.942374 7.10536 0.754838 7.29289C0.567302 7.48043 0.461945 7.73478 0.461945 8C0.461945 8.26522 0.567302 8.51957 0.754838 8.70711C0.942374 8.89464 1.19673 9 1.46194 9H7.46194V15C7.46194 15.2652 7.5673 15.5196 7.75484 15.7071C7.94237 15.8946 8.19673 16 8.46194 16C8.72716 16 8.98151 15.8946 9.16905 15.7071C9.35659 15.5196 9.46194 15.2652 9.46194 15V9H15.4619C15.7272 9 15.9815 8.89464 16.1691 8.70711C16.3566 8.51957 16.4619 8.26522 16.4619 8C16.4619 7.73478 16.3566 7.48043 16.1691 7.29289C15.9815 7.10536 15.7272 7 15.4619 7Z"
                                            fill="black"></path>
                                    </svg>
                                </span>
                            </div>
                        </button>
                        <button
                            class="flex mb-8 pb-8 group w-full items-start justify-between border-b border-gray-100 text-left">
                            <div class="max-w-xl pr-5">
                                <h3 class="text-xl font-semibold text-black group-hover:text-vermilion-500">How much we
                                    can buy this marvelous product?</h3>
                                <p class="hidden group-hover:block mt-3 text-lg text-gray-500">Pretium ac auctor quis
                                    urna orci feugiat. Vulputate tellus velit tellus orci auctor vel nulla facilisi ut.
                                    Ante nunc risus viverra vivamus. Eros amet at lectus ac ac nibh dignissim.</p>
                            </div>
                            <div class="pt-1">
                                <span class="hidden group-hover:block">
                                    <svg width="17" height="3" viewbox="0 0 17 3" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M15.4619 0.045166H1.46194C1.19673 0.045166 0.942374 0.150523 0.754838 0.338059C0.567302 0.525596 0.461945 0.77995 0.461945 1.04517C0.461945 1.31038 0.567302 1.56474 0.754838 1.75227C0.942374 1.93981 1.19673 2.04517 1.46194 2.04517H15.4619C15.7272 2.04517 15.9815 1.93981 16.1691 1.75227C16.3566 1.56474 16.4619 1.31038 16.4619 1.04517C16.4619 0.77995 16.3566 0.525596 16.1691 0.338059C15.9815 0.150523 15.7272 0.045166 15.4619 0.045166Z"
                                            fill="#FF460C"></path>
                                    </svg>
                                </span>
                                <span class="block group-hover:hidden">
                                    <svg width="17" height="16" viewbox="0 0 17 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M15.4619 7H9.46194V1C9.46194 0.734784 9.35659 0.48043 9.16905 0.292893C8.98151 0.105357 8.72716 0 8.46194 0C8.19673 0 7.94237 0.105357 7.75484 0.292893C7.5673 0.48043 7.46194 0.734784 7.46194 1V7H1.46194C1.19673 7 0.942374 7.10536 0.754838 7.29289C0.567302 7.48043 0.461945 7.73478 0.461945 8C0.461945 8.26522 0.567302 8.51957 0.754838 8.70711C0.942374 8.89464 1.19673 9 1.46194 9H7.46194V15C7.46194 15.2652 7.5673 15.5196 7.75484 15.7071C7.94237 15.8946 8.19673 16 8.46194 16C8.72716 16 8.98151 15.8946 9.16905 15.7071C9.35659 15.5196 9.46194 15.2652 9.46194 15V9H15.4619C15.7272 9 15.9815 8.89464 16.1691 8.70711C16.3566 8.51957 16.4619 8.26522 16.4619 8C16.4619 7.73478 16.3566 7.48043 16.1691 7.29289C15.9815 7.10536 15.7272 7 15.4619 7Z"
                                            fill="black"></path>
                                    </svg>
                                </span>
                            </div>
                        </button>
                        <button class="flex group w-full items-start justify-between text-left">
                            <div class="max-w-xl pr-5">
                                <h3 class="text-xl font-semibold text-black group-hover:text-vermilion-500">Do you have
                                    any terms &amp; conditions?</h3>
                                <p class="hidden group-hover:block mt-3 text-lg text-gray-500">Pretium ac auctor quis
                                    urna orci feugiat. Vulputate tellus velit tellus orci auctor vel nulla facilisi ut.
                                    Ante nunc risus viverra vivamus. Eros amet at lectus ac ac nibh dignissim.</p>
                            </div>
                            <div class="pt-1">
                                <span class="hidden group-hover:block">
                                    <svg width="17" height="3" viewbox="0 0 17 3" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M15.4619 0.045166H1.46194C1.19673 0.045166 0.942374 0.150523 0.754838 0.338059C0.567302 0.525596 0.461945 0.77995 0.461945 1.04517C0.461945 1.31038 0.567302 1.56474 0.754838 1.75227C0.942374 1.93981 1.19673 2.04517 1.46194 2.04517H15.4619C15.7272 2.04517 15.9815 1.93981 16.1691 1.75227C16.3566 1.56474 16.4619 1.31038 16.4619 1.04517C16.4619 0.77995 16.3566 0.525596 16.1691 0.338059C15.9815 0.150523 15.7272 0.045166 15.4619 0.045166Z"
                                            fill="#FF460C"></path>
                                    </svg>
                                </span>
                                <span class="block group-hover:hidden">
                                    <svg width="17" height="16" viewbox="0 0 17 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M15.4619 7H9.46194V1C9.46194 0.734784 9.35659 0.48043 9.16905 0.292893C8.98151 0.105357 8.72716 0 8.46194 0C8.19673 0 7.94237 0.105357 7.75484 0.292893C7.5673 0.48043 7.46194 0.734784 7.46194 1V7H1.46194C1.19673 7 0.942374 7.10536 0.754838 7.29289C0.567302 7.48043 0.461945 7.73478 0.461945 8C0.461945 8.26522 0.567302 8.51957 0.754838 8.70711C0.942374 8.89464 1.19673 9 1.46194 9H7.46194V15C7.46194 15.2652 7.5673 15.5196 7.75484 15.7071C7.94237 15.8946 8.19673 16 8.46194 16C8.72716 16 8.98151 15.8946 9.16905 15.7071C9.35659 15.5196 9.46194 15.2652 9.46194 15V9H15.4619C15.7272 9 15.9815 8.89464 16.1691 8.70711C16.3566 8.51957 16.4619 8.26522 16.4619 8C16.4619 7.73478 16.3566 7.48043 16.1691 7.29289C15.9815 7.10536 15.7272 7 15.4619 7Z"
                                            fill="black"></path>
                                    </svg>
                                </span>
                            </div>
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-20 md:py-24">
            <div class="container px-4 mx-auto">
                <div
                    class="relative max-w-7xl mx-auto px-6 md:px-12 py-16 sm:py-28 rounded-3xl bg-vermilion-500 overflow-hidden">
                    <img class="absolute top-0 left-1/2 transform -translate-x-1/2 h-full object-cover"
                        src="{{ Vite::asset('resources/assets/images/cta/circle-bg.svg') }}" alt="">
                    <div class="relative text-center">
                        <span
                            class="block text-2xl sm:text-3xl md:text-4xl font-semibold text-vermilion-300 mb-6">Ready
                            to collaborate?</span>
                        <h2 class="font-heading text-4xl sm:text-5xl md:text-6xl font-bold text-white mb-8">
                            <span>Start your free trial</span>
                            <span class="font-serif italic">today!</span>
                        </h2>
                        <a class="relative group inline-block w-full sm:w-auto py-4 px-6 text-vermilion-500 hover:text-white font-semibold bg-white rounded-md overflow-hidden transition duration-300"
                            href="#">
                            <div
                                class="absolute top-0 right-full w-full h-full bg-gray-900 transform group-hover:translate-x-full group-hover:scale-110 transition duration-500">
                            </div>
                            <div class="relative flex items-center justify-center">
                                <span class="mr-4">Get Started</span>
                                <span>
                                    <svg width="8" height="12" viewbox="0 0 8 12" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M6.83 5.28999L2.59 1.04999C2.49704 0.956266 2.38644 0.881872 2.26458 0.831103C2.14272 0.780334 2.01202 0.754196 1.88 0.754196C1.74799 0.754196 1.61729 0.780334 1.49543 0.831103C1.37357 0.881872 1.26297 0.956266 1.17 1.04999C0.983753 1.23736 0.879211 1.49081 0.879211 1.75499C0.879211 2.01918 0.983753 2.27263 1.17 2.45999L4.71 5.99999L1.17 9.53999C0.983753 9.72736 0.879211 9.98081 0.879211 10.245C0.879211 10.5092 0.983753 10.7626 1.17 10.95C1.26344 11.0427 1.37426 11.116 1.4961 11.1658C1.61794 11.2155 1.7484 11.2408 1.88 11.24C2.01161 11.2408 2.14207 11.2155 2.26391 11.1658C2.38575 11.116 2.49656 11.0427 2.59 10.95L6.83 6.70999C6.92373 6.61703 6.99813 6.50643 7.04889 6.38457C7.09966 6.26271 7.1258 6.13201 7.1258 5.99999C7.1258 5.86798 7.09966 5.73728 7.04889 5.61542C6.99813 5.49356 6.92373 5.38296 6.83 5.28999Z"
                                            fill="currentColor"></path>
                                    </svg>
                                </span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        {{-- footer --}}
        <section class="relative py-20 overflow-hidden">
            <img class="absolute top-0 left-0"
                src="{{ Vite::asset('resources/assets/images/footers/blue-light-left.png') }}" alt="">
            <img class="absolute bottom-0 left-1/2"
                src="{{ Vite::asset('resources/assets/images/footers/vermilion-light-bottom.png') }}" alt="">
            <div class="relative container px-4 mx-auto">
                <div class="max-w-7xl mx-auto">
                    <div class="pb-8 mb-14 border-b border-gray-100 text-center">
                        <a class="inline-block" href="#">
                            <img class="h-15"
                                src="{{ Vite::asset('resources/assets/logos/logo-saturn-dark.svg') }}"
                                alt="">
                        </a>
                    </div>
                    <div class="flex flex-wrap -mb-5 -mx-6 items-center justify-center">
                        <div class="px-6 mb-5"><a class="inline-block text-gray-900 hover:text-gray-600"
                                href="#">Product</a></div>
                        <div class="px-6 mb-5"><a class="inline-block text-gray-900 hover:text-gray-600"
                                href="#">Features</a></div>
                        <div class="px-6 mb-5"><a class="inline-block text-gray-900 hover:text-gray-600"
                                href="#">Pricing</a></div>
                        <div class="px-6 mb-5"><a class="inline-block text-gray-900 hover:text-gray-600"
                                href="#">Resources</a></div>
                        <div class="px-6 mb-5"><a class="inline-block text-gray-900 hover:text-gray-600"
                                href="#">Careers</a></div>
                        <div class="px-6 mb-5"><a class="inline-block text-gray-900 hover:text-gray-600"
                                href="#">Help</a></div>
                        <div class="px-6 mb-5"><a class="inline-block text-gray-900 hover:text-gray-600"
                                href="#">Privacy</a></div>
                    </div>
                    <div class="mt-14 text-center">
                        <span class="text-gray-500">© 2023 saturn. All rights reserved.</span>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-layouts.masterLayout>
