<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    //
    protected $table = 'registrations';
    protected $fillable = ['event_id', 'participant_id'];
    protected $primaryKey = 'registration_id';
}
