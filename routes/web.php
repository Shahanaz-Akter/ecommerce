<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.dashboard');
});

Route::get('/new_items', function () {
    return view('Items.items');
});
Route::get('/new_item_groups', function () {
    return view('Items.item_group');
});

Route::get('/new_item_adjustment', function () {
    return view('Items.item_adjustment');
});

Route::get('/new_bills', function () {
    return view('Purchases.new_bills');
});
Route::get('/new_expenses', function () {
    return view('Purchases.new_expenses');
});
Route::get('/new_payments', function () {
    return view('Purchases.new_payments');
});
Route::get('/new_recurring_bills', function () {
    return view('Purchases.new_recurring_bills');
});
Route::get('/new_orders', function () {
    return view('Purchases.new_orders');
});
Route::get('/new_recurring_expenses', function () {
    return view('Purchases.new_recurring_expenses');
});
Route::get('/new_vendors', function () {
    return view('Purchases.new_vendors');
});

Route::get('/new_credit_note', function () {
    return view('Sales.new_credit_notes');
});

Route::get('/new_customer', function () {
    return view('Sales.new_customer');
});
Route::get('/new_estimate', function () {
    return view('Sales.new_estimate');
});

Route::get('/new_invoice', function () {
    return view('Sales.new_invoice');
});
Route::get('/new_payment_received', function () {
    return view('Sales.new_payment_received');
});

Route::get('/new_recurring_invoice', function () {
    return view('Sales.new_recurring_invoice');
});

Route::get('/new_sales_receipt', function () {
    return view('Sales.new_sales_receipt');
});
