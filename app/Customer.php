<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
		'name',
		'email',
		'telephone',
		'contact_person',
	];

	/**
     * Get the projects for the customer.
     */
    public function projects()
    {
        return $this->hasMany('App\Project');
    }

	/**
     * Get the contacts for the customer.
     */
    public function contacts()
    {
        return $this->hasMany('App\Contact');
    }
}
