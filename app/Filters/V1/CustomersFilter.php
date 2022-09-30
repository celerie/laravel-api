<?php

namespace App\Filters\V1;

use Illuminate\http\Request;
use App\Filters\ApiFilter;

class CustomersFilter extends ApiFilter {
    protected $safeParms = [
        'postalCode' => ['eq', 'gt', 'lt'],
        'name' => ['eq'],
        'type' => ['eq'],
        'email' => ['eq'],
        'address' => ['eq'],
        'city' => ['eq'],
        'state' => ['eq'],
    ];

    protected $columnMap = [
        'postalCode' => 'postal_code'
    ];

    protected $operatorMap = [
        'eq' => '=',
        'lt' => '<',
        'lte' => '≤',
        'gt' => '>',
        'gte' => '≥',
    ];

    
}