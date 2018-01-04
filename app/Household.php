<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Household extends Model
{
    public function admin()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function chores()
    {
        return $this->hasMany('App\Chore');
    }

    public function path()
    {
        return '/households/' . $this->id;
    }

    public function addChore($chore)
    {
        $this->chores()->create($chore);
    }
}
