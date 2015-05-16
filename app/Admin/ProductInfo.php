<?php

Admin::model('App\Models\ProductInfo')->title('Info about products')->display(function ()
{
	$display = AdminDisplay::datatables();
	$display->with();
	$display->filters([

	]);
	$display->columns([
		Column::string('product_id')->label('Product_id'),
		Column::string('info')->label('Info'),
	]);
	return $display;
})->createAndEdit(function ()
{
	$form = AdminForm::form();
	$form->items([
		FormItem::text('product_id', 'Product'),
		FormItem::ckeditor('info', 'Info'),
	]);
	return $form;
});