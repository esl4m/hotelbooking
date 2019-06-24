<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Booking;

class Customer extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['first_name', 'last_name', 'address', 'city', 'country', 'phone', 'fax', 'email'];

    /**
     * Relationships between models
     */
    public function bookings()
    {
      return $this->hasMany('App\Booking');
    }

}
