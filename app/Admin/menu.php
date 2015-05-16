<?php

use SleepingOwl\Admin\Admin;

Admin::menu()->url('/')->label('Start page')->icon('fa-dashboard');

Admin::menu('App\Models\User')->icon('fa-user');

Admin::menu('App\Models\Order');
