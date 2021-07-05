<?php

use Diglactic\Breadcrumbs\Breadcrumbs;

Breadcrumbs::for('home', function ($trail) {
    $trail->push('Home', route('home'));
});

Breadcrumbs::for('contact-us', function ($trail) {
    $trail->parent('home');
    $trail->push('Contact Us', route('contact-us.index'));
});

// Posts
Breadcrumbs::for('posts', function ($trail) {
    $trail->parent('home');
    $trail->push('Posts', route('posts.index'));
});

Breadcrumbs::for('post-category', function ($trail, $category) {
    $trail->parent('posts');
    $trail->push($category->name, route('posts.index'));
});

Breadcrumbs::for('post', function ($trail, $post) {
    $trail->parent('post-category', $post->category);
    $trail->push($post->title);
});

// Products
Breadcrumbs::for('products', function ($trail) {
    $trail->parent('home');
    $trail->push('Products', route('products.index'));
});

Breadcrumbs::for('product-category', function ($trail, $category) {
    $trail->parent('products');
    $trail->push($category->name, route('products.index', ['category_id' => $category->id]));
});

Breadcrumbs::for('product', function ($trail, $product) {
    if ($product->category) {
        $trail->parent('product-category', $product->category);
    } else {
        $trail->parent('products');
    }
    $trail->push($product->name);
});

// Our Team
Breadcrumbs::for('our-teams', function ($trail) {
    $trail->parent('home');
    $trail->push('Our Teams', route('our-team.index'));
});

Breadcrumbs::for('team-member', function ($trail, $title) {
    $trail->parent('our-teams');
    $trail->push($title);
});

Breadcrumbs::for('stores', function ($trail) {
    $trail->parent('home');
    $trail->push('Stores', route('stores.index'));
});

Breadcrumbs::for('page', function ($trail, $title) {
    $trail->parent('home');
    $trail->push($title);
});
