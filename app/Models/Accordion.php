<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Query\Builder;
use Ramsey\Collection\Collection;

/**
 * @method static Builder|Accordion query()
 * @property int $id
 * @property string $title
 * @property string $description
 */
class Accordion extends Model
{
    protected $fillable = ['title', 'description'];

}
