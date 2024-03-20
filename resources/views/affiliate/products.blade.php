<x-layouts.landingLayout title="COD ART - Products">
    <x-store.navbar />

    <section class="py-12 md:py-10 lg:py-24">
        <div class="max-w-7xl px-4 mx-auto">
            <h2 class="text-4xl text-center font-heading font-semibold text-rhino-600 tracking-xs">OUR PRODUCTS
            </h2>
            {{-- cards --}}
            <div class="flex flex-wrap -mx-4 -mb-8 mt-14">
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
            <div class="flex flex-wrap -mx-4 -mb-8 mt-14">
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
        </div>
    </section>

    <x-store.footer />
</x-layouts.landingLayout>
