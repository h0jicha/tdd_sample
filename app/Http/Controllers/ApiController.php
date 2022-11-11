<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getCustomers(): \Illuminate\Http\JsonResponse
    {
        return response()->json(Customer::query()->select(['id', 'name'])->get());
    }

    public function postCustomers(Request $request)
    {
        // 仮実装
        if (!$request->json('name')) {
            return response()->make('', \Illuminate\Http\Response::HTTP_UNPROCESSABLE_ENTITY);
        }
        $customer = new Customer();
        $customer->name = $request->json('name');
        $customer->save();
    }
}
