<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

use App\Models\OrderModel;

class Transaction extends BaseController
{
    public function index()
    {
        $orderModel = new OrderModel();

        $recentTransactions = $orderModel
        ->orderBy('created_at', 'DESC')
        ->findAll(10);

        $data = [            
            'transactions_data' =>
            $recentTransactions,
        ];

        return view(
            'admin/transaction/index',
            $data
        );
    }
}