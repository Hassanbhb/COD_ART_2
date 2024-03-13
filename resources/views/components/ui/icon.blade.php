@props(['name', 'type' => 's'])

@php
    $icon = "heroicon-$type-$name";
@endphp
<x-dynamic-component :component="$icon" {{ $attributes->merge(['class' => 'h-5 w-45']) }} />
