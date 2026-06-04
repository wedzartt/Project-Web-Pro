<?php

namespace App\Controllers;

use App\Models\OrderModel;

class Payment extends BaseController
{
    public function processPayment()
    {
        $orderModel = new OrderModel();

        $orderId = $this->request->getPost('order_id');

        $paymentMethod =
            $this->request->getPost('payment_method');

        $orderModel->update($orderId, [

            'payment_method' => $paymentMethod,

            'payment_status' => 'paid'

        ]);

        return redirect()->to(
            '/payment/succes/' . $orderId
        );
    }

    public function succes($id)
    {
        $orderModel = new OrderModel();

        $order = $orderModel->find($id);

        return view('payment/succes', [
            'order' => $order
        ]);
    }
}