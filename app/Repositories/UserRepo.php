<?php

namespace App\Repositories;

use App\Models\User;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
//use Your Model

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
    
}
