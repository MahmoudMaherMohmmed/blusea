<?php

namespace App\Models;

use App\Enums\CollectionStatusEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Translatable\HasTranslations;

class Collection extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;
    use HasTranslations;
    use SoftDeletes;

    protected $fillable = [
        'slug',
        'title',
        'description',
        'status',
    ];

    public $translatable = ['title', 'description'];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'status' => CollectionStatusEnum::class,
    ];

    public const MEDIA_COLLECTION_NAME = 'collection_image';
    public const MEDIA_COLLECTION_URL = 'dashboard/images/collection.png';

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

    /**
     * @return BelongsToMany
     */
    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class)->withTimestamps();
    }

    public function scopeActive($query)
    {
        return $query->where('status', CollectionStatusEnum::ACTIVE);
    }
}
