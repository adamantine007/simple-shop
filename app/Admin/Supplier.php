<?php

Admin::model('App\Models\Supplier')->title('Suppliers')->display(function ()
{
	$display = AdminDisplay::datatables();
	$display->with();
	$display->filters([

	]);
	$display->columns([
		Column::string('name')->label('Name'),
		Column::string('address')->label('Address'),
		Column::string('phone')->label('Phone'),
		Column::string('email')->label('Email'),
	]);
	return $display;
})->createAndEdit(function ()
{
	$form = AdminForm::form();
	$form->items([
		FormItem::text('name', 'Name'),
		FormItem::text('address', 'Address'),
		FormItem::text('phone', 'Phone'),
		FormItem::text('email', 'Email'),
	]);
	return $form;
});