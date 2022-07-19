@props(['active' => false])

@php
    $classes = 'block text-left my-1 pl-3 text-sm leading-5 hover:bg-blue-500 focus:bg-blue-500 hover:text-white focus:text-white';

    if($active) $classes = 'bg-blue-500 text-white block text-left my-1 pl-3'
@endphp

<a {{ $attributes->merge (['class' => $classes ]) }}>
  {{$slot}}
</a>