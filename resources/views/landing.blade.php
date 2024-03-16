<x-layouts.landingLayout title="COD ART">
    <section class="pb-12 md:pb-24">
        {{-- Announcement bar --}}
        <x-banner>
            This is an announcement
        </x-banner>
        {{-- Navigation --}}
        <x-navbar />

        {{-- header --}}
        <div class="relative">
            <img class="hidden lg:block absolute top-0 right-0 w-full max-w-lg xl:max-w-xl"
                src="{{ Vite::asset('resources/assets/headers/header-5-right.png') }}" alt="">
            <div class="container px-4 mx-auto">
                <div
                    class="max-w-sm sm:max-w-lg xl:max-w-2xl ltr:lg:mr-auto rtl:lg:mr-auto lg:pt-10 lg:pr-10 pb-12 lg:pb-28">
                    <h1 class="font-heading tracking-tight text-4xl sm:text-5xl lg:text-6xl font-bold mb-6">
                        Start your ecommerce journey with less.
                    </h1>
                    <p class="max-w-sm xl:max-w-none text-lg text-gray-500 mb-10">Easily store, organize, and access
                        valuable assets from anywhere.</p>
                    <div class="flex flex-col xs:flex-row items-center mb-10">
                        <a class="group relative flex xs:inline-flex w-full xs:w-auto mb-4 xs:mb-0 ltr:xs:mr-8 rtl:xs:ml-8 items-center justify-center px-5 h-12 font-bold text-white bg-gradient-to-br from-cyanGreen-800 to-cyan-800 rounded-lg transition-all duration-300"
                            href="#">
                            <div
                                class="absolute top-0 left-0 w-full h-full rounded-lg ring-4 ring-green-300 animate-pulse group-hover:ring-0 transition duration-300">
                            </div>
                            <span>Try Aurora For Free</span>
                        </a>
                        <a class="group inline-flex items-center font-bold text-gray-900 hover:text-yellowGreen-700 transition duration-300"
                            href="#">
                            <span class="mr-2">Watch video</span>
                            <span>
                                <svg width="20" height="20" viewbox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.5 5L12.5 10L7.5 15" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </span>
                        </a>
                    </div>

                </div>
            </div>
            <img class="lg:hidden block w-full pl-8 ml-auto max-w-3xl"
                src="{{ Vite::asset('resources/assets/headers/header-5-right.png') }}" alt="">
        </div>
        <div class="hidden navbar-menu fixed top-0 left-0 bottom-0 w-5/6 max-w-md z-50">
            <div class="navbar-backdrop fixed inset-0 bg-teal-800 opacity-70"></div>
            <nav class="relative flex flex-col py-6 px-10 w-full h-full bg-white overflow-y-auto">
                <div class="flex mb-auto items-center">
                    <a class="inline-block mr-auto" href="#">
                        <img class="h-10" src="{{ Vite::asset('resources/assets/logos/aurora-logo.svg') }}"
                            alt="">
                    </a>
                    <a class="navbar-close" href="#">
                        <svg width="24" height="24" viewbox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 18L18 6M6 6L18 18" stroke="#111827" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                        </svg>
                    </a>
                </div>
                <div class="py-12 mb-auto">
                    <ul class="flex-col">
                        <li class="mb-6"><a class="inline-block text-black" href="#">Product</a></li>
                        <li class="mb-6"><a class="inline-block text-black" href="#">Features</a></li>
                        <li class="mb-6"><a class="inline-block text-black" href="#">Pricing</a></li>
                        <li><a class="inline-block text-black" href="#">Resources</a></li>
                    </ul>
                </div>
                <div>
                    <a class="flex items-center justify-center h-10 mb-4 px-4 text-center text-sm text-gray-700 font-semibold border border-gray-200 hover:bg-gray-100 shadow-sm rounded-lg transition duration-200"
                        href="#">Login</a><a
                        class="flex items-center justify-center h-10 px-4 text-center text-sm text-white font-semibold border border-yellowGreen-600 bg-yellowGreen-500 hover:bg-yellowGreen-600 rounded-lg transition duration-200"
                        href="#">Get Started</a>
                </div>
            </nav>
        </div>
    </section>

    {{-- join us --}}
    <section class="py-12 md:py-24 bg-radial-dark-green">
        <div class="container px-4 mx-auto">
            <div class="max-w-6xl mx-auto">
                <div class="xs:max-w-sm md:max-w-sm lg:max-w-4xl mx-auto text-center mb-24">
                    <span
                        class="inline-flex items-center h-6 mb-4 px-2 text-xs uppercase font-medium text-white bg-teal-800 rounded-full">HOW
                        IT WORKS</span>
                    <h1 class="font-heading tracking-tight text-4xl sm:text-5xl font-bold text-white mb-4">Join us in
                        30 seconds</h1>
                    <p class="text-lg text-gray-200">Using our platform is easy and straightforward. Here's how it
                        works:</p>
                </div>
                <div class="flex flex-wrap -mx-4 md:-mx-6 items-center">
                    <div class="w-full md:px-6 mb-16 lg:mb-0 lg:w-1/2">
                        <div class="max-w-xs mx-auto lg:mx-0">
                            <img class="block w-full mb-8"
                                src="{{ Vite::asset('resources/assets/how-it-works/image-gradient-opacity-1.png') }}"
                                alt="">
                            <div class="flex">
                                <div
                                    class="flex-shrink-0 inline-flex w-8 h-8 items-center justify-center text-base font-bold text-white bg-white bg-opacity-10 rounded-full transition duration-200">
                                    1</div>
                                <div class="ml-3">
                                    <h6 class="text-xl font-bold text-white mb-1">Sellers</h6>
                                    <p class="text-lg text-gray-200">Create an account by simply setting up your email
                                        and password.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full px-4 md:px-6 mb-16 lg:mb-0 lg:w-1/2">
                        <div class="max-w-xs mx-auto lg:mx-0">
                            <img class="block w-full mb-8"
                                src="{{ Vite::asset('resources/assets/how-it-works/image-gradient-opacity-2.png') }}"
                                alt="">
                            <div class="flex">
                                <div
                                    class="flex-shrink-0 inline-flex w-8 h-8 items-center justify-center text-base font-bold text-white bg-white bg-opacity-10 rounded-full transition duration-200">
                                    2</div>
                                <div class="ml-3">
                                    <h6 class="text-xl font-bold text-white mb-1">Affiliates</h6>
                                    <p class="text-lg text-gray-200">Browse through our intuitive interface to discover
                                        the features.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    {{-- features --}}
    <section class="py-12 md:py-24">
        <div class="container px-4 mx-auto">
            <div>
                <div class="max-w-2xl mx-auto mb-24 text-center">
                    <h1 class="font-heading tracking-tight text-4xl sm:text-5xl font-bold mb-4">Why you should choose
                        us?</h1>
                    <p class="text-gray-500">Organizing files can be a daunting task, especially if you have a lot of
                        them.</p>
                    <p class="text-gray-500">However, with the right tools and strategies, it can be an easy and
                        stress-free process.</p>
                </div>
                <div class="flex flex-wrap -mx-4 -mb-16">
                    <div class="w-full sm:w-1/2 lg:w-1/3 px-4 mb-16">
                        <div class="max-w-xs lg:px-4 mx-auto text-center">
                            <div class="flex items-center justify-center w-16 h-16 mx-auto rounded-full bg-gray-50">
                                <svg width="33" height="32" viewbox="0 0 33 32" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M4.33301 23.4V8.6C4.33301 8.26863 4.60164 8 4.93301 8H22.6786C22.8792 8 23.0665 8.10026 23.1778 8.26718L28.1111 15.6672C28.2455 15.8687 28.2455 16.1313 28.1111 16.3328L23.1778 23.7328C23.0665 23.8997 22.8792 24 22.6786 24H4.93301C4.60164 24 4.33301 23.7314 4.33301 23.4Z"
                                        stroke="#041109" stroke-width="1.5"></path>
                                </svg>
                            </div>
                            <div class="mt-3">
                                <h5 class="text-xl font-bold mb-1">Auto-tagging</h5>
                                <p class="text-lg text-gray-500">We care for your well-being with dental and vision
                                    benefits.</p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full sm:w-1/2 lg:w-1/3 px-4 mb-16">
                        <div class="max-w-xs lg:px-4 mx-auto text-center">
                            <div class="flex items-center justify-center w-16 h-16 mx-auto rounded-full bg-gray-50">
                                <svg width="33" height="32" viewbox="0 0 33 32" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M3 14.6667V5.93334C3 5.60197 3.26863 5.33334 3.6 5.33334H12.1114C12.2546 5.33334 12.3931 5.38458 12.5019 5.47779L16.8315 9.1889C16.9402 9.28211 17.0787 9.33334 17.222 9.33334H29.0667C29.398 9.33334 29.6667 9.60197 29.6667 9.93334V14.6667M3 14.6667V26.0667C3 26.398 3.26863 26.6667 3.6 26.6667H29.0667C29.398 26.6667 29.6667 26.398 29.6667 26.0667V14.6667M3 14.6667H29.6667"
                                        stroke="#041109" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                </svg>
                            </div>
                            <div class="mt-3">
                                <h5 class="text-xl font-bold mb-1">Categorized by collections</h5>
                                <p class="text-lg text-gray-500">We care for your well-being with dental and vision
                                    benefits.</p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full sm:w-1/2 lg:w-1/3 px-4 mb-16">
                        <div class="max-w-xs lg:px-4 mx-auto text-center">
                            <div class="flex items-center justify-center w-16 h-16 mx-auto rounded-full bg-gray-50">
                                <svg width="33" height="32" viewbox="0 0 33 32" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M19 15.9968C19 12.6745 15.9107 9.33334 12.1429 9.33334C11.6965 9.33334 10.2254 9.33335 9.85714 9.33335C6.07005 9.33335 3 12.3167 3 15.9968C3 19.1681 5.27964 21.8219 8.33333 22.4952C8.82341 22.6033 9.33342 22.6603 9.85714 22.6603"
                                        stroke="#041109" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                    <path
                                        d="M13.666 15.9968C13.666 19.3191 16.7553 22.6603 20.5232 22.6603C20.9695 22.6603 22.4406 22.6603 22.8089 22.6603C26.596 22.6603 29.666 19.677 29.666 15.9968C29.666 12.8256 27.3864 10.1718 24.3327 9.49843C23.8426 9.39037 23.3326 9.33331 22.8089 9.33331"
                                        stroke="#041109" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                </svg>
                            </div>
                            <div class="mt-3">
                                <h5 class="text-xl font-bold mb-1">Share links</h5>
                                <p class="text-lg text-gray-500">We care for your well-being with dental and vision
                                    benefits.</p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full sm:w-1/2 lg:w-1/3 px-4 mb-16">
                        <div class="max-w-xs lg:px-4 mx-auto text-center">
                            <div class="flex items-center justify-center w-16 h-16 mx-auto rounded-full bg-gray-50">
                                <svg width="33" height="32" viewbox="0 0 33 32" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_3018_21098)">
                                        <path
                                            d="M1.66602 26.6667V23C1.66602 19.134 4.80002 16 8.66601 16H13.3327C17.1987 16 20.3327 19.134 20.3327 23V26.6667"
                                            stroke="#041109" stroke-width="1.5" stroke-linecap="round"></path>
                                        <path
                                            d="M17.666 18.6667V18.6667C17.666 14.9848 20.6508 12 24.3327 12V12C28.0146 12 30.9993 14.9848 30.9993 18.6667V19.3333"
                                            stroke="#041109" stroke-width="1.5" stroke-linecap="round"></path>
                                        <path
                                            d="M10.9993 16C13.9449 16 16.3327 13.6122 16.3327 10.6667C16.3327 7.72115 13.9449 5.33334 10.9993 5.33334C8.05383 5.33334 5.66602 7.72115 5.66602 10.6667C5.66602 13.6122 8.05383 16 10.9993 16Z"
                                            stroke="#041109" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                        <path
                                            d="M24.333 12C26.5421 12 28.333 10.2091 28.333 8C28.333 5.79086 26.5421 4 24.333 4C22.1239 4 20.333 5.79086 20.333 8C20.333 10.2091 22.1239 12 24.333 12Z"
                                            stroke="#041109" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                    </g>
                                </svg>
                            </div>
                            <div class="mt-3">
                                <h5 class="text-xl font-bold mb-1">Invite team members</h5>
                                <p class="text-lg text-gray-500">We care for your well-being with dental and vision
                                    benefits.</p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full sm:w-1/2 lg:w-1/3 px-4 mb-16">
                        <div class="max-w-xs lg:px-4 mx-auto text-center">
                            <div class="flex items-center justify-center w-16 h-16 mx-auto rounded-full bg-gray-50">
                                <svg width="33" height="32" viewbox="0 0 33 32" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M28.333 4.6V27.4C28.333 27.7314 28.0644 28 27.733 28H4.93301C4.60164 28 4.33301 27.7314 4.33301 27.4V4.6C4.33301 4.26863 4.60164 4 4.93301 4H27.733C28.0644 4 28.333 4.26863 28.333 4.6Z"
                                        stroke="#041109" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                    <path
                                        d="M13.2307 11.1796C12.8307 10.9511 12.333 11.2399 12.333 11.7006V20.2994C12.333 20.7601 12.8307 21.0489 13.2307 20.8204L20.7547 16.5209C21.1578 16.2906 21.1578 15.7094 20.7547 15.4791L13.2307 11.1796Z"
                                        stroke="#041109" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                </svg>
                            </div>
                            <div class="mt-3">
                                <h5 class="text-xl font-bold mb-1">Video live preview</h5>
                                <p class="text-lg text-gray-500">We care for your well-being with dental and vision
                                    benefits.</p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full sm:w-1/2 lg:w-1/3 px-4 mb-16">
                        <div class="max-w-xs lg:px-4 mx-auto text-center">
                            <div class="flex items-center justify-center w-16 h-16 mx-auto rounded-full bg-gray-50">
                                <svg width="33" height="32" viewbox="0 0 33 32" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_3018_21112)">
                                        <path d="M11 24L15 28L21.6667 21.3333" stroke="#041109" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path
                                            d="M26.9993 23.4763C28.991 22.6962 30.9993 20.9185 30.9993 17.3333C30.9993 12 26.5549 10.6667 24.3327 10.6667C24.3327 8 24.3327 2.66666 16.3327 2.66666C8.33268 2.66666 8.33268 8 8.33268 10.6667C6.11046 10.6667 1.66602 12 1.66602 17.3333C1.66602 20.9185 3.67438 22.6962 5.66602 23.4763"
                                            stroke="#041109" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                    </g>
                                </svg>
                            </div>
                            <div class="mt-3">
                                <h5 class="text-xl font-bold mb-1">100GB cloud storage</h5>
                                <p class="text-lg text-gray-500">We care for your well-being with dental and vision
                                    benefits.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- numbers --}}
    <section class="py-12 md:py-24 bg-radial-dark-green">
        <div class="container px-4 mx-auto">
            <div class="flex flex-wrap -mx-4">
                <div class="w-full lg:w-5/12 xl:w-1/2 px-4 mb-10 lg:mb-0">
                    <div class="max-w-md">
                        <h3 class="font-heading tracking-tight text-4xl md:text-5xl font-bold text-white mb-4">Let the
                            numbers do the talking</h3>
                        <p class="text-lg text-gray-200">Aurora makes saving and organizing marketing assets a
                            delightful experience.</p>
                    </div>
                </div>
                <div class="w-full lg:w-7/12 xl:w-1/2 px-4">
                    <div
                        class="pt-10 lg:pt-0 lg:pl-10 border-t lg:border-t-0 lg:border-l border-white border-opacity-20">
                        <div class="flex flex-wrap -mx-4">
                            <div class="w-full xs:w-1/2 px-4 mb-10">
                                <div class="text-center xs:text-left">
                                    <span class="block mb-3 text-4xl font-bold text-white">4.7</span>
                                    <span class="text-lg text-gray-200">Stars on App Store</span>
                                </div>
                            </div>
                            <div class="w-full xs:w-1/2 px-4 mb-10">
                                <div class="text-center xs:text-left">
                                    <span class="block mb-3 text-4xl font-bold text-white">2M+</span>
                                    <span class="text-lg text-gray-200">Happy Global Users</span>
                                </div>
                            </div>
                            <div class="w-full xs:w-1/2 px-4 mb-10">
                                <div class="text-center xs:text-left">
                                    <span class="block mb-3 text-4xl font-bold text-white">150+</span>
                                    <span class="text-lg text-gray-200">File Extensions Supported</span>
                                </div>
                            </div>
                            <div class="w-full xs:w-1/2 px-4 mb-10">
                                <div class="text-center xs:text-left">
                                    <span class="block mb-3 text-4xl font-bold text-white">80%</span>
                                    <span class="text-lg text-gray-200">Productivity Increased</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- testimonials --}}
    <section class="py-12 md:py-24">
        <div class="container px-4 mx-auto">
            <div class="max-w-7xl mx-auto">
                <div class="max-w-2xl mx-auto mb-20 text-center">
                    <span
                        class="inline-flex items-center h-6 mb-6 px-2 text-xs uppercase font-medium text-gray-700 bg-gray-100 rounded-full">TESTIMONIALS</span>
                    <h1 class="font-heading tracking-tight text-4xl sm:text-5xl font-bold">Marketers love our service
                    </h1>
                </div>
                <div class="flex flex-wrap -mx-4">
                    <div class="w-full lg:w-1/3 px-4 mb-10 lg:mb-0">
                        <div
                            class="flex flex-col max-w-sm mx-auto lg:max-w-none items-start h-full p-8 bg-gray-50 border border-gray-200 rounded-xl">
                            <img class="block h-8 mb-8"
                                src="{{ Vite::asset('resources/assets/logo-clouds/logo-ipsum-6.svg') }}"
                                alt="">
                            <div class="pr-4">
                                <p class="text-lg font-medium mb-20">“We use Aurora daily and we’re very happy that
                                    they are created this amazing bookmarking platform.”</p>
                                <div class="flex items-center mt-auto">
                                    <img class="block h-12 w-12 rounded-full"
                                        src="{{ Vite::asset('resources/assets/blog/avatar-medium.png') }}"
                                        alt="">
                                    <div class="pl-4">
                                        <span class="block font-semibold">Ethan Rauf</span>
                                        <span class="text-sm text-gray-500">Founder of AIME Inc.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/3 px-4 mb-10 lg:mb-0">
                        <div
                            class="flex flex-col max-w-sm mx-auto lg:max-w-none items-start h-full p-8 bg-gray-50 border border-gray-200 rounded-xl">
                            <img class="block h-8 mb-8"
                                src="{{ Vite::asset('resources/assets/logo-clouds/logo-ipsum-1.svg') }}"
                                alt="">
                            <div class="pr-4">
                                <p class="text-lg font-medium mb-20">“We use Aurora daily and we’re very happy that
                                    they are created this amazing bookmarking platform.”</p>
                                <div class="flex items-center mt-auto">
                                    <img class="block h-12 w-12 rounded-full"
                                        src="{{ Vite::asset('resources/assets/blog/avatar-medium.png') }}"
                                        alt="">
                                    <div class="pl-4">
                                        <span class="block font-semibold">Hanna Stanton</span>
                                        <span class="text-sm text-gray-500">Founder of AIME Inc.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/3 px-4">
                        <div
                            class="flex flex-col max-w-sm mx-auto lg:max-w-none items-start h-full p-8 bg-gray-50 border border-gray-200 rounded-xl">
                            <img class="block h-8 mb-8"
                                src="{{ Vite::asset('resources/assets/logo-clouds/logo-ipsum-2.svg') }}"
                                alt="">
                            <div class="pr-4">
                                <p class="text-lg font-medium mb-20">“We use Aurora daily and we’re very happy that
                                    they are created this amazing bookmarking platform.”</p>
                                <div class="flex items-center mt-auto">
                                    <img class="block h-12 w-12 rounded-full"
                                        src="{{ Vite::asset('resources/assets/blog/avatar-medium.png') }}"
                                        alt="">
                                    <div class="pl-4">
                                        <span class="block font-semibold">Cooper Levin</span>
                                        <span class="text-sm text-gray-500">Founder of AIME Inc.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- footer --}}
    <x-footer />
</x-layouts.landingLayout>
