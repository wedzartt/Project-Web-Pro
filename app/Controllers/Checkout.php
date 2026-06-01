<?php

namespace App\Controllers;

use App\Models\OrderModel;
// use App\Models\TransactionModel;

class Checkout extends BaseController
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

            // 'payment_method' => 'BCA'

        ]);

        $data = [

            'fullname' => $this->request->getPost('fullname'),

            'email' => $this->request->getPost('email'),

            'phone' => $this->request->getPost('phone'),

            'quantity' => $quantity,

            'ticket_type' => $this->request->getPost('ticket_type'),

            'gender' => $this->request->getPost('gender'),

            'province' => $this->request->getPost('province'),

            'birthdate' => $this->request->getPost('birthdate')

        ];

        return view('payment/index', $data);
    }

    // public function payment($id)
    // {
    //     $data = [
    //         'payment_method' => $this->request->getPost('payment_method'),
    //     ];

    //     dd(
    //         $this->request
    //             ->getPost('fullname')
    //     );

    //     return view('payment/succes', $data);
    // }

    // public function paymentProcess($id)
    // {

    //     dd(
    //         $this->request
    //             ->getPost('payment_method')
    //     );
    // }

    public function succes()
    {

        dd(
            $this->request
                ->getPost('payment_method')
        );
    }
}
