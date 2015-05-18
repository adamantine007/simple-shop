<?php

use SleepingOwl\Admin\Admin;
use SleepingOwl\Admin\Columns\Column;
use SleepingOwl\Admin\Display\AdminDisplay;
use SleepingOwl\Admin\Form\AdminForm;
use SleepingOwl\Admin\FormItems\FormItem;

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