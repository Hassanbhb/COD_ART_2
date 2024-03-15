<div class="hidden md:block relative h-16 px-8 bg-teal-900">
  <img class="absolute bottom-0 left-1/2 transform -translate-x-1/2"
      src="{{ Vite::asset('resources/assets/headers/shadow-bottom-green.png') }}" alt="">
  <div class="relative flex h-full items-center justify-center">
      <span class="text-sm lg:text-base text-white">
        {{ $slot }}
      </span>
  </div>
</div>