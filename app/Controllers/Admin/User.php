<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

use App\Models\OrderModel;

class User extends BaseController
{
    public function index()
    {

        $orderModel = new OrderModel();

        // $recentTransactions = $orderModel
        //     ->where('payment_status', 'paid')
        //     ->orderBy('created_at', 'DESC')
        //     ->findAll(5);

        $userData = $orderModel
            ->orderBy('created_at', 'DESC')
            ->findAll(5);

        $data = [

            'total_order' =>
            $orderModel->countAll(),

            'paid_order' =>
            $orderModel
                ->where('payment_status', 'paid')
                ->countAllResults(),

            'pending_order' =>
            $orderModel
                ->where('payment_status', 'pending')
                ->countAllResults(),

            'total_revenue' =>
            $orderModel
                ->selectSum('total_price')
                ->where('payment_status', 'paid')
                ->first()['total_price'],

            'user_data' =>
            $userData,
        ];

        return view(
            'admin/user/index',
            $data
        );
    }
}
