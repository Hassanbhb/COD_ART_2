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
    

</x-layouts.landingLayout>
