<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
		'name',
		'customer_id',
	];

	/**
     * Get the customer that owns the project.
     */
    public function customer()
    {
        return $this->belongsTo('App\Customer');
    }

	/**
     * Get the times for the project.
     */
    public function times()
    {
        return $this->hasMany('App\Time');
    }
}
