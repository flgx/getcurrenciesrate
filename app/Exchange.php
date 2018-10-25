<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exchange extends Model
{
    public function fromCurrencies()
    {
        return $this->hasMany('App\Currency', 'from');
    }

    public function toCurrencies()
    {
        return $this->hasMany('App\Currency', 'to');
    }
}
