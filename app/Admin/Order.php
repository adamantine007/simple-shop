<?php

Admin::model('App\Models\Order')->title('Orders')->display(function ()
{
	$display = AdminDisplay::datatables();
	$display->with();
	$display->filters([

	]);
	$display->columns([
		Column::string('customer_id')->label('Customer_id'),
		Column::string('products')->label('Products'),
		Column::string('address')->label('Address'),
		Column::datetime('delivery_date')->label('Delivery_date')->format('d.m.Y'),
		Column::string('status_id')->label('Status_id'),
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
		FormItem::text('price', 'Price'),
		FormItem::ckeditor('products', 'Products'),
	]);
	return $form;
});