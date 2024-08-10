<?php

namespace App\Enums;

enum PartnerStatusEnum: int
{
    case INACTIVE = 0;
    case ACTIVE = 1;

    public function type(): int
    {
        return match ($this) {
            self::INACTIVE => 0,
            self::ACTIVE => 1,
        };
    }

    public function trans(): string
    {
        return match ($this) {
            self::INACTIVE => trans('partners.status.' . self::INACTIVE->name),
            self::ACTIVE => trans('partners.status.' . self::ACTIVE->name),
        };
    }

    public function color(): string
    {
        return match ($this) {
            self::INACTIVE => 'badge-danger',
            self::ACTIVE => 'badge-success',
        };
    }

    public static function types(): array
    {
        return [
            [
                'id' => self::INACTIVE,
                'value' => trans('partners.status.' . self::INACTIVE->name)
            ],
            [
                'id' => self::ACTIVE,
                'value' => trans('partners.status.' . self::ACTIVE->name)
            ]
        ];
    }

    public static function options(): array
    {
        return [
            self::ACTIVE->value => trans('partners.status.' . self::ACTIVE->name),
            self::INACTIVE->value => trans('partners.status.' . self::INACTIVE->name),
        ];
    }
}