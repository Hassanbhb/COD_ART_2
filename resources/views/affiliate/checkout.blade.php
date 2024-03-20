<x-layouts.landingLayout title="COD ART - Checkout">
    <x-store.navbar />

    <section class="bg-white">
        <div class="max-w-7xl px-4 mx-auto">
            <div class="flex flex-wrap -mx-4 min-h-screen">
                <div class="w-full lg:w-7/12 lg:pt-20 lg:pb-20 xl:pb-32 pt-12 px-5">
                    <div class=" pt-10 max-w-lg xl:max-w-xl mx-auto lg:mx-0 mb-3">
                        <h2 class="text-rhino-700 text-3xl font-semibold mb-8 font-heading">Customer information</h2>
                        <div class="flex flex-col gap-8">
                            <div class="sm:flex flex-wrap gap-8">
                                <div class="flex-1 mb-8 sm:mb-0">
                                    <label class="block text-coolGray-700 text-sm font-medium mb-2"
                                        for="textInput1">First
                                        Name</label>
                                    <input
                                        class="rounded py-3 px-4 border border-coolGray-200 w-full outline-none focus:ring-1 ring-indigo-400"
                                        id="textInput1" type="text" placeholder="Enter">
                                </div>
                                <div class="flex-1">
                                    <label class="block text-coolGray-700 text-sm font-medium mb-2"
                                        for="textInput2">Last
                                        Name</label>
                                    <input
                                        class="rounded py-3 px-4 border border-coolGray-200 w-full outline-none focus:ring-1 ring-indigo-400"
                                        id="textInput2" type="text" placeholder="Enter">
                                </div>
                            </div>
                            <div class="sm:flex flex-wrap gap-8">
                                <div class="flex-1 mb-8 sm:mb-0">
                                    <label class="block text-coolGray-700 text-sm font-medium mb-2"
                                        for="textInput1">Phone</label>
                                    <input
                                        class="rounded py-3 px-4 border border-coolGray-200 w-full outline-none focus:ring-1 ring-indigo-400"
                                        id="textInput1" type="text" placeholder="Enter">
                                </div>
                                <div class="flex-1">
                                    <label class="block text-coolGray-700 text-sm font-medium mb-2"
                                        for="textInput2">Address</label>
                                    <input
                                        class="rounded py-3 px-4 border border-coolGray-200 w-full outline-none focus:ring-1 ring-indigo-400"
                                        id="textInput2" type="text" placeholder="Enter">
                                </div>
                            </div>
                            <div class="sm:flex flex-wrap gap-8">
                                <div class="flex-1 mb-8 sm:mb-0">
                                    <label class="block text-coolGray-700 text-sm font-medium mb-2"
                                        for="textInput1">Apt,
                                        suite, etc</label>
                                    <input
                                        class="rounded py-3 px-4 border border-coolGray-200 w-full outline-none focus:ring-1 ring-indigo-400"
                                        id="textInput1" type="text" placeholder="(optional)">
                                </div>
                                <div class="flex-1">
                                    <label class="block text-coolGray-700 text-sm font-medium mb-2"
                                        for="textInput2">City</label>
                                    <input
                                        class="rounded py-3 px-4 border border-coolGray-200 w-full outline-none focus:ring-1 ring-indigo-400"
                                        id="textInput2" type="text" placeholder="Enter">
                                </div>
                            </div>
                            <div class="sm:flex flex-wrap gap-8">
                                <div class="relative flex-1 mb-4 max-w-md ">
                                    <label class="text-coolGray-700 text-sm font-medium mb-1 block"
                                        for="selectInput">Country</label>
                                    <select class="w-full py-3 px-4 rounded border border-coolGray-200"
                                        id="selectInput">
                                        <option value="">Morocco</option>
                                        <option value="">Option 2</option>
                                        <option value="">Option 3</option>
                                    </select>
                                </div>
                                <div class="relative flex-1 mb-4 max-w-md">
                                    <label class="text-coolGray-700 text-sm font-medium mb-1 block"
                                        for="selectInput">Region</label>
                                    <select class="w-full py-3 px-4 rounded border border-coolGray-200"
                                        id="selectInput">
                                        <option value="">Sous-Massa</option>
                                        <option value="">Option 2</option>
                                        <option value="">Option 3</option>
                                    </select>
                                </div>
                                <div class="flex-1">
                                    <label class="block text-coolGray-700 text-sm font-medium mb-2"
                                        for="textInput2">Postal
                                        Code</label>
                                    <input
                                        class="rounded py-3 px-4 border border-coolGray-200 w-full outline-none focus:ring-1 ring-indigo-400"
                                        id="textInput2" type="text" placeholder="Enter">
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- shipping address --}}
                    <div class="max-w-lg xl:max-w-xl mx-auto lg:mx-0">
                        <h2 class="text-rhino-700 text-3xl font-semibold mb-8 font-heading">Shipping address</h2>
                        <div class="pb-10 flex flex-col gap-8">
                            <div class="sm:flex flex-wrap gap-8">
                                <div class="flex-1 mb-8 sm:mb-0">
                                    <label class="block text-coolGray-700 text-sm font-medium mb-2"
                                        for="textInput1">First Name</label>
                                    <input
                                        class="rounded py-3 px-4 border border-coolGray-200 w-full outline-none focus:ring-1 ring-indigo-400"
                                        id="textInput1" type="text" placeholder="Enter">
                                </div>
                                <div class="flex-1">
                                    <label class="block text-coolGray-700 text-sm font-medium mb-2"
                                        for="textInput2">Last Name</label>
                                    <input
                                        class="rounded py-3 px-4 border border-coolGray-200 w-full outline-none focus:ring-1 ring-indigo-400"
                                        id="textInput2" type="text" placeholder="Enter">
                                </div>
                            </div>
                            <div class="sm:flex flex-wrap gap-8">
                                <div class="flex-1 mb-8 sm:mb-0">
                                    <label class="block text-coolGray-700 text-sm font-medium mb-2"
                                        for="textInput1">Phone</label>
                                    <input
                                        class="rounded py-3 px-4 border border-coolGray-200 w-full outline-none focus:ring-1 ring-indigo-400"
                                        id="textInput1" type="text" placeholder="Enter">
                                </div>
                                <div class="flex-1">
                                    <label class="block text-coolGray-700 text-sm font-medium mb-2"
                                        for="textInput2">Address</label>
                                    <input
                                        class="rounded py-3 px-4 border border-coolGray-200 w-full outline-none focus:ring-1 ring-indigo-400"
                                        id="textInput2" type="text" placeholder="Enter">
                                </div>
                            </div>
                            <div class="flex flex-wrap -mx-4 gap-8 sm:gap-0">
                                <div class="w-full sm:w-1/3 px-4">
                                    <label class="block text-coolGray-700 text-sm font-medium mb-2"
                                        for="textInput6">Country</label>
                                    <input
                                        class="rounded py-3 px-4 border border-coolGray-200 w-full outline-none focus:ring-1 ring-indigo-400"
                                        id="textInput6" type="text" placeholder="Enter">
                                </div>
                                <div class="w-full sm:w-1/3 px-4">
                                    <label class="block text-coolGray-700 text-sm font-medium mb-2" for="textInput7"
                                        contenteditable="false">Region</label>
                                    <input
                                        class="rounded py-3 px-4 border border-coolGray-200 w-full outline-none focus:ring-1 ring-indigo-400"
                                        id="textInput7" type="text" placeholder="Enter">
                                </div>
                                <div class="w-full sm:w-1/3 px-4">
                                    <label class="block text-coolGray-700 text-sm font-medium mb-2" for="textInput8"
                                        contenteditable="false">City</label>
                                    <input
                                        class="rounded py-3 px-4 border border-coolGray-200 w-full outline-none focus:ring-1 ring-indigo-400"
                                        id="textInput8" type="text" placeholder="XX-XXX">
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- billing address --}}
                    <div class="max-w-lg xl:max-w-xl mx-auto lg:mx-0">
                        <h2 class="text-rhino-700 text-3xl font-semibold mb-4 font-heading">Billing address</h2>
                        <label for="Option1" class="flex cursor-pointer items-start gap-4 mb-4">
                            <div class="flex items-center">
                                &#8203;
                                <input type="checkbox" class="billing-check size-4 rounded border-gray-300"
                                    id="Option1" checked />
                            </div>

                            <div>
                                <strong class="font-medium text-gray-900"> Same as shipping address </strong>
                            </div>
                        </label>

                        <div class="billing-form hidden mt-8 pb-10 flex-col gap-8">
                            <div class="sm:flex flex-wrap gap-8">
                                <div class="flex-1 mb-8 sm:mb-0">
                                    <label class="block text-coolGray-700 text-sm font-medium mb-2"
                                        for="textInput1">First Name</label>
                                    <input
                                        class="rounded py-3 px-4 border border-coolGray-200 w-full outline-none focus:ring-1 ring-indigo-400"
                                        id="textInput1" type="text" placeholder="Enter">
                                </div>
                                <div class="flex-1">
                                    <label class="block text-coolGray-700 text-sm font-medium mb-2"
                                        for="textInput2">Last Name</label>
                                    <input
                                        class="rounded py-3 px-4 border border-coolGray-200 w-full outline-none focus:ring-1 ring-indigo-400"
                                        id="textInput2" type="text" placeholder="Enter">
                                </div>
                            </div>
                            <div class="sm:flex flex-wrap gap-8">
                                <div class="flex-1 mb-8 sm:mb-0">
                                    <label class="block text-coolGray-700 text-sm font-medium mb-2"
                                        for="textInput1">Phone</label>
                                    <input
                                        class="rounded py-3 px-4 border border-coolGray-200 w-full outline-none focus:ring-1 ring-indigo-400"
                                        id="textInput1" type="text" placeholder="Enter">
                                </div>
                                <div class="flex-1">
                                    <label class="block text-coolGray-700 text-sm font-medium mb-2"
                                        for="textInput2">Address</label>
                                    <input
                                        class="rounded py-3 px-4 border border-coolGray-200 w-full outline-none focus:ring-1 ring-indigo-400"
                                        id="textInput2" type="text" placeholder="Enter">
                                </div>
                            </div>
                            <div class="flex flex-wrap -mx-4 gap-8 sm:gap-0">
                                <div class="w-full sm:w-1/3 px-4">
                                    <label class="block text-coolGray-700 text-sm font-medium mb-2"
                                        for="textInput6">Country</label>
                                    <input
                                        class="rounded py-3 px-4 border border-coolGray-200 w-full outline-none focus:ring-1 ring-indigo-400"
                                        id="textInput6" type="text" placeholder="Enter">
                                </div>
                                <div class="w-full sm:w-1/3 px-4">
                                    <label class="block text-coolGray-700 text-sm font-medium mb-2" for="textInput7"
                                        contenteditable="false">Region</label>
                                    <input
                                        class="rounded py-3 px-4 border border-coolGray-200 w-full outline-none focus:ring-1 ring-indigo-400"
                                        id="textInput7" type="text" placeholder="Enter">
                                </div>
                                <div class="w-full sm:w-1/3 px-4">
                                    <label class="block text-coolGray-700 text-sm font-medium mb-2" for="textInput8"
                                        contenteditable="false">City</label>
                                    <input
                                        class="rounded py-3 px-4 border border-coolGray-200 w-full outline-none focus:ring-1 ring-indigo-400"
                                        id="textInput8" type="text" placeholder="XX-XXX">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="max-w-lg xl:max-w-xl mx-auto lg:mx-0">
                        <button type="submit"
                            class="w-full bg-blue-700 hover:bg-blue-800 text-white font-bold py-3 px-6 rounded">
                            Place Order
                        </button>
                    </div>
                </div>
                {{-- order summary --}}
                <div class="w-full lg:w-5/12">
                    <div
                        class="max-w-lg sticky top-0 lg:max-w-sm md:ltr:translate-x-1/4 lg:ltr:translate-x-0 lg:mr-0 lg:py-24 px-4 sm:px-0">
                        <h2 class="text-rhino-700 text-3xl font-semibold my-7 font-heading">Order Summary</h2>
                        <div class="p-6 bg-purple-100 rounded-xl mb-16">
                            <div class="flex items-center gap-4 mb-3">
                                <img src="https://images.unsplash.com/photo-1618354691373-d851c5c3a990?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=830&q=80"
                                    alt="" class="size-16 rounded object-cover" />

                                <div>
                                    <h3 class="text-sm text-gray-900">Basic Tee 6-Pack</h3>

                                    <dl class="mt-0.5 space-y-px text-[10px] text-gray-600">
                                        <div>
                                            <dt class="inline">Size:</dt>
                                            <dd class="inline">XXS</dd>
                                        </div>

                                        <div>
                                            <dt class="inline">Color:</dt>
                                            <dd class="inline">White</dd>
                                        </div>
                                    </dl>
                                </div>
                            </div>
                            <div class="bg-white flex justify-between py-3 px-4 rounded shadow-md mb-2">
                                <p class="uppercase text-xs font-bold text-rhino-300">List price</p>
                                <p class="text-rhino-800 text-xs font-bold">$390.00</p>
                            </div>

                            <div class="flex justify-between items-center flex-wrap gap-4">
                                <h2 class="text-coolGray-800 text-lg font-semibold">Total Price</h2>
                                <p class="text-purple-500 text-lg font-semibold">$390.00</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-store.footer />
    <script>
        const billingForm = document.querySelector('.billing-form');
        const billingCheck = document.querySelector('.billing-check');

        billingCheck.addEventListener('click', () => {
            if (billingCheck.checked !== true) {
                console.log('not checked');
                billingForm.style.display = "flex";
            } else {
                console.log('checked');
                billingForm.style.display = "none";
            }
        });
    </script>
</x-layouts.landingLayout>
