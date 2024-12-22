<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Payment extends Model
{
    protected $fillable = ['participant_id', 'amount', 'reference', 'status'];

    public function participant(): BelongsTo
    {
        return $this->belongsTo(Participant::class);
    }

    public function gameEntry()
    {
        return $this->hasOne(GameEntry::class);
    }
}

