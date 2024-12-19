<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;

/**
 * @method static Builder|Counter query()
 * @property int $id
 * @property int $number
 * @property string $title
 * @property string $prefix
 * @property int $sort
 * @property boolean $is_active
 */
class Counter extends Model
{
    protected $fillable = ['number', 'title','prefix','sort','is_active'];
}
