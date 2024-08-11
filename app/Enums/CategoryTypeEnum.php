<?php

namespace App\Enums;

enum CategoryTypeEnum: int
{
    case SUB_CATEGORY = 0;
    case MAIN_CATEGORY = 1;

    public function type(): int
    {
        return match ($this) {
            self::SUB_CATEGORY => 0,
            self::MAIN_CATEGORY => 1,
        };
    }

    public function trans(): string
    {
        return match ($this) {
            self::SUB_CATEGORY => trans('categories.type.' . self::SUB_CATEGORY->name),
            self::MAIN_CATEGORY => trans('categories.type.' . self::MAIN_CATEGORY->name),
        };
    }

    public function color(): string
    {
        return match ($this) {
            self::SUB_CATEGORY => 'badge-secondary',
            self::MAIN_CATEGORY => 'badge-primary',
        };
    }

    public static function types(): array
    {
        return [
            [
                'id' => self::SUB_CATEGORY,
                'value' => trans('categories.type.' . self::SUB_CATEGORY->name)
            ],
            [
                'id' => self::MAIN_CATEGORY,
                'value' => trans('categories.type.' . self::MAIN_CATEGORY->name)
            ]
        ];
    }

    public static function options(): array
    {
        return [
            self::MAIN_CATEGORY->value => trans('categories.type.' . self::MAIN_CATEGORY->name),
            self::SUB_CATEGORY->value => trans('categories.type.' . self::SUB_CATEGORY->name),
        ];
    }
}
