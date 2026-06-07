<?php

namespace App\Controllers;

class Tickets extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Ticket'
        ];

        return view(
            'ticket/information_ticket',
            $data
        );
    }

    public function checkout($ticketId)
    {
        if ($ticketId == 1)
        {
            $ticket = [

                'ticket_type' => 'DAY 1',

                'price' => 350000

            ];
        }
        elseif ($ticketId == 2)
        {
            $ticket = [

                'ticket_type' => 'DAY 2',

                'price' => 350000

            ];
        }
        else
        {
            $ticket = [

                'ticket_type' => '2 DAY PASS',

                'price' => 600000

            ];
        }

        return view(
            'ticket/checkout_form',
            [
                'ticket' => $ticket
            ]
        );
    }
}