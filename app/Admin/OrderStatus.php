<?php

Admin::model('App\Models\OrderStatus')->title('Order statuses')->display(function ()
{
	$display = AdminDisplay::datatables();
	$display->with();
	$display->filters([

	]);
	$display->columns([
		Column::string('id')->label('Id'),
		Column::string('name')->label('Name'),
	]);
	return $display;
})->createAndEdit(function ()
{
	$form = AdminForm::form();
	$form->items([
		FormItem::text('name', 'Name'),
	]);
	return $form;
});