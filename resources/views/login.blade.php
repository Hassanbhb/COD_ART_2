<x-layouts.landingLayout title="COD ART - Login">
    <section class="relative pt-8 pb-12 md:pb-24 overflow-hidden">
        <img class="absolute top-0 left-0 z-0 md:ml-20"
            src="{{ Vite::asset('resources/assets/sign-up/shadow-light-top.png') }}" alt="">
        <div class="relative container max-w-7xl px-4 mx-auto">
            <div>
                <a class="inline-block mx-auto mb-8" href="{{ route('home') }}">
                    <img class="h-8" src="{{ Vite::asset('resources/assets/logos/aurora-logo.svg') }} " alt="">
                </a>
                <div class="max-w-sm mx-auto">
                    <div class="text-center">
                        <h3 class="font-heading tracking-tight text-4xl font-bold mb-4">Login</h3>
                        <p class="text-gray-500 mb-8">Welcome back! Please enter your details.</p>
                    </div>
                    <form action="">
                        <div class="mb-8">
                            <label class="block mb-2 text-sm font-medium" for="">Email</label>
                            <input
                                class="py-2 px-4 h-11 w-full text-gray-500 placeholder-gray-500 bg-white border border-gray-200 focus:border-yellowGreen-500 rounded-lg shadow-sm outline-none ring ring-transparent focus:ring-yellowGreen-500"
                                type="email" placeholder="Enter your email address">
                        </div>
                        <div class="mb-2">
                            <label class="block mb-2 text-sm font-medium" for="">Password</label>
                            <div class="relative">
                                <input
                                    class="relative py-2 px-4 h-11 w-full text-gray-500 placeholder-gray-500 bg-white border border-gray-200 focus:border-yellowGreen-500 rounded-lg shadow-sm outline-none ring ring-transparent focus:ring-yellowGreen-500"
                                    type="password" placeholder="Enter password">
                                <button
                                    class="absolute top-1/2 right-0 mr-3 transform -translate-y-1/2 inline-block focus:outline-none text-gray-500 hover:text-yellowGreen-600">
                                    <svg width="20" height="20" viewbox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2.5 10.8334C5.5 4.16671 14.5 4.16671 17.5 10.8334"
                                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                        <path
                                            d="M10 14.1666C8.61929 14.1666 7.5 13.0473 7.5 11.6666C7.5 10.2859 8.61929 9.16663 10 9.16663C11.3807 9.16663 12.5 10.2859 12.5 11.6666C12.5 13.0473 11.3807 14.1666 10 14.1666Z"
                                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="text-right mb-8"><a
                                class="inline-block text-sm font-semibold text-yellowGreen-700 hover:text-yellowGreen-600"
                                href="#">Forgot Password?</a></div>
                        <button
                            class="group relative flex items-center justify-center px-5 h-12 w-full font-bold text-white bg-gradient-to-br from-cyanGreen-800 to-cyan-800 rounded-lg transition-all duration-300 focus:outline-none"
                            type="submit">
                            <div
                                class="absolute top-0 left-0 w-full h-full rounded-lg ring ring-green-300 animate-pulse group-hover:ring-0 transition duration-300">
                            </div>
                            <span>Login</span>
                        </button>
                        <div class="my-4 flex items-center pt-20">
                            <div class="h-px w-full bg-gray-200"></div>
                            <span class="inline-block mx-4 text-xs font-medium text-gray-500">OR</span>
                            <div class="h-px w-full bg-gray-200"></div>
                        </div>

                        <p class="text-sm text-center">
                            <span class="mr-1 text-gray-500">Don’t have an account?</span>
                            <a class="inline-block text-teal-500 hover:text-yellowGreen-600 font-semibold"
                                href="{{ route('signup') }}">
                                Sign Up
                            </a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-layouts.landingLayout>
