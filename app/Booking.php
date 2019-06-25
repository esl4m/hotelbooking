<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
    	return $this->belongsTo(Hotel::class, 'hotel_id');
    }
    public function rooms(){
        return $this->belongsTo(Room::class, 'room_id');
    }
    public function customers(){
        return $this->belongsTo(Customer::class, 'customer_id');
    }
}
