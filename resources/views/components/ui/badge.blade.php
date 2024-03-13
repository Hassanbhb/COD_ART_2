@props(["size" => "md"])

@php
	$badgeClasses = match($size) {
		'lg' => 'text-lg py-2 px-7',
		'md' => 'text-base py-1.5 px-4',
		'sm' => 'text-xs py-1 px-3',
	};
@endphp

<span {{ $attributes->merge(["class" => "inline-block mb-5 font-semibold text-vermilion-500 bg-vermilion-50 rounded-full $badgeClasses"]) }}>
    {{ $slot }}
</span>
