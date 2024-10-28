<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    //
    protected $table = 'participants';
    protected $fillable = ['name', 'email', 'phone_number'];
    protected $primaryKey = 'participant_id';
}
