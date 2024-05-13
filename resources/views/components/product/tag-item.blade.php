@props([
    'tagName' => ''
])
{{-- @dd($tagName) --}}
<li 
{{-- class="active" --}}
>
    <a href="#">{{ $tagName }}</a>
</li>