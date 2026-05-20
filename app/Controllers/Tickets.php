<?php

namespace App\Controllers;

class Tickets extends BaseController
{
    
    public function ticket()
    {
        $data = [
            'title' => 'Ticket'
        ];

        return view('ticket/index', $data);
    }
}