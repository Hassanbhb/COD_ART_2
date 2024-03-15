<x-layouts.landingLayout title="COD ART - Login">
    <div class="">
        <x-navbar />

        <section class="relative py-20 2xl:py-10 overflow-hidden">
            <div class="container px-4 mx-auto">
                <div class="max-w-7xl mx-auto">
                    <div class="flex flex-wrap -mx-4">
                        <div class="w-full lg:w-1/2 px-4 order-last lg:order-first">
                            <div class="relative max-w-lg mx-auto lg:mx-0 lg:max-w-2xl h-full">
                                <img class="block w-full h-142 sm:h-full object-cover rounded-5xl"
                                    src="{{ Vite::asset('resources/assets/images/sign-up/dark-background.png') }}"
                                    alt="">
                                <div
                                    class="absolute bottom-0 w-full left-0 h-full flex items-center justify-center p-10">
                                    <div class="max-w-md mx-auto">
                                        <h4
                                            class="font-heading text-3xl sm:text-5xl lg:text-6xl text-white font-bold mb-8">
                                            Sign in to your account</h4>
                                        <div class="md:flex rtl:md:flex-row-reverse mb-20">
                                            <div class="mb-6 md:mb-0 md:mr-8 pt-3 text-gray-600">
                                                <svg width="84" height="10" viewbox="0 0 84 10" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M1 4.25C0.585786 4.25 0.25 4.58579 0.25 5C0.25 5.41421 0.585786 5.75 1 5.75L1 4.25ZM84 5.00001L76.5 0.669879L76.5 9.33013L84 5.00001ZM1 5.75L77.25 5.75001L77.25 4.25001L1 4.25L1 5.75Z"
                                                        fill="#FAFBFC"></path>
                                                </svg>
                                            </div>
                                            <div>
                                                <p class="text-lg font-semibold text-gray-200">
                                                    Welcome! We kindly request you to enter your details.</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-full lg:w-1/2 px-4 mb-16 lg:mb-0">
                            <div class="max-w-lg lg:pt-8 2xl:pt-24 lg:pb-8 mx-auto 2xl:mr-0">
                                <h3 class="text-5xl sm:text-6xl text-gray-900 font-bold mb-4">Welcome !</h3>
                                <p class="text-lg text-gray-500 mb-14">
                                    See our software in action with the demo version.
                                </p>

                                <form action="">
                                    <div class="mb-6">
                                        <label class="block mb-1.5 text-sm text-gray-900 font-semibold"
                                            for="">Email</label>
                                        <input
                                            class="w-full py-3 px-4 text-sm text-gray-900 placeholder-gray-400 border border-gray-200 focus:border-purple-500 focus:outline-purple rounded-lg"
                                            type="email" placeholder="pat@saturn.dev">
                                    </div>
                                    <div class="mb-7">
                                        <div class="flex mb-1.5 items-center justify-between">
                                            <label class="block text-sm text-gray-900 font-semibold"
                                                for="">Password</label>
                                            <a class="inline-block text-xs font-semibold text-vermilion-500 hover:text-gray-900"
                                                href="#">Forget password?</a>
                                        </div>
                                        <div class="relative">
                                            <input
                                                class="w-full py-3 px-4 text-sm text-gray-900 placeholder-gray-400 border border-gray-200 focus:border-purple-500 focus:outline-purple rounded-lg"
                                                type="password" placeholder="Enter your password">
                                        </div>
                                    </div>
                                    <div class="flex items-center mb-8">
                                        <input id="default-radio-1" type="radio" value="" name="default-radio"
                                            class="w-4 h-4 text-vermilion-600 bg-gray-100 border-gray-300 focus:ring-vermilion-500 dark:focus:ring-vermilion-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="default-radio-1"
                                            class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                            Remember me?
                                        </label>
                                    </div>
                                    <x-ui.button style="primary" size="sm" bg-hover="bg-gray-900" class="!w-full">
                                        Login
                                        </x-ui-button>
                                        <div class="text-center">
                                            <span class="text-xs font-semibold text-gray-900">
                                                <span>Don’t have an account?</span>
                                                <a class="mx-2 inline-block ml-1 text-vermilion-500 hover:text-vermilion-700"
                                                    href="{{ route('signup') }}">Sign up</a>
                                            </span>
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
</x-layouts.landingLayout>
