<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;

/**
 * @method static Builder|Slider query()
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $image
 * @property int $sort
 * @property boolean $is_active
 */
class Slider extends Model
{
    protected $fillable = ['title', 'description','image','sort','is_active'];
}
