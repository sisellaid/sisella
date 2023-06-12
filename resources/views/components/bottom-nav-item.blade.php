@props(['active'])

@php
$classes = ($active ?? false) ? 'active-nav':'';
@endphp
<a {{ $attributes->merge(['class' => $classes]) }}>
    {{$slot}}
</a>
