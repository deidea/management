<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Time extends Model
{
	/**
     * Get the user that owns the time.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

	/**
     * Get the project that owns the time.
     */
    public function project()
    {
        return $this->belongsTo('App\Project');
    }
}
