<?php

/*
 * This is a simple example of the main features.
 * For full list see documentation.
 */

use SleepingOwl\Admin\Admin;
use SleepingOwl\Admin\Columns\Column;
use SleepingOwl\Admin\Display\AdminDisplay;
use SleepingOwl\Admin\Filter\Filter;
use SleepingOwl\Admin\Form\AdminForm;
use SleepingOwl\Admin\FormItems\FormItem;

Admin::model('App\Models\User')->title('Users')->display(function ()
    {
        $display = AdminDisplay::datatables();

        $display->with('salary');

        $display->columns([
            Column::string('name')->label('Name'),
            Column::string('surname')->label('Surname'),
            Column::string('middle_name')->label('Middle Name'),
            Column::string('phone')->label('Phone'),
            Column::string('address')->label('Address'),
            Column::string('email')->label('Email'),
            Column::string('salary.position')->label('Status (position)'),
        ]);

        return $display;
    })->createAndEdit(function ()
        {
            $form = AdminForm::form();

            $form->items([
                FormItem::text('name', 'Name')->required(),
                FormItem::text('surname', 'Surname')->required(),
                FormItem::text('middle_name', 'Middle Name')->required(),
                FormItem::text('phone', 'Phone')->required(),
                FormItem::text('address', 'Address')->required(),
                FormItem::text('email', 'Email')->required()->unique(),
                FormItem::text('status', 'Status (position)')->required(),
            ]);

            return $form;
        });