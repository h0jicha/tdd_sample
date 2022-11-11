<?php

use App\Http\Controllers\ApiController;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('customers', [ApiController::class, 'getCustomers']);
Route::post('customers', [ApiController::class, 'postCustomers']);

Route::get('customers/{customer_id}', function () {});
Route::post('customers/{customer_id}', function () {});
Route::delete('customers/{customer_id}', function () {});

Route::get('reports', function () {});
Route::post('reports', function () {});

Route::get('reports/{report_id}', function () {});
Route::post('reports/{report_id}', function () {});
Route::delete('reports/{report_id}', function () {});
