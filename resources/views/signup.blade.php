<x-layouts.landingLayout title="COD ART - Sign Up">

    <section class="relative pt-8 pb-12 md:pb-24 overflow-hidden">
        <img class="absolute top-0 left-0 md:ml-20"
            src="{{ Vite::asset('resources/assets/sign-up/shadow-light-top.png') }}" alt="">
        <div class="relative container max-w-7xl px-4 mx-auto">
            <div>
                <a class="inline-block mx-auto mb-8" href="{{ route('home') }}">
                    <img class="h-8" src="{{ Vite::asset('resources/assets/logos/aurora-logo.svg') }}" alt="">
                </a>
                <div class="max-w-sm mx-auto">
                    <div class="text-center">
                        <h3 class="font-heading tracking-tight text-4xl font-bold mb-4">Sign up</h3>
                        <p class="text-gray-500 mb-8">Create your account with your work email.</p>
                    </div>
                    <form action="">
                        <div class="mb-8">
                            <label class="block mb-2 text-sm font-medium" for="">Email</label>
                            <input
                                class="py-2 px-4 h-11 w-full text-gray-500 placeholder-gray-500 bg-white border border-gray-200 focus:border-yellowGreen-500 rounded-lg shadow-sm outline-none ring ring-transparent focus:ring-yellowGreen-500"
                                type="email" placeholder="Enter your email address">
                        </div>
                        <div class="mb-8">
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
                        <button
                            class="group relative flex items-center justify-center px-5 h-12 mb-8 w-full font-bold text-white bg-gradient-to-br from-cyanGreen-800 to-cyan-800 rounded-lg transition-all duration-300 focus:outline-none"
                            type="submit">
                            <div
                                class="absolute top-0 left-0 w-full h-full rounded-lg ring ring-green-300 animate-pulse group-hover:ring-0 transition duration-300">
                            </div>
                            <span>Sign up</span>
                        </button>
                        <div class="my-4 flex items-center pt-20">
                            <div class="h-px w-full bg-gray-200"></div>
                            <span class="inline-block mx-4 text-xs font-medium text-gray-500">OR</span>
                            <div class="h-px w-full bg-gray-200"></div>
                        </div>

                        <p class="text-sm text-center">
                            <span class="mr-1 text-gray-500">Already have an account?</span>
                            <a class="inline-block text-teal-500 hover:text-yellowGreen-600 font-semibold"
                                href="{{ route('login') }}">Login</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>

    {{-- <script>
        // top buttons
        const step_1_btn = document.querySelector('.step-1-btn');
        const step_2_btn = document.querySelector('.step-2-btn');
        const step_3_btn = document.querySelector('.step-3-btn');

        window.onload = () => {
            step_1_btn.style.borderBottom = '1px solid #ff460c'
            step_2_btn.style.borderBottom = '1px solid white'
            step_3_btn.style.borderBottom = '1px solid white'
        }

        // to to buttons
        const go_to_step_2 = document.querySelector('.go-to-step-2');
        const go_to_step_3 = document.querySelector('.go-to-step-3');

        go_to_step_2.addEventListener('click', () => {
            change_step_color(2)
            show_next_step(2)
        })

        go_to_step_3.addEventListener('click', () => {
            change_step_color(3)
            show_next_step(3)
        })

        // form sections
        const step_1 = document.querySelector('.step-1');
        const step_2 = document.querySelector('.step-2');
        const step_3 = document.querySelector('.step-3');

        step_1_btn.addEventListener('click', (e) => {
            change_step_color(1)
            show_next_step(1)
        })

        step_2_btn.addEventListener('click', (e) => {
            change_step_color(2)
            show_next_step(2)
        })

        step_3_btn.addEventListener('click', (e) => {
            change_step_color(3)
            show_next_step(3)
        })

        function change_step_color(step) {
            switch (step) {
                case 1:
                    step_1_btn.style.borderColor = '#ff460c'
                    step_2_btn.style.borderColor = "white"
                    step_3_btn.style.borderColor = "white"
                    break;
                case 2:
                    step_1_btn.style.borderColor = "white"
                    step_2_btn.style.borderColor = "#ff460c"
                    step_3_btn.style.borderColor = "white"
                    break;
                case 3:
                    step_1_btn.style.borderColor = "white"
                    step_2_btn.style.borderColor = "white"
                    step_3_btn.style.borderColor = "#ff460c"
            }
        }

        function show_next_step(step) {
            switch (step) {
                case 1:
                    step_1.classList.remove('hidden');
                    step_2.classList.add('hidden');
                    step_3.classList.add('hidden');
                    break;

                case 2:
                    step_1.classList.add('hidden');
                    step_2.classList.remove('hidden');
                    step_3.classList.add('hidden');
                    break;

                case 3:
                    step_1.classList.add('hidden');
                    step_2.classList.add('hidden');
                    step_3.classList.remove('hidden');
                    break;
                default:
                    step_1.classList.remove('hidden');
                    step_2.classList.add('hidden');
                    step_3.classList.add('hidden');
                    break;
            }
        }
    </script> --}}
</x-layouts.landingLayout>
