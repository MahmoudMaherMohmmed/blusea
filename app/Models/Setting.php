<?php

namespace App\Models;

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
        'facebook_url',
        'whatsapp_url',
        'telegram_url',
        'instagram_url',
        'twitter_url',
        'linkedin_url',
        'youtube_url',
    ];

    public $translatable = ['title', 'short_description', 'description'];


    public const MEDIA_COLLECTION_NAME = 'settings_image';
    public const MEDIA_COLLECTION_URL = 'dashboard/images/settings.png';

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
}
