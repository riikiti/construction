<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Query\Builder;

/**
 * @method static Builder|AccordionItem query()
 * @property int $id
 * @property string $title
 * @property string $description
 * @property Accordion|array $accordion
 */
class AccordionItem extends Model
{
    protected $fillable = ['title', 'description'];

    public function accordion(): BelongsTo
    {
        return $this->belongsTo(Accordion::class);
    }
}
