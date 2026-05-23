<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Transaction extends BaseController
{
    public function index()
    {
        return view('admin/transaction/index');
    }
}