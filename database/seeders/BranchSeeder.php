<?php

namespace Database\Seeders;

use App\Models\Branch;
use Illuminate\Database\Seeder;

class BranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Branch::create([
            'title' => ['ar' => 'الفرع الرئيسي', 'en' => 'Main Branch'],
            'address' => ['ar' => 'القاهرة', 'en' => 'Cairo'],
            'google_map' => 'https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d27631.243541643285!2d31.000411713989262!3d30.0395705043349!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sar!2seg!4v1708180460485!5m2!1sar!2seg',
            'phone_number_1' => '01202600632',
            'phone_number_2' => '01020787614',
            'telephone_number' => '0573611964',
            'email_1' => 'info@bluseaworld.com',
            'email_2' => 'sales@bluseaworld.com',
        ]);
    }
}
