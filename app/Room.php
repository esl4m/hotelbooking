<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Hotel;
use App\Booking;
use App\RoomType;
use App\RoomCapacity;

class Room extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['room_name'];

    /**
     * Relationships between models
     */
    public function hotel()
    {
    	return $this->belongsTo('App\Hotel');
    }
    public function booking()
    {
        return $this->hasmany('App\Booking');
    }
    public function type()
    {
        return $this->hasOne('App\RoomType');
    }
}
