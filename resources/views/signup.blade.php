<x-layouts.landingLayout title="COD ART - Sign Up">


    <x-navbar />

    <section class="relative py-20 2xl:py-10 overflow-hidden">
        <div class="container px-4 mx-auto">
            <div class="max-w-7xl mx-auto">
                <div class="flex flex-wrap -mx-4">
                    <div class="w-full lg:w-1/2 px-4 order-last lg:order-first">
                        <div class="relative max-w-lg mx-auto lg:mx-0 lg:max-w-2xl h-full">
                            <img class="block w-full h-142 sm:h-full object-cover rounded-3xl"
                                src="{{ Vite::asset('resources/assets/images/sign-up/dark-background.png') }}"
                                alt="">
                            <div class="absolute bottom-0 w-full left-0 h-full flex items-center justify-center p-10">
                                <div class="max-w-md mx-auto">
                                    <h4 class="font-heading text-3xl sm:text-5xl lg:text-6xl text-white font-bold mb-8"
                                        contenteditable="false">Create your account</h4>
                                    <div class="md:flex mb-20">
                                        <div class="mb-6 md:mb-0 md:mr-8 pt-3 text-gray-600">
                                            <svg width="84" height="10" viewbox="0 0 84 10" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M1 4.25C0.585786 4.25 0.25 4.58579 0.25 5C0.25 5.41421 0.585786 5.75 1 5.75L1 4.25ZM84 5.00001L76.5 0.669879L76.5 9.33013L84 5.00001ZM1 5.75L77.25 5.75001L77.25 4.25001L1 4.25L1 5.75Z"
                                                    fill="#FAFBFC"></path>
                                            </svg>
                                        </div>
                                        <div>
                                            <p class="text-lg font-semibold text-gray-200">Greetings on your
                                                return! We kindly request you to enter your details.</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/2 px-4 mb-16 lg:mb-0">
                        <div class="max-w-lg lg:pt-8 2xl:pt-24 lg:pb-8 mx-auto 2xl:mr-0">
                            <h3 class="text-5xl sm:text-6xl text-gray-900 font-bold mb-4">
                                Join Us!</h3>
                            <p class="text-lg text-gray-500 mb-5">
                                See our software in action with the demo version.
                            </p>

                            <div class="flex mb-7 text-gray-500 text-lg">
                                <div class="flex-1 text-center cursor-pointer">
                                    <p class="step-1-btn py-3 w-full h-full flex justify-center items-center">
                                        Step One</p>
                                </div>
                                <div class="flex-1 cursor-pointer">
                                    <p class="step-2-btn py-3 w-full h-full flex justify-center items-center">
                                        Step Two</p>
                                </div>
                                <div class="flex-1 cursor-pointer">
                                    <p class="step-3-btn py-3 w-full h-full flex justify-center items-center">
                                        Step Three</p>
                                </div>
                            </div>
                            <form action="">
                                {{-- step 1 --}}
                                <div class="step-1">
                                    <div class="flex gap-3">
                                        <div class="mb-6 flex-1">
                                            <label class="block mb-1.5 text-sm text-gray-900 font-semibold"
                                                for="">First Name</label>
                                            <input
                                                class="w-full py-3 px-4 text-sm text-gray-900 placeholder-gray-400 border border-gray-200 focus:border-purple-500 focus:outline-purple rounded-lg"
                                                type="first name" placeholder="first name">
                                        </div>
                                        <div class="mb-6 flex-1">
                                            <label class="block mb-1.5 text-sm text-gray-900 font-semibold"
                                                for="">Last Name</label>
                                            <input
                                                class="w-full py-3 px-4 text-sm text-gray-900 placeholder-gray-400 border border-gray-200 focus:border-purple-500 focus:outline-purple rounded-lg"
                                                type="last name" placeholder="last name">
                                        </div>
                                    </div>
                                    <div class="mb-6">
                                        <label class="block mb-1.5 text-sm text-gray-900 font-semibold"
                                            for="">Phone number</label>
                                        <input
                                            class="w-full py-3 px-4 text-sm text-gray-900 placeholder-gray-400 border border-gray-200 focus:border-purple-500 focus:outline-purple rounded-lg"
                                            type="phone" placeholder="+212 6743422121">
                                    </div>
                                    <div class="mb-6">
                                        <label class="block mb-2 text-sm text-gray-900 font-semibold"
                                            for="">Country</label>
                                        <div class="relative">
                                            <select
                                                class="w-full py-3 px-4 text-sm text-gray-900 placeholder-gray-400 border border-gray-200 focus:border-purple-500 focus:outline-purple rounded-lg appearance-none"
                                                name="field-name">
                                                <option>Morocco</option>
                                                <option>KSA</option>
                                                <option>Option 3</option>
                                                <option>Option 4</option>
                                            </select>
                                            
                                        </div>
                                    </div>
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
                                        </div>
                                        <div>
                                            <input
                                                class="w-full py-3 px-4 text-sm text-gray-900 placeholder-gray-400 border border-gray-200 focus:border-purple-500 focus:outline-purple rounded-lg"
                                                type="password" placeholder="Enter your password">

                                        </div>
                                    </div>
                                    <div class="flex justify-end">
                                        <x-ui.button class="go-to-step-2" icon="arrow-right">
                                            Next Step
                                        </x-ui.button>
                                    </div>
                                </div>

                                {{-- step 2 --}}
                                <div class="step-2 hidden">
                                    <div class="mb-6">
                                        <label class="block mb-2 text-sm text-gray-900 font-semibold"
                                            for="">What is the budget to start as a seller with COD Network
                                            (in USD)?
                                        </label>
                                        <div class="relative">
                                            <select
                                                class="w-full py-3 px-4 text-sm text-gray-900 placeholder-gray-400 border border-gray-200 focus:border-vermilion-500  rounded-lg appearance-none"
                                                name="field-name">
                                                <option>Choose</option>
                                                <option>$1k - $2k</option>
                                                <option>$2k - $5k</option>
                                                <option>$5k - $10k</option>
                                                <option>$10k +</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-6">
                                        <label class="block mb-2 text-sm text-gray-900 font-semibold">
                                            Experience in E-commerce?
                                        </label>
                                        <div class="flex">
                                            <div class="flex items-center me-4">
                                                <input id="vermilion-radio" type="radio" value=""
                                                    name="colored-radio"
                                                    class="w-4 h-4 text-vermilion-400 bg-gray-100 border-gray-300 focus:ring-vermilion-500 dark:focus:ring-vermilion-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="vermilion-radio"
                                                    class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                                    No
                                                </label>
                                            </div>
                                            <div class="flex items-center me-4">
                                                <input id="vermilion-radio" type="radio" value=""
                                                    name="colored-radio"
                                                    class="w-4 h-4 text-vermilion-400 bg-gray-100 border-gray-300 focus:ring-vermilion-500 dark:focus:ring-vermilion-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="vermilion-radio"
                                                    class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                                    Yes
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-6">
                                        <label class="block mb-2 text-sm text-gray-900 font-semibold">
                                            Experience with Ads Platforms?
                                        </label>
                                        <div class="flex">
                                            <div class="flex items-center me-4">
                                                <input id="vermilion-radio" type="radio" value=""
                                                    name="colored-radio"
                                                    class="w-4 h-4 text-vermilion-400 bg-gray-100 border-gray-300 focus:ring-vermilion-500 dark:focus:ring-vermilion-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="vermilion-radio"
                                                    class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                                    No
                                                </label>
                                            </div>
                                            <div class="flex items-center me-4">
                                                <input id="vermilion-radio" type="radio" value=""
                                                    name="colored-radio"
                                                    class="w-4 h-4 text-vermilion-400 bg-gray-100 border-gray-300 focus:ring-vermilion-500 dark:focus:ring-vermilion-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="vermilion-radio"
                                                    class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                                    Yes
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="flex justify-end">
                                        <x-ui.button class="go-to-step-3" icon="arrow-right">
                                            Next Step
                                        </x-ui.button>
                                    </div>
                                </div>

                                {{-- step 3 --}}
                                <div class="step-3 hidden">
                                    <div>
                                        <label for="dropzone-file"
                                            class="mb-2 text-sm font-medium text-gray-900">Upload your ID
                                            card ( Recto )</label>
                                        <div class="flex items-center justify-center w-full">
                                            <label for="dropzone-file"
                                                class="mt-2 flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                                    <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400"
                                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                        fill="none" viewBox="0 0 20 16">
                                                        <path stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="2"
                                                            d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                                                    </svg>
                                                    <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span
                                                            class="font-semibold">Click to upload</span> or drag
                                                        and
                                                        drop</p>
                                                    <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG,
                                                        JPG
                                                        or GIF (MAX. 800x400px)</p>
                                                </div>
                                                <input id="dropzone-file" type="file" class="hidden" />
                                            </label>
                                        </div>
                                    </div>
                                    <div class="mt-3 mb-5">
                                        <label for="dropzone-file"
                                            class="mb-2 text-sm font-medium text-gray-900">Upload your ID
                                            card ( Verso )</label>
                                        <div class="flex items-center justify-center w-full">
                                            <label for="dropzone-file"
                                                class="mt-2 flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                                    <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400"
                                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                        fill="none" viewBox="0 0 20 16">
                                                        <path stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="2"
                                                            d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                                                    </svg>
                                                    <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span
                                                            class="font-semibold">Click to upload</span> or drag
                                                        and
                                                        drop</p>
                                                    <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG,
                                                        JPG
                                                        or GIF (MAX. 800x400px)</p>
                                                </div>
                                                <input id="dropzone-file" type="file" class="hidden" />
                                            </label>
                                        </div>
                                    </div>
                                    <div class="flex justify-end">
                                        <x-ui.button class="submit-btn cursor-pointer">
                                            Submit
                                        </x-ui.button>
                                    </div>
                                </div>

                                <div class="text-center">
                                    <span class="text-xs font-semibold text-gray-900">
                                        <span>Already have an account?</span>
                                        <a class="inline-block ml-1 text-vermilion-900 hover:text-vermilion-700"
                                            href="login.html">Login</a>
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
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
    </script>
</x-layouts.landingLayout>
