<?php

namespace App\Models;

 
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'contact';
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var string[]
     */
    protected $hidden = [
        'mobile_number',
    ];
    
}
