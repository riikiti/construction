<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;

/**
 * @method static Builder|Accordion query()
 * @property int $id
 * @property string $phone
 * @property string $tg
 * @property string $comment
 * @property string $created_at
 */
class Connect extends Model
{
    protected $table = 'connect_us';
    protected $fillable = ['phone', 'tg', 'comment'];

    protected function casts(): array
    {
        return [
            'created_at' => 'datetime',
        ];
    }
}
