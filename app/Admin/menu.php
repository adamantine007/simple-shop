<?php

use SleepingOwl\Admin\Admin;

//Admin::menu()->url('/')->label('Start page')->icon('fa-dashboard');


Admin::menu()->label('Shop')->icon('fa-shopping-cart')->items(function()
{
    Admin::menu('App\Models\Order')->icon('fa-list');
//    Admin::menu('App\Models\ExecutedOrder')->icon('fa-check-square-o');
    Admin::menu('App\Models\OrderStatus')->icon('fa-asterisk');
});

Admin::menu()->label('Products')->icon('fa-thumbs-o-up')->items(function()
{
    Admin::menu('App\Models\Product')->icon('fa-thumbs-o-up');
    Admin::menu('App\Models\ProductInfo')->icon('fa-info-circle');
    Admin::menu('App\Models\Producer')->icon('fa-sitemap');
});

Admin::menu()->label('Supplies')->icon('fa-truck')->items(function()
{
    Admin::menu('App\Models\DeliveryOrder')->icon('fa-list');
    Admin::menu('App\Models\Supply')->icon('fa-check-square-o');
    Admin::menu('App\Models\Supplier')->icon('fa-list-ol');
    Admin::menu('App\Models\SupplyStatus')->icon('fa-asterisk');
});

Admin::menu()->label('Backend')->icon('fa-cogs')->items(function()
{
    Admin::menu('App\Models\Salary')->icon('fa-money');
});

Admin::menu('App\Models\User')->icon('fa-users');