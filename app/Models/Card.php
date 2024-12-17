<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;

/**
 * @method static Builder|Card query()
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $image
 * @property boolean $is_active
 * @property int $sort
 */
class Card extends Model
{
    protected $fillable = ['title', 'description', 'image', 'is_active','sort'];
}
