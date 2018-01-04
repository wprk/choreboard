<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chore extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description'
    ];

    public function household()
    {
        return $this->belongsTo('App\Household', 'household_id');
    }

    public function path()
    {
        return $this->household->path() . '/chores/' . $this->id;
    }
}
