<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Participant extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'gender',
        'age',
        'email',
        'address',
        'phone',
        'proficiency',
        'read_write',
        'availability', // This might be stored as JSON
        'proposed_date',
        'interest_reason',
        'experience',
        'skills',
        'additional_info',
        'recording_consent',
        'rules_agreement',
    ];

    public function payment(): HasMany
    {
        return $this->hasMany(Participant::class);
    }
}

