<?php

namespace App\Models;

use App\Enums\ServiceStatusEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Translatable\HasTranslations;

class Service extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;
    use HasTranslations;

    protected $fillable = [
        'title',
        'description',
        'icon',
        'status',
    ];

    public $translatable = ['title', 'description'];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'status' => ServiceStatusEnum::class,
    ];

    public function scopeActive($query)
    {
        return $query->where('status', ServiceStatusEnum::ACTIVE);
    }
}
