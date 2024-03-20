<x-layouts.landingLayout title="COD ART - Contact">
    <x-store.navbar />

    <section class="overflow-hidden py-12">
        <div class="container mx-auto px-4">
            <div class="bg-purple-100 rounded-lg py-12 px-8 max-w-lg mx-auto">
                <form action="" data-bitwarden-watching="1">
                    <p class="uppercase text-rhino-300 text-xs font-bold tracking-widest mb-1 text-center">+212 673343234
                    </p>
                    <h1 class="font-heading font-semibold text-4xl text-rhino-700 text-center mb-8">Contact Us</h1>
                    <div class="flex flex-wrap gap-4 mb-4">
                        <div class="flex-1">
                            <input
                                class="py-3 px-4 rounded-sm border border-coolGray-200 bg-white w-full outline-none focus:ring-1 ring-indigo-400"
                                type="text" placeholder="First Name">
                        </div>
                        <div class="flex-1">
                            <input
                                class="py-3 px-4 rounded-sm border border-coolGray-200 bg-white w-full outline-none focus:ring-1 ring-indigo-400"
                                type="text" placeholder="Last Name">
                        </div>
                    </div>
                    <input
                        class="py-3 px-4 rounded-sm border border-coolGray-200 bg-white mb-4 w-full outline-none focus:ring-1 ring-indigo-400"
                        type="text" placeholder="E-mail address">
                    <div class="relative mb-4">
                        <textarea
                            class="w-full px-4 py-3 text-sm border border-coolGray-200 rounded-sm placeholder-coolGray-400 text-coolGray-700"
                            name="message" cols="30" rows="5" placeholder="Your message"></textarea>
                    </div>
                    <a class="rounded-sm py-3 px-4 bg-purple-500 shadow-md text-white font-medium text-sm w-full mb-3 block text-center hover:bg-purple-600 transition duration-200"
                        href="#">Send</a>
                </form>
            </div>
        </div>
    </section>

    <x-store.footer />
</x-layouts.landingLayout>
