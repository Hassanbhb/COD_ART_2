<nav class="relative bg-white mb-12 md:mb-24">
    <div class="container mx-auto px-4">
        <div class="relative flex h-24 items-center">
            <a class="inline-block" href="{{ route('home') }}">
                <img class="h-10" src="{{ Vite::asset('resources/assets/logos/aurora-logo.svg') }}" alt="">
            </a>
            <button
                class="lg:hidden navbar-burger flex items-center justify-center h-10 w-10 ml-auto bg-gradient-to-b from-cyanGreen-800 to-cyan-800 rounded-lg">
                <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 5H21" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                    </path>
                    <path d="M3 12H21" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                    </path>
                    <path d="M3 19H21" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                    </path>
                </svg>
            </button>
            <div
                class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 hidden lg:flex items-center">
                <a class="inline-block hover:text-yellowGreen-700 mr-10" href="#">
                    <div class="flex items-center">
                        <span class="mr-3">Product</span>
                        <svg width="10" height="6" viewbox="0 0 10 6" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1L5 5L9 1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                        </svg>
                    </div>
                </a>
                <a class="inline-block hover:text-yellowGreen-700 mr-10" href="#">Features</a><a
                    class="inline-block hover:text-yellowGreen-700 mr-10" href="#">Pricing</a><a
                    class="inline-block hover:text-yellowGreen-700" href="#">Resources</a>
            </div>
            <div class="hidden lg:block ml-auto">
                <a class="inline-flex items-center justify-center h-10 mr-4 px-4 text-center leading-loose text-sm text-gray-700 hover:text-yellowGreen-700 font-semibold transition duration-200"
                    href="{{ route('login') }}">Login</a><a
                    class="inline-flex items-center justify-center h-10 px-4 text-center leading-loose text-sm text-gray-700 hover:text-yellowGreen-700 font-semibold border border-gray-200 hover:border-yellowGreen-600 shadow-sm hover:shadow-none rounded-lg transition duration-200"
                    href="{{ route('signup') }}">Get Started</a>
            </div>
        </div>
    </div>
</nav>
