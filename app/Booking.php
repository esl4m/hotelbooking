<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Hotel;
use App\Room;
use App\Customer;

class Booking extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['room_id', 'start_date', 'end_date', 'customer_id'];

    /**
     * Relationships between models
     */
    public function hotel()
    {
    	return $this->belongsTo('App\Hotel');
    }
    public function rooms(){
        return $this->belongsTo('App\Room','room_id', 'id');
    }
    public function customers(){
        return $this->belongsTo('App\Customer','customer_id', 'id');
    }
}
