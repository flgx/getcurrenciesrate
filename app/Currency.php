<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    public function fromCurrency()
    {
        return $this->belongsTo('App\Exchange', 'from');
    }

    public function toCurrency()
    {
        return $this->belongsTo('App\Exchange', 'to');
    }
}
