<?php

namespace Database\Seeders;

use App\Enums\LandingEnum;
use App\Models\Logo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Logo::create([
            'text_logo' => config('app.name'),
            'image_logo' => null,
        ]);
    }
}
