<?php

namespace App\Services;

use App\Models\Customer;

class CustomerService
{
    public static function getCustomers()
    {
       return Customer::query()->select(['id', 'name'])->get();
    }

    public static function addCustomer($name)
    {
        $customer = new Customer();
        $customer->name = $name;
        $customer->save();
    }
}