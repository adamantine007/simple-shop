<?php

use SleepingOwl\Admin\Admin;
use SleepingOwl\Admin\Columns\Column;
use SleepingOwl\Admin\Display\AdminDisplay;
use SleepingOwl\Admin\Form\AdminForm;
use SleepingOwl\Admin\FormItems\FormItem;

Admin::model('App\Models\ExecutedOrder')->title('Executed orders')->display(function ()
    {
        $display = AdminDisplay::datatables();

        $display->with('customer');

        $display->filters([

        ]);

        $display->columns([
            Column::string('customer.name')->label('Customer name'),
            Column::string('customer.surname')->label('Customer surname'),
            Column::string('customer.middle_name')->label('Customer middle name'),

            Column::string('products')->label('Products'),

            Column::string('address')->label('Address'),

            Column::datetime('delivery_date')->label('Delivery date')->format('d.m.Y'),

            Column::string('status.name')->label('Status'),

            Column::string('seller_id')->label('Seller_id'),

            Column::string('suppliers')->label('Suppliers'),

            Column::string('price')->label('Price'),
        ]);

        return $display;
    })->createAndEdit(function ()
        {
            $form = AdminForm::form();

            $form->items([
                FormItem::text('customer_id', 'Customer'),
                FormItem::text('address', 'Address'),
                FormItem::date('delivery_date', 'Delivery Date'),
                FormItem::checkbox('status_id', 'Status'),
                FormItem::text('seller_id', 'Seller'),
                FormItem::text('price', 'Price'),
                FormItem::ckeditor('products', 'Products'),
                FormItem::ckeditor('suppliers', 'Suppliers'),
            ]);

            return $form;
        });