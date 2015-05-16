<?php

Admin::model('App\Models\DeliveryOrder')->title('Delivery requests')->display(function ()
{
	$display = AdminDisplay::datatables();
	$display->with();
	$display->filters([

	]);
	$display->columns([
		Column::string('manager_id')->label('Manager_id'),
		Column::string('product_id')->label('Product_id'),
		Column::string('amount')->label('Amount'),
		Column::string('status')->label('Status'),
	]);
	return $display;
})->createAndEdit(function ()
{
	$form = AdminForm::form();
	$form->items([
		FormItem::text('manager_id', 'Manager'),
		FormItem::text('product_id', 'Product'),
		FormItem::text('amount', 'Amount'),
		FormItem::checkbox('status', 'Status'),
	]);
	return $form;
});