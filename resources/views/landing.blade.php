<x-layouts.landingLayout title="COD ART">
    {{-- <img src="{{ Vite::asset('resources/assets/logos/logo-saturn-light.svg')}}" alt=""> --}}
    <div class="">

        {{-- header --}}
        <section class="relative pb-20 xl:pb-32 overflow-hidden">
            <img class="absolute top-0 left-1/2 transform -translate-x-1/2 ml-24"
                src="{{ Vite::asset('resources/assets/images/headers/center-orange-light.png') }}" alt="">
            <img class="absolute bottom-0 left-0"
                src="{{ Vite::asset('resources/assets/images/headers/blue-light-left-bottom.png') }}" alt="">
            <img class="absolute top-0 right-0 w-52 md:w-auto"
                src="{{ Vite::asset('resources/assets/images/headers/star-background-header.png') }}" alt="">
            <img class="hidden sm:block lg:hidden absolute top-1/2 w-64 sm:w-auto right-0 -mt-20 mr-5"
                src="{{ Vite::asset('resources/assets/images/headers/small-image.png') }}" alt="">

            <x-navbar />

            <div class="relative container px-4 mx-auto">
                <div class="lg:mb-32">
                    <x-ui.badge size="lg">
                        Making e-commerce easy!
                    </x-ui.badge>
                    <div class="relative">
                        <h1
                            class="font-heading text-5xl xs:text-6xl md:text-8xl xl:text-9xl font-bold text-gray-900 mb-8 sm:mb-14">
                            <span>Start your ecommerce journey</span>
                            <span class="font-serif italic">with less</span>
                        </h1>
                        <p class="text-gray-900 font-semibold mb-5 w-1/2" contenteditable="false">Comfortably manage
                            your Cash on Delivery orders in one place, from affiliates management to order confirmation
                            and
                            shipping</p>
                        <img class="hidden lg:block absolute bottom-0 right-0 rtl:right-[80%] -mb-6"
                            src="{{ Vite::asset('resources/assets/images/headers/small-image.png') }}" alt="">
                    </div>
                    <div class="lg:flex items-center gap-6 pt-5 rtl:justify-end rtl:flex-row-reverse">
                        <div class="mb-10 lg:mb-0">
                            <svg width="120" height="10" viewbox="0 0 120 10" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M1 4.25C0.585786 4.25 0.25 4.58579 0.25 5C0.25 5.41421 0.585786 5.75 1 5.75L1 4.25ZM120 5.00001L112.5 0.669883L112.5 9.33014L120 5.00001ZM1 5.75L113.25 5.75001L113.25 4.25001L1 4.25L1 5.75Z"
                                    fill="#1E2238"></path>
                            </svg>
                        </div>
                        <x-ui.button href="{{ route('login') }}" style="primary" bg-hover="bg-gray-900"
                            class="rounded-lg" icon="chevron-right">
                            Get Started
                            </x-ui-button>
                            <div class="flex items-center rtl:flex-row-reverse">
                                <img class="w-10 h-10"
                                    src="{{ Vite::asset('resources/assets/images/headers/avatar4.png') }}"
                                    alt=""><img class="w-10 h-10 -ml-2"
                                    src="{{ Vite::asset('resources/assets/images/headers/avatar3.png') }}"
                                    alt=""><img class="w-10 h-10 -ml-2"
                                    src="{{ Vite::asset('resources/assets/images/headers/avatar2.png') }}"
                                    alt=""><img class="w-10 h-10 -ml-2"
                                    src="{{ Vite::asset('resources/assets/images/headers/avatar1.png') }}"
                                    alt="">
                                <div class="p-px bg-white rounded-full -ml-2">
                                    <div class="flex items-center justify-center w-10 h-10 rounded-full bg-gray-200">
                                        <span class="font-semibold">5K+</span>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
                {{-- partners --}}
                <div class="xl:flex">
                    <div class="max-w-2xl mb-12 xl:mb-0 ltr:xl:mr-auto rtl:xl:mr-0">
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

        {{-- how COD Art works --}}
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
                                        class="flex flex-shrink-0 w-12 h-12 ltr:mr-6 rtl:ml-6 items-center justify-center bg-blue-100 rounded-full">
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
                                        class="flex flex-shrink-0 w-12 h-12 ltr:mr-6 rtl:ml-6 items-center justify-center bg-red-100 rounded-full">
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
                                        class="flex flex-shrink-0 w-12 h-12 ltr:mr-6 rtl:ml-6 items-center justify-center bg-yellow-300 rounded-full">
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
                                <div class="flex items-center justify-between">
                                    <div class="flex-none flex flex-col xs:w-auto mb-8 sm:mb-0 mr-4">
                                        <span class="text-3xl font-bold text-gray-900 leading-tight">
                                            Only $50
                                        </span>
                                        <span class="text-sm text-gray-500">for Silver package</span>
                                    </div>
                                    <x-ui.button style="primary" bg-hover="bg-gray-900" icon="arrow-trending-up"
                                        class="flex-1">
                                        See Our plans
                                        </x-ui-button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- product over view --}}
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
                                <x-ui.badge size="sm">PRODUCT OVERVIEW</x-ui.badge>
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

        {{-- testimonials --}}
        <section class="relative py-20 lg:pt-32 lg:pb-36 bg-gray-50 overflow-hidden">
            <img class="absolute top-0 right-0 mt-6 -mr-24 md:-mr-0"
                src="{{ Vite::asset('resources/assets/images/testimonials/circle-star-bg.svg') }}" alt="">
            <div class="relative container px-4 mx-auto">
                <div class="max-w-7xl mx-auto">
                    <div class="flex flex-wrap -mx-4 items-center mb-16">
                        <div class="w-full lg:w-2/3 px-4 mb-12 lg:mb-0">
                            <x-ui.badge size="sm">TESTIMONIALS</x-ui.badge>
                            <h1 class="font-heading text-4xl xs:text-6xl font-bold text-gray-900 mb-4">
                                <span>What our clients</span>
                                <span class="font-serif italic">said</span>
                            </h1>
                            <p class="text-gray-500">Risus viverra justo sagittis vestibulum metus.</p>
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

        {{-- faq --}}
        <section class="relative py-20 overflow-hidden bg-gray-50">
            <img class="absolute top-0 left-0 mt-44"
                src="{{ Vite::asset('resources/assets/images/faq/light-blue-left.png') }}" alt="">
            <img class="absolute top-0 right-0 mt-10"
                src="{{ Vite::asset('resources/assets/images/faq/star-right.svg') }}" alt="">
            <div class="relative container px-4 mx-auto">
                <div class="max-w-5xl mx-auto">
                    <div class="text-center mb-24">
                        <x-ui.badge size="sm">FREQUENTLY
                            ASK QUESTION</x-badge>
                            <h1 class="font-heading text-5xl xs:text-6xl md:text-7xl font-bold text-gray-900">
                                <span>You ask? We</span>
                                <span class="font-serif italic">answer</span>
                            </h1>
                    </div>
                    {{-- <div class="pt-16 sm:pt-24 px-8 sm:px-20 pb-16 bg-white rounded-3xl shadow-lg">
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
                    </div> --}}

                    <div class="flow-root pt-16 sm:pt-24 px-8 sm:px-20 pb-24 bg-white rounded-3xl shadow-lg">
                        <div class="-my-8 divide-y divide-gray-100">
                            <details class="group py-8 [&_summary::-webkit-details-marker]:hidden" open>
                                <summary class="flex cursor-pointer items-center justify-between text-gray-900">
                                    <h2 class="text-lg font-medium text-vermilion-500">
                                        Can I import goods with my supplier or should I do it through yours?
                                    </h2>

                                    <span class="relative size-5 shrink-0">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="absolute inset-0 size-5 opacity-100 group-open:opacity-0"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                            stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>

                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="absolute inset-0 size-5 opacity-0 group-open:opacity-100"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                            stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </span>
                                </summary>

                                <p class="mt-4 leading-relaxed text-gray-700">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab hic veritatis molestias
                                    culpa
                                    in, recusandae laboriosam neque aliquid libero nesciunt voluptate dicta quo officiis
                                    explicabo consequuntur distinctio corporis earum similique!
                                </p>
                            </details>

                            <details class="group py-8 [&_summary::-webkit-details-marker]:hidden">
                                <summary
                                    class="flex cursor-pointer items-center justify-between gap-1.5 text-gray-900">
                                    <h2 class="text-lg text-vermilion-500 font-medium">
                                        If I open an account with CODNETWORK will I have to sign a contract or any legal
                                        papers?
                                    </h2>

                                    <span class="relative size-5 shrink-0">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="absolute inset-0 size-5 opacity-100 group-open:opacity-0"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                            stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>

                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="absolute inset-0 size-5 opacity-0 group-open:opacity-100"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                            stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </span>
                                </summary>

                                <p class="mt-4 leading-relaxed text-gray-700">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab hic veritatis molestias
                                    culpa
                                    in, recusandae laboriosam neque aliquid libero nesciunt voluptate dicta quo officiis
                                    explicabo consequuntur distinctio corporis earum similique!
                                </p>
                            </details>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- cta --}}
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
                        <x-ui.button style="white" size="lg" bg-hover="bg-gray-900" icon="chevron-right"
                            class="rounded-lg">
                            Get Started
                        </x-ui.button>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-layouts.landingLayout>
