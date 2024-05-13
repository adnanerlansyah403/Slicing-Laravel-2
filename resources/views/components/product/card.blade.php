@props([
    'product'
])
<div class="card">
    {{-- @dd(!$product['isFeatured'] ? 'hidden' : '') --}}
    {{-- <span @class(['hidden' => !$product['isFeatured']])>Top</span> --}}
    <x-product.status @class(['card-status', 'hidden' => !$product['isFeatured']])>
        Top
    </x-product.status>
    <div class="card-image">
        <img src="./assets/images/product-1.png" width="300" height="220" alt="product 1">
        <x-badge :content="$product['rating']" class="card-badge">
            <img src="./assets/icons/star-icon.svg" width="14" height="14" alt="star icon">
        </x-badge>
        {{-- <span class="card-badge">
            4.8
            <img src="./assets/icons/star-icon.svg" width="14" height="14" alt="star icon">
        </span> --}}
    </div>
    <div class="card-description">
        <h4>{{ $product['name'] }}</h4>
        <span>{{ $product['price'] }}K</span>
    </div>
    <div class="card-actions">
        {{-- <ul>
            <li class="active">
                <a href="#">Hot</a>
            </li>
            <li>
                <a href="#">Cold</a>
            </li>
        </ul> --}}
        <x-product.tags :tags="$product['tags']" />
        <button type="button">
            <img src="./assets/icons/white-cart-icon.svg" width="18" height="18" alt="white cart">
        </button>
    </div>
</div>