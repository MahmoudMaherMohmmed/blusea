<?php

namespace App\Models;

use App\Traits\ReadAtTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    use ReadAtTrait;

    protected $fillable = [
        'name',
        'email',
        'subject',
        'message',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'read_at' => 'datetime',
    ];
}
