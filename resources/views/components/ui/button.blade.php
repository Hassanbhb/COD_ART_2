@props(['href' => null, 'style' => 'primary', 'size' => 'md', 'icon'])

@php

    $buttonStyles = match ($style) {
        'primary' => 'text-white bg-vermilion-500',
        'secondary' => 'text-vermilion-500 hover:text-white bg-vermilion-50',
        'white' => 'text-vermilion-900 hover:text-white bg-white ',
    };

    $buttonSizes = match ($size) {
        'lg' => 'py-4 px-8',
        'md' => 'py-3 px-6',
        'sm' => 'py-2 px-4',
    };

@endphp

<div class="mb-8 lg:mb-0 lg:mr-8">
    <a href="{{ $href }}"
        {{ $attributes->merge(['class' => "relative group inline-block w-full sm:w-auto font-semibold rounded-full overflow-hidden $buttonStyles $buttonSizes transition duration-300"]) }}>

        <div @class([
            'absolute top-0 right-full w-full h-full transform group-hover:translate-x-full group-hover:scale-102 transition duration-500',
            $attributes->get('bg-hover'),
        ]) class="">
        </div>

        <div class="relative flex items-center justify-center">
            <span>
                {{ $slot }}
            </span>

            @isset($icon)
                <span class="ml-4">
                    <x-ui.icon :name="$icon" />
                </span>
            @endisset
        </div>
    </a>
</div>
