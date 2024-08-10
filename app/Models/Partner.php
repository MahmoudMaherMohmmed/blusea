<?php

namespace App\Models;

use App\Enums\PartnerStatusEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Translatable\HasTranslations;

class Partner extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;
    use HasTranslations;

    protected $fillable = [
        'title',
        'description',
        'url',
        'status',
    ];

    public $translatable = ['title', 'description'];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'status' => PartnerStatusEnum::class,
    ];

    public const MEDIA_COLLECTION_NAME = 'partner_image';
    public const MEDIA_COLLECTION_URL = 'dashboard/images/partner.png';

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection(self::MEDIA_COLLECTION_NAME)
            ->useFallbackUrl(asset(self::MEDIA_COLLECTION_URL))
            ->useFallbackPath(asset(self::MEDIA_COLLECTION_URL));
    }

    public function getImage()
    {
        return $this->getFirstMediaUrl(self::MEDIA_COLLECTION_NAME);
    }

    public function scopeActive($query)
    {
        return $query->where('status', PartnerStatusEnum::ACTIVE);
    }
}
