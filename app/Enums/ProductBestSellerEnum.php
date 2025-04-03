<?php

namespace App\Enums;

enum ProductBestSellerEnum: int
{
    case NO = 0;
    case YES = 1;

    public function type(): int
    {
        return match ($this) {
            self::NO => 0,
            self::YES => 1,
        };
    }

    public function trans(): string
    {
        return match ($this) {
            self::NO => trans('products.best_seller.' . self::NO->name),
            self::YES => trans('products.best_seller.' . self::YES->name),
        };
    }

    public function color(): string
    {
        return match ($this) {
            self::NO => 'badge-danger',
            self::YES => 'badge-success',
        };
    }

    public static function types(): array
    {
        return [
            [
                'id' => self::NO,
                'value' => trans('products.best_seller.' . self::NO->name)
            ],
            [
                'id' => self::YES,
                'value' => trans('products.best_seller.' . self::YES->name)
            ]
        ];
    }

    public static function options(): array
    {
        return [
            self::NO->value => trans('products.best_seller.' . self::NO->name),
            self::YES->value => trans('products.best_seller.' . self::YES->name),
        ];
    }
}
