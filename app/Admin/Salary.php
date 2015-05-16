<?php

Admin::model('App\Models\Salary')->title('Salaries')->display(function ()
{
	$display = AdminDisplay::datatables();
	$display->with();
	$display->filters([

	]);
	$display->columns([
		Column::string('id')->label('Id'),
		Column::string('position')->label('Position'),
		Column::string('salary')->label('Salary'),
	]);
	return $display;
})->createAndEdit(function ()
{
	$form = AdminForm::form();
	$form->items([
		FormItem::text('position', 'Position'),
		FormItem::text('salary', 'Salary'),
	]);
	return $form;
});