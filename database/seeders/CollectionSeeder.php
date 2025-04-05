<?php

namespace Database\Seeders;

use App\Models\Collection;
use Illuminate\Database\Seeder;

class CollectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $collections = [
            [
                'slug' => 'bathroom-sink-faucets',
                'title' => ['ar' => 'صنابير حوض الحمام', 'en' => 'Bathroom Sink Faucets'],
            ],
            [
                'slug' => 'modern-faucets',
                'title' => ['ar' => 'صنابير حديثة', 'en' => 'Modern Faucets'],
            ],
            [
                'slug' => 'kitchen-faucets',
                'title' => ['ar' => 'صنابير المطبخ', 'en' => 'Kitchen Faucets'],
            ],
            [
                'slug' => 'designer-faucets',
                'title' => ['ar' => 'صنابير مصممة4', 'en' => 'Designer Faucets'],
            ],
            [
                'slug' => 'new-brand',
                'title' => ['ar' => 'علامة تجارية جديدة', 'en' => 'New Brand'],
            ],
            [
                'slug' => 'latest-collection',
                'title' => ['ar' => 'أحدث مجموعة', 'en' => 'Latest Collection'],
                'description' => ['ar' => 'وفر حتى 60%', 'en' => 'SAVE UP TO 60% OFF'],
            ],
            [
                'slug' => 'latest-collection-2',
                'title' => ['ar' => 'أحدث مجموعة', 'en' => 'Latest Collection'],
                'description' => ['ar' => 'وفر حتى 60%', 'en' => 'SAVE UP TO 60% OFF'],
            ],
            [
                'slug' => 'banner-collection',
                'title' => ['ar' => 'مجموعة اللافتات', 'en' => 'Banner Collection'],
            ],
        ];

        foreach ($collections as $collection) {
            Collection::create($collection);
        }
    }
}
