<?php

use SleepingOwl\Admin\Admin;
use SleepingOwl\Admin\Columns\Column;
use SleepingOwl\Admin\Display\AdminDisplay;
use SleepingOwl\Admin\Form\AdminForm;
use SleepingOwl\Admin\FormItems\FormItem;

Admin::model('App\Models\Product')->title('Products')->display(function ()
{
	$display = AdminDisplay::datatables();
	$display->with();
	$display->filters([

	]);
	$display->columns([
		Column::string('name')->label('Name'),
		Column::string('producer_id')->label('Producer_id'),
		Column::string('price')->label('Price'),
		Column::string('amount')->label('Amount'),
		Column::string('suppliers')->label('Suppliers'),
	]);
	return $display;
})->createAndEdit(function ()
{
	$form = AdminForm::form();
	$form->items([
		FormItem::text('name', 'Name'),
		FormItem::text('producer_id', 'Producer'),
		FormItem::text('price', 'Price'),
		FormItem::text('amount', 'Amount'),
		FormItem::ckeditor('suppliers', 'Suppliers'),
	]);
	return $form;
});