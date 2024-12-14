<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;
use Ramsey\Collection\Collection;

/**
 * @method static Builder|Landing query()
 * @property int $id
 * @property string $name
 * @property string $label
 * @property string $short_label
 * @property int $sort
 * @property boolean $is_active
 */
class Landing extends Model
{
    protected $fillable = ['name', 'label', 'short_label', 'sort', 'is_active'];
}
