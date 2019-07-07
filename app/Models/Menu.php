<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = ['name','day'];

    public function getMenuAddRules(){
        return[
            'name' => 'required|string',
            'day' =>'required|string'
        ];
    }
}
