<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasUuids;

    protected $fillable = ['customer_name', 'phone', 'email', 'service_id', 'status', 'scheduled_at',];

    protected $dates = ['scheduled_at'];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
