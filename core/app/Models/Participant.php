<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Participant extends Model
{
    protected $fillable = ['first_name', 'last_name', 'phone', 'email'];

    public function payment(): HasMany
    {
        return $this->hasMany(Participant::class);
    }
}
