<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

use App\Models\OrderModel;

class Dashboard extends BaseController
{
    public function index()
    {

        $orderModel = new OrderModel();

        // $recentTransactions = $orderModel
        //     ->where('payment_status', 'paid')
        //     ->orderBy('created_at', 'DESC')
        //     ->findAll(5);

        $recentTransactions = $orderModel
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
            
            'recent_transactions' =>
            $recentTransactions,

            // recent_transcation harus sama dengan foreach di view admin/dashboard/idex.php dibagian ($transactions_data as $order):
        ];

        return view(
            'admin/dashboard/index',
            $data
        );
    }
}
