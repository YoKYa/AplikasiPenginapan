<?php

use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;

Breadcrumbs::for('Dashboard', function ($trail) {
    $trail->push('Dashboard', route('admin'));
});

Breadcrumbs::for('Manage Admin', function ($trail) {
    $trail->parent('Dashboard');
    $trail->push('Manage Admin', route('manageadmin'));
});
Breadcrumbs::for('Manage Pengusaha', function ($trail) {
    $trail->parent('Dashboard');
    $trail->push('Manage Pengusaha', route('managepengusaha'));
});
Breadcrumbs::for('Manage Pelanggan', function ($trail) {
    $trail->parent('Dashboard');
    $trail->push('Manage Pelanggan', route('managepelanggan'));
});
Breadcrumbs::for('Profil Admin', function ($trail) {
    $trail->parent('Dashboard');
    $trail->push('Profil Admin', route('adminprofil'));
});
Breadcrumbs::for('Edit Profil Admin', function ($trail) {
    $trail->parent('Profil Admin');
    $trail->push('Edit Profil Admin', route('editadminprofil'));
});
// // Home > About
// Breadcrumbs::for('about', function ($trail) {
//     $trail->parent('home');
//     $trail->push('About', route('about'));
// });

// // Home > Blog
// Breadcrumbs::for('blog', function ($trail) {
//     $trail->parent('home');
//     $trail->push('Blog', route('blog'));
// });

// // Home > Blog > [Category]
// Breadcrumbs::for('category', function ($trail, $category) {
//     $trail->parent('blog');
//     $trail->push($category->title, route('category', $category->id));
// });

// // Home > Blog > [Category] > [Post]
// Breadcrumbs::for('post', function ($trail, $post) {
//     $trail->parent('category', $post->category);
//     $trail->push($post->title, route('post', $post->id));
// });
?>