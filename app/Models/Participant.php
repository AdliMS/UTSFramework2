<?php

namespace App\Models;

use App\Models\Registration;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Participant extends Model
{
    //
    protected $table = 'participants';
    protected $fillable = ['name', 'email', 'phone_number'];
    protected $primaryKey = 'participant_id';

    public function registrations(): HasMany
    {
        return $this->hasMany(Registration::class, 'participant_id');
    }
}
