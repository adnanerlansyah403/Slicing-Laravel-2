@props([
    'tags' => []
])
{{-- @dd($tags) --}}
<ul>
    {{-- <li class="active">
        <a href="#">Hot</a>
    </li> --}}
    {{-- <li>
        <a href="#">Cold</a>
    </li> --}}
    @foreach ($tags as $tag)
        <x-product.tag-item :tagName="$tag" />
    @endforeach
</ul>