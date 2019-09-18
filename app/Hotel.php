<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Room;
use App\Booking;

class Hotel extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'address', 'city', 'state', 'country', 'zipcode', 'phonenumber', 'email', 'image'];

    /**
     * Relationships between models
     */
    public function rooms()
    {
      return $this->hasMany('App\Room');
    }
    public function booking()
    {
        return $this->hasmany('App\Booking');
    }
}
