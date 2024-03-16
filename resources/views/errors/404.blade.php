<x-layouts.landingLayout title="COD ART - 404">
  
  <x-navbar/>
  <section class="py-24 lg:py-40">
    <div class="container px-4 mx-auto">
      <div class="max-w-lg mx-auto text-center">
        <img class="block mx-auto mb-10" src="{{ Vite::asset('resources/assets/http-codes/404.png')}}" alt="">
        <h4 class="text-4xl font-bold mb-4">Oops. That page doesn’t exist.</h4>
        <p class="text-xl text-gray-500 mb-10">Something went wrong, so this page is broken.</p>
        <a class="inline-block text-base font-bold text-yellowGreen-700 hover:text-yellowGreen-600" href="#">Go back to Homepage</a>
      </div>
    </div>
  </section>
</x-layouts.landingLayout>