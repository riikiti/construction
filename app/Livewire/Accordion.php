<?php

namespace App\Livewire;

use Livewire\Component;

class Accordion extends Component
{
    public array $items = [
        [
            'id' => 1,
            'title' => 'Item 1',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi atque in laboriosam libero nisi perferendis rerum sunt tempora voluptas? Blanditiis hic itaque laboriosam optio porro quas quo temporibus velit vero!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi atque in laboriosam libero nisi perferendis rerum sunt tempora voluptas? Blanditiis hic itaque laboriosam optio porro quas quo temporibus velit vero!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi atque in laboriosam libero nisi perferendis rerum sunt tempora voluptas? Blanditiis hic itaque laboriosam optio porro quas quo temporibus velit vero!'
        ],
        ['id' => 2, 'title' => 'Item 2', 'content' => 'Content for item 2.'],
        ['id' => 3, 'title' => 'Item 3', 'content' => 'Content for item 3.'],
    ];

    public function render()
    {
        return view('livewire.accordion');
    }
}
