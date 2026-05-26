<?php

namespace App\Controllers;

use App\Models\OrderModel;

class Payment extends BaseController
{
    public function process()
    {
        $quantity = $this->request->getPost('quantity');

        $total = 550000 * $quantity;

        $orderModel = new OrderModel();

        $orderModel->save([

            'fullname' => $this->request->getPost('fullname'),

            'email' => $this->request->getPost('email'),

            'phone' => $this->request->getPost('phone'),

            'gender' => $this->request->getPost('gender'),

            'province' => $this->request->getPost('province'),

            'birthdate' => $this->request->getPost('birthdate'),

            'ticket_type' => $this->request->getPost('ticket_type'),

            'quantity' => $quantity,

            'total_price' => $total,

            'payment_method' => 'BCA'

        ]);

        $data = [

            'fullname' => $this->request->getPost('fullname'),

            'email' => $this->request->getPost('email'),

            'phone' => $this->request->getPost('phone'),

            'quantity' => $quantity,

            'ticket_type' => $this->request->getPost('ticket_type')

        ];

        return view('payment/index', $data);
    }
}