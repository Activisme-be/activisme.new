<?php

namespace App\Models;

use App\Models\Traits\HasCreators;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class Category
 *
 * @method whereSection(string $string) - Magic method explained translated to ->where('section', string $string)
 *
 * @package App\Models
 */
class Category extends Model
{
    use HasCreators;

    /**
     * Guarded fields for the internal mass-assignment system.
     *
     * @var array
     */
    protected $guarded = ['id', 'section'];

    /**
     * Data relation for the attached news articles.
     *
     * @return HasMany
     */
    public function articles(): HasMany
    {
        return $this->hasMany(Article::class);
    }
}
