<?php

use SleepingOwl\Admin\Admin;

//Admin::menu()->url('/')->label('Start page')->icon('fa-dashboard');


Admin::menu()->label('Shop')->items(function()
{
    Admin::menu('App\Models\Order');
    Admin::menu('App\Models\ExecutedOrder');
    Admin::menu('App\Models\OrderStatus');
});

Admin::menu()->label('Products')->items(function()
{
    Admin::menu('App\Models\Product');
    Admin::menu('App\Models\ProductInfo');
    Admin::menu('App\Models\Producer');
});

Admin::menu()->label('Supplies')->items(function()
{
    Admin::menu('App\Models\DeliveryOrder');
    Admin::menu('App\Models\Supply');
    Admin::menu('App\Models\Supplier');
    Admin::menu('App\Models\SupplyStatus');
});

Admin::menu()->label('Backend')->items(function()
{
    Admin::menu('App\Models\Salary');
});

Admin::menu('App\Models\User')->icon('fa-users');