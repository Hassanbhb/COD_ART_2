<x-layouts.landingLayout title="COD ART - Contact">
    <div class="max-w-7xl mx-auto">
        <x-navbar />
        <section class="pb-12 md:pb-24">
            <div class="container px-4 mx-auto">
                <div class="flex flex-wrap -mx-4">
                    <div class="w-full lg:w-5/12 xl:w-1/2 px-4 mb-16 lg:mb-0">
                        <div class="max-w-sm">
                            <span
                                class="inline-flex items-center h-7 mb-6 px-2 text-sm font-medium text-yellowGreen-700 bg-yellowGreen-200 rounded-full">
                                <svg width="12" height="12" viewbox="0 0 12 12" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10 5.5C10 3.29086 8.20914 1.5 6 1.5C3.79086 1.5 2 3.29086 2 5.5"
                                        stroke="#70A617" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path
                                        d="M2.34038 8.83509L2.21268 8.80317C1.49998 8.62499 1 7.98463 1 7.25C1 6.51537 1.49998 5.87501 2.21268 5.69683L2.34038 5.66491C2.67543 5.58114 3 5.83456 3 6.17992V8.32008C3 8.66544 2.67543 8.91886 2.34038 8.83509Z"
                                        stroke="#70A617"></path>
                                    <path
                                        d="M9.65962 8.83509L9.78732 8.80317C10.5 8.62499 11 7.98463 11 7.25C11 6.51537 10.5 5.87501 9.78732 5.69683L9.65962 5.66491C9.32457 5.58114 9 5.83456 9 6.17992V8.32008C9 8.66544 9.32457 8.91886 9.65962 8.83509Z"
                                        stroke="#70A617"></path>
                                    <path d="M10 9V9C10 9.69036 9.44036 10.25 8.75 10.25H7.25" stroke="#70A617"></path>
                                    <path
                                        d="M6.75 11H5.25C4.83579 11 4.5 10.6642 4.5 10.25C4.5 9.83579 4.83579 9.5 5.25 9.5H6.75C7.16421 9.5 7.5 9.83579 7.5 10.25C7.5 10.6642 7.16421 11 6.75 11Z"
                                        stroke="#70A617"></path>
                                </svg>
                                <span class="ml-1">Contact Support</span>
                            </span>
                            <h1 class="font-heading tracking-tight text-5xl xs:text-5xl font-bold mb-4">
                                How can we help you today?
                            </h1>
                            <p class="text-lg text-gray-500 mb-10">
                                Submit your info and we’ll get back to you as soon as possible.
                            </p>
                            <div class="flex items-center">
                                <img class="block w-10 h-10 rounded-full"
                                    src="{{ Vite::asset('resources/assets/blog/avatar-medium.png') }}" alt="">
                                <span class="ltr:ml-4 rtl:mr-4 text-sm font-medium">Responds in &amp;pr; 1-2
                                    hours</span>
                            </div>
                        </div>
                    </div>
                    <div class="w-full lg:w-7/12 xl:w-1/2 px-4">
                        <div class="p-8 border border-gray-100 rounded-xl">
                            <form action="">
                                <div class="flex flex-col mb-8 items-center">
                                    <div class="flex w-full">
                                        <div class="flex-1 md:w-1/2 ltr:pr-4 rtl:pl-4 mb-4">
                                            <label class="block mb-1 text-sm font-medium" for="">First
                                                name</label>
                                            <input
                                                class="py-2 px-4 h-11 w-full text-gray-500 placeholder-gray-500 bg-gray-50 bg-opacity-40 border border-gray-200 focus:border-yellowGreen-500 rounded-lg outline-none ring ring-transparent focus:ring-yellowGreen-500"
                                                type="text" placeholder="First name">
                                        </div>
                                        <div class="flex-1 md:w-1/2 ltr:pl-4 rtl:pr-4 mb-4">
                                            <label class="block mb-1 text-sm font-medium" for="">Last
                                                name</label>
                                            <input
                                                class="py-2 px-4 h-11 w-full text-gray-500 placeholder-gray-500 bg-gray-50 bg-opacity-40 border border-gray-200 focus:border-yellowGreen-500 rounded-lg outline-none ring ring-transparent focus:ring-yellowGreen-500"
                                                type="text" placeholder="Last name">
                                        </div>
                                    </div>
                                    <div class="flex w-full">
                                        <div class="md:w-1/2 ltr:pr-4 rtl:pl-4 mb-4">
                                            <label class="block mb-1 text-sm font-medium" for="">Email</label>
                                            <input
                                                class="py-2 px-4 h-11 w-full text-gray-500 placeholder-gray-500 bg-gray-50 bg-opacity-40 border border-gray-200 focus:border-yellowGreen-500 rounded-lg outline-none ring ring-transparent focus:ring-yellowGreen-500"
                                                type="email" placeholder="john@email.com">
                                        </div>
                                        <div class="md:w-1/2 ltr:pl-4 rtl:pr-4 mb-4">
                                            <label class="block mb-1 text-sm font-medium" for="">Phone
                                                number</label>
                                            <div
                                                class="flex flex-row-reverse h-11 bg-gray-50 bg-opacity-40 border border-gray-200 rounded-md">
                                                <div class="">
                                                    <select
                                                        class="h-full bg-transparent focus:outline-none appearance-none cursor-pointer border-transparent focus:border-transparent focus:ring-0"
                                                        name="" id="">
                                                        <option value="">US</option>
                                                        <option value="">GB</option>
                                                        <option value="">EU</option>
                                                    </select>
                                                </div>
                                                <input
                                                    class="flex-1 py-2 mr-1 px-0 h-full text-gray-500 placeholder-gray-500 border-0 bg-transparent  focus:border-yellowGreen-500 focus:ring-0"
                                                    type="tel" placeholder="+1 (555) 000-0000">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-full">
                                        <label class="block mb-1 text-sm font-medium" for="">Message</label>
                                        <textarea
                                            class="block py-2 px-4 w-full h-44 text-gray-500 placeholder-gray-500 bg-gray-50 bg-opacity-40 border border-gray-200 focus:border-yellowGreen-500 rounded-lg outline-none ring ring-transparent focus:ring-yellowGreen-500 resize-none"
                                            placeholder="Enter your message"></textarea>
                                    </div>
                                </div>
                                <button
                                    class="group relative flex items-center justify-center px-5 h-12 w-full mb-8 text-base font-semibold text-white bg-gradient-to-br from-cyanGreen-800 to-cyan-800 rounded-lg transition-all duration-300"
                                    type="submit">
                                    <div
                                        class="absolute top-0 left-0 w-full h-full rounded-lg ring ring-green-300 animate-pulse group-hover:ring-0 transition duration-300">
                                    </div>
                                    <span>Submit</span>
                                </button>
                                <p class="text-sm text-gray-500">
                                    <span class="mr-1">We process your information in accordance with our</span>
                                    <a class="inline-block font-semibold text-yellowGreen-700 hover:text-yellowGreen-600"
                                        href="#">Privacy Policy</a>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <x-footer />
</x-layouts.landingLayout>
