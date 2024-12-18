<?php

namespace Database\Seeders;

use App\Enums\LandingEnum;
use App\Models\Landing;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LandingSeeder extends Seeder
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
            'sort' => 5,
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
            'sort' => 4,
            'is_active' => true
        ]);
        Landing::create([
            'name' => LandingEnum::Connect->name,
            'label' => 'Связаться с нами',
            'short_label' => 'Связь',
            'sort' => 6,
            'is_active' => true
        ]);
        Landing::create([
            'name' => LandingEnum::SubHeader->name,
            'label' => 'Слоган',
            'short_label' => 'Слоган',
            'sort' => 1,
            'is_active' => true
        ]);
        Landing::create([
            'name' => LandingEnum::HorizontalCards->name,
            'label' => 'О нас',
            'short_label' => 'О нас',
            'sort' => 2,
            'is_active' => true
        ]);
        Landing::create([
            'name' => LandingEnum::Counter->name,
            'label' => 'Цифры',
            'short_label' => 'Цифры',
            'sort' => 2,
            'is_active' => true
        ]);
    }
}
