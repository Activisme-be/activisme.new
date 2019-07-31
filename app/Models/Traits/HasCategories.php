<?php

namespace App\Models\Traits;

use App\Models\Article;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Trait HasCategories
 *
 * @package App\Models\Traits
 */
trait HasCategories
{
    /**
     * Data relation for the category form the entity.
     *
     * @return BelongsTo
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Article::class, 'category_id');
    }
}
