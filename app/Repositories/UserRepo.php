<?php

namespace App\Repositories;
use Inertia\Inertia;
use App\Models\User;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
//use Your Model
use Illuminate\Support\Facades\Auth;
/**
 * Class DebtRepo.
 */
class UserRepo 
{
    /**
     * @return string
     *  Return the model
     */
    public function getAll()
    {
       return User::orderBy('created_at','desc')->get();
    }
    public function create($request){
        return User::create($request->all());
    }
    public function check($request){
       if(!Auth::attempt(['email' => $request->email,'password'=>$request->password])){
        return Inertia::render('Components.Login',['message' => 'wrong Email and password']);
       }
       $user = User::where('email',$request->email)->first();
       auth()->login($user);
       return Inertia::render('Home',['message' => 'Welcome']);
    }
    
}
