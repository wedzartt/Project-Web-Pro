<?php

namespace App\Models;

use CodeIgniter\Model;

class OrderModel extends Model
{
    protected $table = 'orders';

    protected $primaryKey = 'id';

    protected $allowedFields = [

        'order_code',

        'fullname',

        'email',

        'phone',

        'gender',

        'province',

        'birthdate',

        'ticket_type',

        'ticket_price',

        'quantity',

        'total_price',

        'payment_method',

        'payment_status'
    ];
}