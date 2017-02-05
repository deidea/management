<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
	/**
     * Get the customer that owns the contact.
     */
    public function customer()
    {
        return $this->belongsTo('App\Customer');
    }
}
