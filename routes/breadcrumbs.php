<?php

// Home
Breadcrumbs::for('home', function ($trail) {
    $trail->push('Home', route('home'));
});

Breadcrumbs::for('gallery', function ($trail) {
	$trail->parent('home');
    $trail->push('Gallery', route('admin.galleries'));
});

Breadcrumbs::for('layanan', function ($trail) {
	$trail->parent('home');
    $trail->push('Layanan', route('admin.layanan'));
});


Breadcrumbs::for('view.layanan', function ($trail, $layanan) {
	$trail->parent('layanan');
    $trail->push($layanan->name, route('admin.layanan.update', ['layanan' => $layanan->id]));
});

Breadcrumbs::for('update.paket', function ($trail, $paket) {
	$trail->parent('view.layanan', $paket->layanan);
    $trail->push($paket->name, route('admin.paket.update', ['paket' => $paket->id]));
});