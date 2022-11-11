<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Services\CustomerService;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getCustomers(CustomerService $customerService): \Illuminate\Http\JsonResponse
    {
        return response()->json($customerService->getCustomers());
    }

    public function postCustomers(Request $request, CustomerService $customerService)
    {
        $this->validate(
            $request,
            ['name' => 'required'],
            ['name.required' => ':attribute は必須事項です']
        );
        $customerService->addCustomer($request->json('name'));
    }

    public function getCustomer()
    {
    }

    public function postCustomer()
    {
    }

    public function deleteCustomer()
    {
    }

    public function getReports()
    {
    }

    public function postReport()
    {
    }

    public function getReport()
    {
    }

    public function putReport()
    {
    }

    public function deleteReport()
    {
    }
}
