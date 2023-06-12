@props(['message'])

@if ($message)
<div {{ $attributes->merge(['class' => 'valid-feedback']) }}>
    {{ $message }}
</div>
@endif
