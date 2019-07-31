<?php

namespace App\Models\Traits;

use Spatie\Sluggable\SlugOptions;

/**
 * Trait HasSluggable
 *
 * Helper function for adding slug support to database elouent entities.
 *
 * @package App\Models\Traits
 */
trait HasSluggable
{
    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    /**
     * Get the options for generating the slug.
     *
     * @return SlugOptions
     */
    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom(['naam', 'titel'])
            ->saveSlugsTo('slug')
            ->doNotGenerateSlugsOnUpdate()
            ->slugsShouldBeNoLongerThan(50);
    }
}
