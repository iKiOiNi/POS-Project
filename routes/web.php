<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\POSController;

Route::get('/', [POSController::class, 'index']);
Route::get('/user', [POSController::class, 'user']);
Route::get('/user_account', [POSController::class, 'userInformation'])->name('user_account');
Route::get('/supplier', [POSController::class, 'supplier']);
Route::get('/order', [POSController::class, 'order_supplies']);
Route::get('/delivery', [POSController::class, 'delivery']);
Route::get('/item_management', [POSController::class, 'item_management']);
Route::get('/inventory_management', [POSController::class, 'inventory_management']);
Route::get('/inventory_adjustment', [POSController::class, 'inventory_adjustment']);
Route::get('/activity_log', [POSController::class, 'activity_log']);
Route::get('/inventory_report', [POSController::class, 'inventory_report']);
Route::get('/reorder_list_report', [POSController::class, 'reorder_list_report']);
Route::get('/fast_moving_item_report', [POSController::class, 'fast_moving_item_report']);
Route::get('/slow_moving_item_report', [POSController::class, 'slow_moving_item_report']);
Route::get('/sales_report', [POSController::class, 'sales_report']);
Route::get('/stock_movement_report', [POSController::class, 'stock_movement_report']);
Route::get('/expiration_report', [POSController::class, 'expiration_report']);
Route::get('/sales_return_report', [POSController::class, 'sales_return_report']);
Route::get('/transaction_history_report', [POSController::class, 'transaction_history_report']);
