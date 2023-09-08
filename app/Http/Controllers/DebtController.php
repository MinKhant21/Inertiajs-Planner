<?php

namespace App\Http\Controllers;

use App\Repositories\DebtRepo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Inertia\Inertia;

class DebtController extends Controller
{
    public $debtRepo;
    public function __construct(DebtRepo $debtRepo)
    {
        $this->debtRepo = $debtRepo;
    }
    public function index(Request $request)
    {
        if($request->isMethod('get')){
            $debtPeople = $this->debtRepo->getAll();
            dd($debtPeople);
            return Inertia::render('Debt/StoreDebt');
        }
        if($request->isMethod('post')){
            $this->debtRepo->create($request);
            // return Inertia::render('Home');
            return Inertia::render('Home')->with('message','Successfully Created');
        }
    }
}
