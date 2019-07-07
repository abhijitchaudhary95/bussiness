<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $fillable = ['e.name','batch','order'];

    public function getMenuAddRules(){
        return[
            'name' => 'required|string',
            'day' =>'required|string'
        ];
    }
}
