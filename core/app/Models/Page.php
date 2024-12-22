<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    protected $fillable = ['page_name', 'section_name', 'title', 'subtitle', 'content'];

    protected $casts = [
        'content' => 'array', // Automatically handle JSON encoding/decoding
    ];
}
