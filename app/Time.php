<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;

class Time extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'project_id',
		'user_id',
		'start',
		'end',
    ];





	    /**
	     * The attributes that should be mutated to dates.
	     *
	     * @var array
	     */
	    protected $dates = [
			'start',
			'end',
	        'created_at',
	        'updated_at',
	    ];



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

	public static function boot()
	{
	    parent::boot();

		static::creating(function($time) {
			if (!$time->user_id) {
				$time->user_id = Auth::user()->id;
			}
	    });

	    static::updating(function($page) {
            // do stuff
        });
    }


}
