@props([
    'content',
    'classes' => 'default-class'
])
<span
{{ $attributes }}
{{-- {{ $attributes->merge([]) }} --}}
>
    {{ $content }}
    {{ $slot }}
</span>