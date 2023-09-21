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
    public function show(){
        $debtPeople = $this->debtRepo->getAll();
        return Inertia::render('Debt/StoreDebt');
    }
    public function index(Request $request)
    {
        if($request->isMethod('get')){
            $debtPeople = $this->debtRepo->getAll();
            return Inertia::render('Debt/Debt',['debtPeople' => $debtPeople]);
        }
        if($request->isMethod('post')){
            $this->debtRepo->create($request);
            // return Inertia::render('Home');
            return Inertia::render('Home')->with('message','Successfully Created');
        }
    }
    public function store(Request $request){
        if($request->isMethod('get')){
            return Inertia::render('Debt/CreateDebt');
        }
        if($request->isMethod('post')){
            $this->debtRepo->create($request);
            // return Inertia::render('Home');
            return Inertia::render('Home')->with('message','Successfully Created');
        }
    }
}
