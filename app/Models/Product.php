<?php

namespace App\Models;

use App\Enums\ProductSpecialEnum;
use App\Enums\ProductStatusEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Translatable\HasTranslations;

class Product extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;
    use HasTranslations;
    use SoftDeletes;

    protected $fillable = [
        'slug',
        'title',
        'short_description',
        'description',
        'price',
        'price_after_discount',
        'special',
        'best_seller',
        'status',
    ];

    public $translatable = ['title', 'short_description', 'description'];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'special' => ProductSpecialEnum::class,
        'best_seller' => ProductSpecialEnum::class,
        'status' => ProductStatusEnum::class,
    ];

    public const MAIN_MEDIA_COLLECTION_NAME = 'product_main_image';
    public const MAIN_MEDIA_COLLECTION_URL = 'dashboard/images/product.png';

    public const MEDIA_COLLECTION_NAME = 'product_image';
    public const MEDIA_COLLECTION_URL = 'dashboard/images/product.png';

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection(self::MAIN_MEDIA_COLLECTION_NAME)
            ->useFallbackUrl(asset(self::MAIN_MEDIA_COLLECTION_URL))
            ->useFallbackPath(asset(self::MAIN_MEDIA_COLLECTION_URL));

        $this->addMediaCollection(self::MEDIA_COLLECTION_NAME)
            ->useFallbackUrl(asset(self::MEDIA_COLLECTION_URL))
            ->useFallbackPath(asset(self::MEDIA_COLLECTION_URL));
    }

    public function getMainImage()
    {
        return $this->getFirstMediaUrl(self::MAIN_MEDIA_COLLECTION_NAME);
    }

    public function getImages()
    {
        return $this->getMedia(self::MEDIA_COLLECTION_NAME);
    }

    /**
     * @return BelongsToMany
     */
    public function brands(): BelongsToMany
    {
        return $this->belongsToMany(Brand::class)->withTimestamps();
    }

    /**
     * @return BelongsToMany
     */
    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class)->withTimestamps();
    }

    /**
     * @return MorphMany
     */
    public function tags(): MorphMany
    {
        return $this->morphMany(Tag::class, 'taggable');
    }

    public function scopeSpecial($query)
    {
        return $query->where('special', ProductSpecialEnum::YES);
    }

    public function scopeBestSeller($query)
    {
        return $query->where('best_seller', ProductSpecialEnum::YES);
    }

    public function scopeActive($query)
    {
        return $query->where('status', ProductStatusEnum::ACTIVE);
    }
}
