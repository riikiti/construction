<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;

/**
 * @method static Builder|Logo query()
 * @property int $id
 * @property string $text_logo
 * @property string $image_logo
 */
class Logo extends Model
{
    protected $fillable =['text_logo','image_logo'];
}
