<x-layouts.landingLayout title="COD ART - Product Page">
    <x-store.navbar />

    <section class="py-12 md:py-24 lg:py-32">
        <div class="container px-4 mx-auto">
            <div class="max-w-lg mx-auto lg:max-w-6xl">
                <div class="flex flex-wrap mb-8 -mx-4">
                    <div class="w-full lg:flex-1 p-4">
                        {{-- image --}}
                        <div class="lg:max-w-md">
                            <img class="block w-full rounded-xl"
                                src="{{ Vite::asset('resources/assets/product-details/product.png') }}" alt="">
                        </div>
                    </div>
                    <div class="w-full lg:flex-1 p-4">
                        <div class="max-w-lg">
                            <h1 class="text-rhino-700 font-semibold text-4xl mb-2 font-heading">Nike Dark SuperSpeed™
                                sneakers</h1>


                            <p class="text-sm text-rhino-500 mb-6">Pariatur ex aliqua elit ut enim consequat amet non
                                do ut. Ad aute deserunt fugiat qui Lorem in quis velit labore voluptate.</p>

                            <div class="flex gap-4 mb-6">
                                <h2 class="text-4xl font-semibold text-rhino-700">$ 199.00</h2>
                                <p class="text-rhino-300 font-extrabold text-sm line-through">$ 249.00</p>
                            </div>
                            <div class="flex -mx-2 flex-wrap mb-10">
                                <div class="w-full xs:w-4/12 md:w-3/12 px-2 mb-4 xs:mb-0">
                                    <div
                                        class="h-full xs:w-full py-3 px-4 rounded-sm border border-coolGray-200 gap-4 inline-flex items-center justify-between">
                                        <div
                                            class="cursor-pointer text-coolGray-300 hover:text-coolGray-400 transition duration-200">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17"
                                                viewbox="0 0 16 17" fill="none">
                                                <path
                                                    d="M12.6667 7.49988H3.33341C3.1566 7.49988 2.98703 7.57012 2.86201 7.69514C2.73699 7.82016 2.66675 7.98973 2.66675 8.16654C2.66675 8.34336 2.73699 8.51292 2.86201 8.63795C2.98703 8.76297 3.1566 8.83321 3.33341 8.83321H12.6667C12.8436 8.83321 13.0131 8.76297 13.1382 8.63795C13.2632 8.51292 13.3334 8.34336 13.3334 8.16654C13.3334 7.98973 13.2632 7.82016 13.1382 7.69514C13.0131 7.57012 12.8436 7.49988 12.6667 7.49988Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </div>
                                        <span class="text-coolGray-700 text-sm">2</span>
                                        <div
                                            class="cursor-pointer text-coolGray-300 hover:text-coolGray-400 transition duration-200">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17"
                                                viewbox="0 0 16 17" fill="none">
                                                <path
                                                    d="M12.6667 7.4998H8.66675V3.4998C8.66675 3.32299 8.59651 3.15342 8.47149 3.02839C8.34646 2.90337 8.17689 2.83313 8.00008 2.83313C7.82327 2.83313 7.6537 2.90337 7.52868 3.02839C7.40365 3.15342 7.33341 3.32299 7.33341 3.4998V7.4998H3.33341C3.1566 7.4998 2.98703 7.57003 2.86201 7.69506C2.73699 7.82008 2.66675 7.98965 2.66675 8.16646C2.66675 8.34327 2.73699 8.51284 2.86201 8.63787C2.98703 8.76289 3.1566 8.83313 3.33341 8.83313H7.33341V12.8331C7.33341 13.0099 7.40365 13.1795 7.52868 13.3045C7.6537 13.4296 7.82327 13.4998 8.00008 13.4998C8.17689 13.4998 8.34646 13.4296 8.47149 13.3045C8.59651 13.1795 8.66675 13.0099 8.66675 12.8331V8.83313H12.6667C12.8436 8.83313 13.0131 8.76289 13.1382 8.63787C13.2632 8.51284 13.3334 8.34327 13.3334 8.16646C13.3334 7.98965 13.2632 7.82008 13.1382 7.69506C13.0131 7.57003 12.8436 7.4998 12.6667 7.4998Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full xs:w-5/12 md:w-7/12 px-2 mb-4 xs:mb-0"><a
                                        class="block w-full px-3 py-4 rounded-sm text-center text-white text-sm font-medium bg-purple-500 hover:bg-purple-600 transition duration-200"
                                        href="#">Add to cart</a></div>
                                <div class="w-full xs:w-3/12 md:w-2/12 px-2">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
    </div>
</x-layouts.landingLayout>
