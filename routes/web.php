<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $products = [
        [
            'name' => 'Vanilla Latte',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, nihil?',
            'price' => 12,
            'isFeatured' => true,
            'rating' => 4.2,
            'image' => './assets/images/product-1.png',
            'tags' => ['Hot', 'Cold']   
        ],
        [
            'name' => 'Ekspresso',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, nihil?',
            'price' => 14,
            'isFeatured' => false,
            'rating' => 4.5,
            'image' => './assets/images/product-2.png',
            'tags' => ['Sweet', 'Sour']   
        ],
        [
            'name' => 'Hazelnut Latte',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, nihil?',
            'price' => 24,
            'isFeatured' => false,
            'rating' => 4.8,
            'image' => './assets/images/product-3.png',
            'tags' => ['Salty', 'Crunchy']
        ],
    ];

    return view('homepage', compact('products'));
});

Route::get('/delivery', function () {
    return view('delivery');
});
