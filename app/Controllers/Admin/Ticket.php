<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

use App\Models\OrderModel;

class Ticket extends BaseController
{
    public function index()
    {

        $orderModel = new OrderModel();

        $data = [
            'day1_sold' =>
            $orderModel
                ->selectSum('quantity', 'total')
                ->where('ticket_type', 'DAY 1')
                ->where('payment_status', 'paid')
                ->first()['total'] ?? 0,

            'day2_sold' =>
            $orderModel
                ->selectSum('quantity', 'total')
                ->where('ticket_type', 'DAY 2')
                ->where('payment_status', 'paid')
                ->first()['total'] ?? 0,

            'day3_sold' =>
            $orderModel
                ->selectSum('quantity', 'total')
                ->where('ticket_type', '2 DAY PASS')
                ->where('payment_status', 'paid')
                ->first()['total'] ?? 0,

        ];

        // dd($data);

        return view(
            'admin/ticket/index',
            $data
        );
    }
}