<?php

namespace App\Models\Traits;

use App\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Trait HasCreators
 *
 * @package App\Models\Traits
 */
trait HasCreators
{
    /**
     * Data relation for the creator of the database entity.
     *
     * @return BelongsTo
     */
    public function creator(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Method for attaching the given user as databae entity creator.
     *
     * @param  User $user The database entity from the given user.
     * @return mixed
     */
    public function setCreator(User $user)
    {
        $this->creator()->associate($user)->save();
        return $this;
    }
}
