<x-layouts.landingLayout title="Affiliate Store">

    {{-- nav section --}}
    <x-store.navbar />

    {{-- header carousel --}}
    <section class="relative bg-black bg-cover overflow-hidden h-[600px]"
        style="background-image: url(https://images.unsplash.com/photo-1556905055-8f358a7a47b2?q=80&amp;w=2070&amp;auto=format&amp;fit=crop&amp;ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D)">
        <div class="relative h-full">
            <div class="relative px-4 h-full">
                <div class="pt-24 pb-20 text-center sm:flex items-center justify-between gap-2 h-full">
                    <a class="hidden sm:block group" href="#">
                        <div
                            class="w-10 h-10 lg:h-16 lg:w-16 flex items-center justify-center bg-white rounded-full group-hover:bg-purple-500 transition duration-200">
                            <div class="text-rhino-500 group-hover:text-white transition duration-200">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewbox="0 0 24 24" fill="none">
                                    <path
                                        d="M8.5002 12.8L14.2002 18.4C14.6002 18.8 15.2002 18.8 15.6002 18.4C16.0002 18 16.0002 17.4 15.6002 17L10.7002 12L15.6002 7C16.0002 6.6 16.0002 6 15.6002 5.6C15.4002 5.4 15.2002 5.3 14.9002 5.3C14.6002 5.3 14.4002 5.4 14.2002 5.6L8.5002 11.2C8.1002 11.7 8.1002 12.3 8.5002 12.8C8.5002 12.7 8.5002 12.7 8.5002 12.8Z"
                                        fill="currentColor"></path>
                                </svg>
                            </div>
                        </div>
                    </a>
                    <div class="sm:hidden flex mt-14 items-center justify-center">
                        <a class="group inline-block mr-4" href="#">
                            <div
                                class="w-10 h-10 lg:h-16 lg:w-16 flex items-center justify-center bg-white rounded-full group-hover:bg-purple-500 transition duration-200">
                                <div class="text-rhino-500 group-hover:text-white transition duration-200">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewbox="0 0 24 24" fill="none">
                                        <path
                                            d="M8.5002 12.8L14.2002 18.4C14.6002 18.8 15.2002 18.8 15.6002 18.4C16.0002 18 16.0002 17.4 15.6002 17L10.7002 12L15.6002 7C16.0002 6.6 16.0002 6 15.6002 5.6C15.4002 5.4 15.2002 5.3 14.9002 5.3C14.6002 5.3 14.4002 5.4 14.2002 5.6L8.5002 11.2C8.1002 11.7 8.1002 12.3 8.5002 12.8C8.5002 12.7 8.5002 12.7 8.5002 12.8Z"
                                            fill="currentColor"></path>
                                    </svg>
                                </div>
                            </div>
                        </a>
                        <a class="group inline-block" href="#">
                            <div
                                class="w-10 h-10 lg:h-16 lg:w-16 flex items-center justify-center bg-white rounded-full group-hover:bg-purple-500 transition duration-200">
                                <div class="text-rhino-500 group-hover:text-white transition duration-200">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewbox="0 0 24 24" fill="none">
                                        <path
                                            d="M15.5397 11.29L9.87974 5.64C9.78677 5.54627 9.67617 5.47188 9.55431 5.42111C9.43246 5.37034 9.30175 5.3442 9.16974 5.3442C9.03773 5.3442 8.90702 5.37034 8.78516 5.42111C8.6633 5.47188 8.5527 5.54627 8.45974 5.64C8.27349 5.82736 8.16895 6.08081 8.16895 6.345C8.16895 6.60918 8.27349 6.86264 8.45974 7.05L13.4097 12.05L8.45974 17C8.27349 17.1874 8.16895 17.4408 8.16895 17.705C8.16895 17.9692 8.27349 18.2226 8.45974 18.41C8.55235 18.5045 8.6628 18.5797 8.78467 18.6312C8.90655 18.6826 9.03743 18.7094 9.16974 18.71C9.30204 18.7094 9.43293 18.6826 9.5548 18.6312C9.67668 18.5797 9.78712 18.5045 9.87974 18.41L15.5397 12.76C15.6412 12.6664 15.7223 12.5527 15.7777 12.4262C15.8331 12.2997 15.8617 12.1631 15.8617 12.025C15.8617 11.8869 15.8331 11.7503 15.7777 11.6238C15.7223 11.4973 15.6412 11.3836 15.5397 11.29Z"
                                            fill="currentColor"></path>
                                    </svg>
                                </div>
                            </div>
                        </a>
                    </div>
                    <a class="hidden sm:block group" href="#">
                        <div
                            class="w-10 h-10 lg:h-16 lg:w-16 flex items-center justify-center bg-white rounded-full group-hover:bg-purple-500 transition duration-200">
                            <div class="text-rhino-500 group-hover:text-white transition duration-200">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewbox="0 0 24 24" fill="none">
                                    <path
                                        d="M15.5397 11.29L9.87974 5.64C9.78677 5.54627 9.67617 5.47188 9.55431 5.42111C9.43246 5.37034 9.30175 5.3442 9.16974 5.3442C9.03773 5.3442 8.90702 5.37034 8.78516 5.42111C8.6633 5.47188 8.5527 5.54627 8.45974 5.64C8.27349 5.82736 8.16895 6.08081 8.16895 6.345C8.16895 6.60918 8.27349 6.86264 8.45974 7.05L13.4097 12.05L8.45974 17C8.27349 17.1874 8.16895 17.4408 8.16895 17.705C8.16895 17.9692 8.27349 18.2226 8.45974 18.41C8.55235 18.5045 8.6628 18.5797 8.78467 18.6312C8.90655 18.6826 9.03743 18.7094 9.16974 18.71C9.30204 18.7094 9.43293 18.6826 9.5548 18.6312C9.67668 18.5797 9.78712 18.5045 9.87974 18.41L15.5397 12.76C15.6412 12.6664 15.7223 12.5527 15.7777 12.4262C15.8331 12.2997 15.8617 12.1631 15.8617 12.025C15.8617 11.8869 15.8331 11.7503 15.7777 11.6238C15.7223 11.4973 15.6412 11.3836 15.5397 11.29Z"
                                        fill="currentColor"></path>
                                </svg>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>



    {{-- products --}}
    <section class="py-12 md:py-10 lg:py-10">
        <div class="max-w-7xl px-4 mx-auto">
            <h2 class="text-4xl text-center font-heading font-semibold text-rhino-600 tracking-xs mb-1">PROMOTIONS</h2>
            <p class="text-xs text-center mb-14">Find everything you want</p>
            {{-- cards --}}
            <div class="flex flex-wrap -mx-4 -mb-8">
                <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-8">
                    <div class="block max-w-sm md:max-w-none mx-auto">
                        <div class="flex items-end justify-end h-60 mb-4 bg-coolGray-100 rounded-xl overflow-hidden">
                            <img class="block"
                                src="{{ Vite::asset('resources/assets/product-blocks/no-bg-product-10.png') }}"
                                alt="">
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="max-w-xs ltr:pr-32"> <span class="block text-base text-rhino-500 mb-1">White
                                    Label
                                    Cap</span>
                                <div> <span class="text-base text-rhino-300">$ 199.00</span> <span
                                        class="text-sm text-red-500 line-through">$ 300</span> </div>
                            </div>
                            <div class="flex-shrink-0"><a
                                    class="inline-flex h-10 py-1 px-4 items-center justify-center text-sm font-medium text-purple-500 hover:text-white bg-white border border-purple-500 rounded hover:bg-purple-500 transition duration-200"
                                    href="/affiliate/product">Buy now</a></div>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-8">
                    <div class="block max-w-sm md:max-w-none mx-auto">
                        <div class="flex items-center h-60 mb-4 bg-coolGray-100 rounded-xl overflow-hidden"> <img
                                class="block"
                                src="{{ Vite::asset('resources/assets/product-blocks/product-no-bg6.png') }}"
                                alt="">
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="max-w-xs ltr:pr-32"> <span class="block text-base text-rhino-500 mb-1">Blue
                                    High
                                    School</span> <span class="block text-base text-rhino-300">$ 65.00</span> </div>
                            <div class="flex-shrink-0"><a
                                    class="inline-flex h-10 py-1 px-4 items-center justify-center text-sm font-medium text-purple-500 hover:text-white bg-white border border-purple-500 rounded hover:bg-purple-500 transition duration-200"
                                    href="#">Buy now</a></div>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-8">
                    <div class="block max-w-sm md:max-w-none mx-auto">
                        <div class="flex justify-center h-60 mb-4 bg-coolGray-100 rounded-xl overflow-hidden"> <img
                                class="block h-full"
                                src="{{ Vite::asset('resources/assets/product-blocks/product-no-bg-12.png') }}"
                                alt=""></div>
                        <div class="flex items-center justify-between">
                            <div class="max-w-xs ltr:pr-32"> <span class="block text-base text-rhino-500 mb-1">Natural
                                    leather shop</span> <span class="block text-base text-rhino-300">$ 129.00</span>
                            </div>
                            <div class="flex-shrink-0"><a
                                    class="inline-flex h-10 py-1 px-4 items-center justify-center text-sm font-medium text-purple-500 hover:text-white bg-white border border-purple-500 rounded hover:bg-purple-500 transition duration-200"
                                    href="#">Buy now</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-12">
                <a class="inline-flex h-12 py-2 px-4 items-center justify-center text-sm font-medium text-white bg-purple-500 hover:bg-purple-600 rounded transition duration-200"
                    href="#">Show more
                </a>
            </div>
        </div>
    </section>

    <section class="py-12 md:py-10 lg:py-10">
        <div class="max-w-7xl px-4 mx-auto">
            <h2 class="text-4xl text-center font-heading font-semibold text-rhino-600 tracking-xs mb-1">PROMOTIONS</h2>
            <p class="text-xs text-center mb-14">Find everything you want</p>
            <div class="flex flex-wrap -mx-4 -mb-8">
                <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-8">
                    <div class="block max-w-sm md:max-w-none mx-auto">
                        <div class="flex items-end justify-end h-60 mb-4 bg-coolGray-100 rounded-xl overflow-hidden">
                            <img class="block"
                                src="{{ Vite::asset('resources/assets/product-blocks/no-bg-product-10.png') }}"
                                alt="">
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="max-w-xs ltr:pr-32"> <span class="block text-base text-rhino-500 mb-1">White
                                    Label
                                    Cap</span>
                                <div> <span class="text-base text-rhino-300">$ 199.00</span> <span
                                        class="text-sm text-red-500 line-through">$ 300</span> </div>
                            </div>
                            <div class="flex-shrink-0"><a
                                    class="inline-flex h-10 py-1 px-4 items-center justify-center text-sm font-medium text-purple-500 hover:text-white bg-white border border-purple-500 rounded hover:bg-purple-500 transition duration-200"
                                    href="#">Buy now</a></div>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-8">
                    <div class="block max-w-sm md:max-w-none mx-auto">
                        <div class="flex items-center h-60 mb-4 bg-coolGray-100 rounded-xl overflow-hidden"> <img
                                class="block"
                                src="{{ Vite::asset('resources/assets/product-blocks/product-no-bg6.png') }}"
                                alt="">
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="max-w-xs ltr:pr-32"> <span class="block text-base text-rhino-500 mb-1">Blue
                                    High
                                    School</span> <span class="block text-base text-rhino-300">$ 65.00</span> </div>
                            <div class="flex-shrink-0"><a
                                    class="inline-flex h-10 py-1 px-4 items-center justify-center text-sm font-medium text-purple-500 hover:text-white bg-white border border-purple-500 rounded hover:bg-purple-500 transition duration-200"
                                    href="#">Buy now</a></div>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-8">
                    <div class="block max-w-sm md:max-w-none mx-auto">
                        <div class="flex justify-center h-60 mb-4 bg-coolGray-100 rounded-xl overflow-hidden"> <img
                                class="block h-full"
                                src="{{ Vite::asset('resources/assets/product-blocks/product-no-bg-12.png') }}"
                                alt=""></div>
                        <div class="flex items-center justify-between">
                            <div class="max-w-xs ltr:pr-32"> <span class="block text-base text-rhino-500 mb-1">Natural
                                    leather shop</span> <span class="block text-base text-rhino-300">$ 129.00</span>
                            </div>
                            <div class="flex-shrink-0"><a
                                    class="inline-flex h-10 py-1 px-4 items-center justify-center text-sm font-medium text-purple-500 hover:text-white bg-white border border-purple-500 rounded hover:bg-purple-500 transition duration-200"
                                    href="#">Buy now</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-12"><a
                    class="inline-flex h-12 py-2 px-4 items-center justify-center text-sm font-medium text-white bg-purple-500 hover:bg-purple-600 rounded transition duration-200"
                    href="#">Show more</a></div>
        </div>
    </section>

    {{-- footer --}}
    <section class="relative bg-white overflow-hidden border-t border-gray-200">
        <div class="container mx-auto py-16 px-4">
            <img class="block mb-8 mx-auto" src="{{ Vite::asset('resources/assets/logos/logo-coleos-2.svg') }}"
                alt="">
            <div class="flex flex-wrap justify-center items-center gap-10 mb-8">
                <a href="#">
                    <div class="flex items-center gap-1 group">
                        <span
                            class="text-rhino-700 font-bold text-sm group-hover:text-rhino-800 transition duration-200">Home</span>
                    </div>
                </a>
                <a href="#">
                    <div class="flex items-center gap-1 group">
                        <span
                            class="text-rhino-700 font-bold text-sm group-hover:text-rhino-800 transition duration-200">Collections</span>
                    </div>
                </a>
                <a href="#">
                    <div class="flex items-center gap-1 group">
                        <span
                            class="text-rhino-700 font-bold text-sm group-hover:text-rhino-800 transition duration-200">Contact
                            Us</span>
                    </div>
                </a>
            </div>
            <div class="flex gap-6 mb-6 justify-center flex-wrap">
                <a class="w-12 h-12 rounded-full flex items-center justify-center bg-orange-500 hover:bg-orange-600 transition duration-200"
                    href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24"
                        fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M13.6348 20.7273V12.766H16.3582L16.7668 9.66246H13.6348V7.68129C13.6348 6.78302 13.8881 6.17086 15.2029 6.17086L16.877 6.17018V3.39425C16.5875 3.35734 15.5937 3.27274 14.437 3.27274C12.0216 3.27274 10.368 4.71881 10.368 7.37392V9.66246H7.63635V12.766H10.368V20.7273H13.6348Z"
                            fill="white"></path>
                        <mask id="mask0_1301_2689" style="mask-type:luminance" maskunits="userSpaceOnUse" x="7" y="3"
                            width="10" height="18">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M13.6348 20.7273V12.766H16.3582L16.7668 9.66246H13.6348V7.68129C13.6348 6.78302 13.8881 6.17086 15.2029 6.17086L16.877 6.17018V3.39425C16.5875 3.35734 15.5937 3.27274 14.437 3.27274C12.0216 3.27274 10.368 4.71881 10.368 7.37392V9.66246H7.63635V12.766H10.368V20.7273H13.6348Z"
                                fill="white"></path>
                        </mask>
                        <g mask="url(#mask0_1301_2689)"></g>
                    </svg></a>
                <a class="w-12 h-12 rounded-full flex items-center justify-center bg-orange-500 hover:bg-orange-600 transition duration-200"
                    href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24"
                        fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M21.8182 6.14598C21.1356 6.44844 20.4032 6.65356 19.6337 6.74513C20.4194 6.27462 21.0209 5.52831 21.3059 4.64177C20.5689 5.0775 19.7553 5.39389 18.8885 5.56541C18.1943 4.82489 17.207 4.36365 16.1118 4.36365C14.0108 4.36365 12.3073 6.06719 12.3073 8.16707C12.3073 8.46489 12.3409 8.75577 12.4058 9.03392C9.24437 8.87513 6.44107 7.3605 4.56486 5.05895C4.23689 5.61986 4.05031 6.27344 4.05031 6.9711C4.05031 8.29107 4.72246 9.45574 5.74228 10.1371C5.1188 10.1163 4.5324 9.94477 4.01904 9.65968V9.70719C4.01904 11.5498 5.33089 13.0876 7.07034 13.4376C6.75164 13.5234 6.41558 13.5709 6.06792 13.5709C5.82225 13.5709 5.58468 13.5466 5.35174 13.5002C5.83613 15.0125 7.24071 16.1123 8.90486 16.1424C7.60343 17.1623 5.96246 17.7683 4.18013 17.7683C3.87304 17.7683 3.57055 17.7498 3.27274 17.7162C4.95658 18.7974 6.95564 19.4279 9.10419 19.4279C16.1026 19.4279 19.9281 13.6312 19.9281 8.60398L19.9153 8.11147C20.6628 7.57834 21.3094 6.90853 21.8182 6.14598Z"
                            fill="white"></path>
                        <mask id="mask0_1301_2692" style="mask-type:luminance" maskunits="userSpaceOnUse" x="3" y="4"
                            width="19" height="16">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M21.8182 6.14598C21.1356 6.44844 20.4032 6.65356 19.6337 6.74513C20.4194 6.27462 21.0209 5.52831 21.3059 4.64177C20.5689 5.0775 19.7553 5.39389 18.8885 5.56541C18.1943 4.82489 17.207 4.36365 16.1118 4.36365C14.0108 4.36365 12.3073 6.06719 12.3073 8.16707C12.3073 8.46489 12.3409 8.75577 12.4058 9.03392C9.24437 8.87513 6.44107 7.3605 4.56486 5.05895C4.23689 5.61986 4.05031 6.27344 4.05031 6.9711C4.05031 8.29107 4.72246 9.45574 5.74228 10.1371C5.1188 10.1163 4.5324 9.94477 4.01904 9.65968V9.70719C4.01904 11.5498 5.33089 13.0876 7.07034 13.4376C6.75164 13.5234 6.41558 13.5709 6.06792 13.5709C5.82225 13.5709 5.58468 13.5466 5.35174 13.5002C5.83613 15.0125 7.24071 16.1123 8.90486 16.1424C7.60343 17.1623 5.96246 17.7683 4.18013 17.7683C3.87304 17.7683 3.57055 17.7498 3.27274 17.7162C4.95658 18.7974 6.95564 19.4279 9.10419 19.4279C16.1026 19.4279 19.9281 13.6312 19.9281 8.60398L19.9153 8.11147C20.6628 7.57834 21.3094 6.90853 21.8182 6.14598Z"
                                fill="white"></path>
                        </mask>
                        <g mask="url(#mask0_1301_2692)"></g>
                    </svg></a>
                <a class="w-12 h-12 rounded-full flex items-center justify-center bg-orange-500 hover:bg-orange-600 transition duration-200"
                    href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24"
                        fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M7.60063 2.18182H16.3991C19.3873 2.18182 21.8183 4.61282 21.8182 7.60075V16.3993C21.8182 19.3872 19.3873 21.8182 16.3991 21.8182H7.60063C4.6127 21.8182 2.18182 19.3873 2.18182 16.3993V7.60075C2.18182 4.61282 4.6127 2.18182 7.60063 2.18182ZM16.3993 20.076C18.4266 20.076 20.0761 18.4266 20.0761 16.3993H20.076V7.60075C20.076 5.57349 18.4265 3.92406 16.3991 3.92406H7.60063C5.57337 3.92406 3.92406 5.57349 3.92406 7.60075V16.3993C3.92406 18.4266 5.57337 20.0761 7.60063 20.076H16.3993ZM6.85715 12.0001C6.85715 9.16424 9.16419 6.85715 12 6.85715C14.8358 6.85715 17.1429 9.16424 17.1429 12.0001C17.1429 14.8359 14.8358 17.1429 12 17.1429C9.16419 17.1429 6.85715 14.8359 6.85715 12.0001ZM8.62799 12C8.62799 13.8593 10.1407 15.3719 12 15.3719C13.8593 15.3719 15.372 13.8593 15.372 12C15.372 10.1406 13.8594 8.62791 12 8.62791C10.1406 8.62791 8.62799 10.1406 8.62799 12Z"
                            fill="white"></path>
                        <mask id="mask0_1301_2695" style="mask-type:luminance" maskunits="userSpaceOnUse" x="2" y="2"
                            width="20" height="20">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M7.60063 2.18182H16.3991C19.3873 2.18182 21.8183 4.61282 21.8182 7.60075V16.3993C21.8182 19.3872 19.3873 21.8182 16.3991 21.8182H7.60063C4.6127 21.8182 2.18182 19.3873 2.18182 16.3993V7.60075C2.18182 4.61282 4.6127 2.18182 7.60063 2.18182ZM16.3993 20.076C18.4266 20.076 20.0761 18.4266 20.0761 16.3993H20.076V7.60075C20.076 5.57349 18.4265 3.92406 16.3991 3.92406H7.60063C5.57337 3.92406 3.92406 5.57349 3.92406 7.60075V16.3993C3.92406 18.4266 5.57337 20.0761 7.60063 20.076H16.3993ZM6.85715 12.0001C6.85715 9.16424 9.16419 6.85715 12 6.85715C14.8358 6.85715 17.1429 9.16424 17.1429 12.0001C17.1429 14.8359 14.8358 17.1429 12 17.1429C9.16419 17.1429 6.85715 14.8359 6.85715 12.0001ZM8.62799 12C8.62799 13.8593 10.1407 15.3719 12 15.3719C13.8593 15.3719 15.372 13.8593 15.372 12C15.372 10.1406 13.8594 8.62791 12 8.62791C10.1406 8.62791 8.62799 10.1406 8.62799 12Z"
                                fill="white"></path>
                        </mask>
                        <g mask="url(#mask0_1301_2695)"></g>
                    </svg></a>
                <a class="w-12 h-12 rounded-full flex items-center justify-center bg-orange-500 hover:bg-orange-600 transition duration-200"
                    href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewbox="0 0 18 18"
                        fill="none">
                        <path
                            d="M16.2 0H1.8C0.81 0 0 0.81 0 1.8V16.2C0 17.19 0.81 18 1.8 18H16.2C17.19 18 18 17.19 18 16.2V1.8C18 0.81 17.19 0 16.2 0ZM5.4 15.3H2.7V7.2H5.4V15.3ZM4.05 5.67C3.15 5.67 2.43 4.95 2.43 4.05C2.43 3.15 3.15 2.43 4.05 2.43C4.95 2.43 5.67 3.15 5.67 4.05C5.67 4.95 4.95 5.67 4.05 5.67ZM15.3 15.3H12.6V10.53C12.6 9.81004 11.97 9.18 11.25 9.18C10.53 9.18 9.9 9.81004 9.9 10.53V15.3H7.2V7.2H9.9V8.28C10.35 7.56 11.34 7.02 12.15 7.02C13.86 7.02 15.3 8.46 15.3 10.17V15.3Z"
                            fill="white"></path>
                    </svg></a>
            </div>
            <p class="text-center text-sm text-rhino-400">© Copyright 2023. All Rights reserved by Shuffle UX.</p>
        </div>
    </section>

</x-layouts.landingLayout>
