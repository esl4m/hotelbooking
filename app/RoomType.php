<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Room;

class RoomType extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];

    /**
     * Relationships between models
     */
    public function room()
    {
        return $this->belongsToMany('App\Room');
    }
}
