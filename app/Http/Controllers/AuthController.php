<?php

namespace App\Http\Controllers;
use App\Repositories\UserRepo;

use Illuminate\Http\Request;
use Inertia\Inertia;
class AuthController extends Controller
{
    public $UserRepo;
    public function __construct(UserRepo $UserRepo)
    {
        $this->UserRepo = $UserRepo;
    }
    public function login(Request $request){
        if($request->isMethod('get')){
            return Inertia::render('Components/Login');
        }
        if($request->isMethod('post')){
            $this->UserRepo->create($request);
            // return Inertia::render('Home');
            return Inertia::render('Home')->with('message','Successfully Created');
        }
    }

    public function register(Request $request){
        if($request->isMethod('get')){
            return Inertia::render('Components/Register');
        }
        if($request->isMethod('post')){
            $this->UserRepo->create($request);
            // return Inertia::render('Home');
            return Inertia::render('Home')->with('message','Successfully Created');
        }
    }
}
