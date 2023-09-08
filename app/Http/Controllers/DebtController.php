<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class DebtController extends Controller
{
    public function  showDebt()
    {
        return Inertia::render('Debt/StoreDebt');
    }
}
