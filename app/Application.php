<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    //
    protected $fillable = [
        'user_id', 'name', 'school', 'email', 'phone_number', 'level', 'start_date',  'end_date', 'yourself', 'feedback'               
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
