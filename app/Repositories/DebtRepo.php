<?php

namespace App\Repositories;

use App\Models\DebtPeople;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
//use Your Model

/**
 * Class DebtRepo.
 */
class DebtRepo 
{
    /**
     * @return string
     *  Return the model
     */
    public function getAll()
    {
       return DebtPeople::orderBy('created_at','desc')->get();
    }
    public function create($request){
        return DebtPeople::create($request->all());
    }
    
}
