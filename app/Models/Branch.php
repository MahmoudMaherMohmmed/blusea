<?php

namespace App\Models;

use App\Enums\BranchStatusEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Branch extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $fillable = [
        'title',
        'address',
        'google_map',
        'phone_number_1',
        'phone_number_2',
        'telephone_number',
        'email_1',
        'email_2',
        'status',
    ];

    public $translatable = ['title', 'address'];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'status' => BranchStatusEnum::class,
    ];

    public function scopeActive($query)
    {
        return $query->where('status', BranchStatusEnum::ACTIVE);
    }
}
