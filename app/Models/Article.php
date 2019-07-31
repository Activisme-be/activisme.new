<?php

namespace App\Models;

use App\Models\Traits\HasCategories;
use App\Models\Traits\HasCreators;
use Illuminate\Database\Eloquent\Model;
use CyrildeWit\EloquentViewable\Viewable;
use CyrildeWit\EloquentViewable\Contracts\Viewable as ViewableContract;

/**
 * Class Article
 *
 * @package App\Models
 */
class Article extends Model implements ViewableContract
{
    use HasCreators, HasCategories, Viewable;

    /**
     * The protected fields for the internal mass-assignment system.
     *
     * @var array
     */
    protected $guarded = ['id', 'creator_id'];

    /**
     * Array of fields that needs to be mutated to Date attributes.
     *
     * @var array
     */
    protected $dates = ['publicatie_datum'];

    /**
     * Function for getting the unique page views from an article.
     *
     * @return int
     */
    public function getUniqueviews(): int
    {
        return views($this)->unique()->count();
    }
}
