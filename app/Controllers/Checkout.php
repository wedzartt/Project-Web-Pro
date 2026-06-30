<?php

namespace App\Controllers;

use App\Models\OrderModel;
// use App\Models\TransactionModel;

class Checkout extends BaseController
{
    public function process()
    {

        // dd($this->request->getPost());

        $quantity = $this->request->getPost('quantity');    

        $ticketPrice = $this->request->getPost('ticket_price');

        $total = $ticketPrice * $quantity;

        $orderCode = 'ORD-' . date('YmdHis');

        $orderModel = new OrderModel();

        $orderModel->save([

            'order_code' => $orderCode,

            'fullname' => $this->request->getPost('fullname'),

            'email' => $this->request->getPost('email'),

            'phone' => $this->request->getPost('phone'),

            'gender' => $this->request->getPost('gender'),

            'province' => $this->request->getPost('province'),

            'birthdate' => $this->request->getPost('birthdate'),

            'ticket_type' => $this->request->getPost('ticket_type'),

            'ticket_price' => $this->request->getPost('ticket_price'),

            'quantity' => $quantity,

            'total_price' => $total
        ]);

        $orderId = $orderModel->getInsertID();

        $data = [

            'order_id' => $orderId,

            'fullname' => $this->request->getPost('fullname'),

            'email' => $this->request->getPost('email'),

            'phone' => $this->request->getPost('phone'),

            'quantity' => $quantity,

            'ticket_type' => $this->request->getPost('ticket_type'),

            'gender' => $this->request->getPost('gender'),

            'province' => $this->request->getPost('province'),

            'birthdate' => $this->request->getPost('birthdate'),

            'total_price' => $total,

            'ticket_price' => $ticketPrice

        ];

        // dd($data);   

        return view('payment/index', $data);
    }

    public function index($id)
    {

        $orderModel = new OrderModel();

        $order = $orderModel->find($id);

        return view('payment/index', [
            'order' => $order
        ]);
    }

    public function succes()
    {
        // dd(
        //     $this->request
        //         ->getPost('payment_method')
        // );
        return view('payment/succes');
    }
}
