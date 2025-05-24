<?php

namespace App\Models;

use App\Enums\ProductPriceStatusEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Translatable\HasTranslations;

class Setting extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;
    use HasTranslations;

    protected $fillable = [
        'title',
        'short_description',
        'description',
        'product_price_status',
        'facebook_url',
        'whatsapp_url',
        'telegram_url',
        'instagram_url',
        'twitter_url',
        'linkedin_url',
        'youtube_url',
    ];

    public $translatable = ['title', 'short_description', 'description'];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'product_price_status' => ProductPriceStatusEnum::class,
    ];

    public const MEDIA_COLLECTION_NAME = 'logo_image';
    public const MEDIA_COLLECTION_URL = 'dashboard/images/logo.png';

    public const FAVICON_COLLECTION_NAME = 'settings_favicon';
    public const FAVICON_COLLECTION_URL = 'dashboard/images/favicon.ico';

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection(self::MEDIA_COLLECTION_NAME)
            ->useFallbackUrl(asset(self::MEDIA_COLLECTION_URL))
            ->useFallbackPath(asset(self::MEDIA_COLLECTION_URL));

        $this->addMediaCollection(self::FAVICON_COLLECTION_NAME)
            ->useFallbackUrl(asset(self::FAVICON_COLLECTION_URL))
            ->useFallbackPath(asset(self::FAVICON_COLLECTION_URL));
    }

    public function getImage()
    {
        return $this->getFirstMediaUrl(self::MEDIA_COLLECTION_NAME);
    }

    public function getFavicon()
    {
        return $this->getFirstMediaUrl(self::FAVICON_COLLECTION_NAME);
    }
}
