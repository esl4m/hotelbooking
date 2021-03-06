<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomType extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['type_name'];

    /**
     * Relationships between models
     */
    public function room()
    {
        return $this->belongsToMany('App\Room');
    }
}
