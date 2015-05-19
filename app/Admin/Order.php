<?php

use SleepingOwl\Admin\Admin;
use SleepingOwl\Admin\Columns\Column;
use SleepingOwl\Admin\Display\AdminDisplay;
use SleepingOwl\Admin\Form\AdminForm;
use SleepingOwl\Admin\FormItems\FormItem;

Admin::model('App\Models\Order')->title('Orders')->display(function ()
    {
        $display = AdminDisplay::datatables();

        $display->with('customer', 'status');

        $display->filters([

        ]);

        $display->columns([
            Column::string('customer.name')->label('Customer name'),
            Column::string('customer.surname')->label('Customer surname'),
            Column::string('customer.middle_name')->label('Customer middle name'),
            Column::string('customer.phone')->label('Phone'),

            Column::string('product.name')->label('Product'),

            Column::string('address')->label('Address'),
            Column::datetime('delivery_date')->label('Delivery date')->format('d.m.Y'),

            Column::string('status.name')->label('Status'),

            Column::string('price')->label('Price'),

            Column::datetime('created_at')->label('Create'),
            Column::datetime('updated_at')->label('Update'),
        ]);

        return $display;
    })->createAndEdit(function ()
        {
            $form = AdminForm::form();

            $form->items([
                FormItem::select('customer_id', 'Customer')->model('App\Models\User')->display('name'),

                FormItem::text('address', 'Address'),

                FormItem::timestamp('delivery_date', 'Delivery Date'),

                FormItem::select('status_id', 'Status')->model('App\Models\OrderStatus')->display('name'),

                FormItem::select('product_id', 'Product')->model('App\Models\Product')->display('name'),

                FormItem::text('price', 'Price'),
            ]);

            return $form;
        });