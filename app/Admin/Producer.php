<?php

Admin::model('App\Models\Producer')->title('Producers')->display(function ()
{
	$display = AdminDisplay::datatables();
	$display->with();
	$display->filters([

	]);
	$display->columns([
		Column::string('name')->label('Name'),
		Column::string('info')->label('Info'),
		Column::string('country')->label('Country'),
	]);
	return $display;
})->createAndEdit(function ()
{
	$form = AdminForm::form();
	$form->items([
		FormItem::text('name', 'Name'),
		FormItem::text('country', 'Country'),
		FormItem::ckeditor('info', 'Info'),
	]);
	return $form;
});