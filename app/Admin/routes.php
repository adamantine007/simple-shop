<?php

Route::get('', [
	'as' => 'admin.home',
	function ()
	{
		$content = 'Define your dashboard here.';
		return Admin::view($content, 'Dashboard');
	}
]);

Route::get('summary/products', function() {

    $products = \App\Models\Product::all();

    return view('summary.products', compact('products'));
});

Route::get('summary/users', function() {

    $users = \App\Models\User::all();

    foreach ($users as $user) {
        $orders = $user->orders()->get();

        $price = 0;
        foreach($orders as $order) {
            $price += $order->price;
        }

        $user->price = $price;
    }

    return view('summary.users', compact('users'));
});

