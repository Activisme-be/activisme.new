<?php

namespace App\Models;

use App\Models\Traits\HasCategories;
use App\Models\Traits\HasCreators;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Article
 *
 * @package App\Models
 */
class Article extends Model
{
    use HasCreators, HasCategories;

    /**
     * The protected fields for the internal mass-assignment system.
     *
     * @var array
     */
    protected $guarded = ['id', 'creator_id', 'category_id'];
}
