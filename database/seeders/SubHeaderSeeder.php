<?php

namespace Database\Seeders;

use App\Models\SubHeader;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubHeaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SubHeader::create([
            'title' => 'Наша компания',
            'description' => 'Наша компания',
            'image' => null,
            'is_active' => true
        ]);
    }
}
