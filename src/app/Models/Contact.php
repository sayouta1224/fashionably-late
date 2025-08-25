<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'last_name',
        'first_name',
        'gender',
        'email',
        'area-code',
        'local-code',
        'subscriber-number',
        'address',
        'building',
        'content',
        'detail',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
