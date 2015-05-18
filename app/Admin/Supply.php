<?php

use SleepingOwl\Admin\Admin;
use SleepingOwl\Admin\Columns\Column;
use SleepingOwl\Admin\Display\AdminDisplay;
use SleepingOwl\Admin\Form\AdminForm;
use SleepingOwl\Admin\FormItems\FormItem;

Admin::model('App\Models\Supply')->title('Supplies')->display(function ()
{
	$display = AdminDisplay::datatables();
	$display->with();
	$display->filters([

	]);
	$display->columns([
		Column::string('supplier_id')->label('Supplier_id'),
		Column::string('manager_id')->label('Manager_id'),
		Column::string('product_id')->label('Product_id'),
		Column::string('amount')->label('Amount'),
		Column::string('price')->label('Price'),
	]);
	return $display;
})->createAndEdit(function ()
{
	$form = AdminForm::form();
	$form->items([
		FormItem::text('supplier_id', 'Supplier'),
		FormItem::text('manager_id', 'Manager'),
		FormItem::text('product_id', 'Product'),
		FormItem::text('amount', 'Amount'),
		FormItem::text('price', 'Price'),
	]);
	return $form;
});