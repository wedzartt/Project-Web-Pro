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
        ->findAll(15);

        $data = [

            'BCA' =>
            $orderModel
                ->where('payment_method', 'BCA')
                ->where('payment_status', 'paid')
                ->countAllResults(),

            'DANA' =>
            $orderModel
                ->where('payment_method', 'DANA')
                ->where('payment_status', 'paid')
                ->countAllResults(),

            'GOPAY' =>
            $orderModel
                ->where('payment_method', 'GOPAY')
                ->where('payment_status', 'paid')
                ->countAllResults(),

            'QRIS' =>
            $orderModel
                ->where('payment_method', 'QRIS')
                ->where('payment_status', 'paid')
                ->countAllResults(),

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

            'transactions_data' =>
            $recentTransactions,

            // recent_transcation harus sama dengan foreach di view admin/dashboard/idex.php dibagian ($transactions_data as $order):
        ];

        return view(
            'admin/transaction/index',
            $data
        );
    }
}