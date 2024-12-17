<?php

namespace Database\Seeders;

use App\Enums\LandingEnum;
use App\Models\Landing;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LandeingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Landing::create([
            'name' => LandingEnum::Accordion->name,
            'label' => 'Часто задаваемые вопросы',
            'short_label' => 'Вопросы',
            'sort' => 1,
            'is_active' => true
        ]);
        Landing::create([
            'name' => LandingEnum::Slider->name,
            'label' => 'Наши Работы',
            'short_label' => 'Работы',
            'sort' => 3,
            'is_active' => true
        ]);
        Landing::create([
            'name' => LandingEnum::Card->name,
            'label' => 'Наши примущества',
            'short_label' => 'Преимущества',
            'sort' => 2,
            'is_active' => true
        ]);
    }
}
