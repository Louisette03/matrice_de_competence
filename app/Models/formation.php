<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Formation extends Model
{
    use HasFactory;

    /**
     * The domains that belong to the formation
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function domains(): BelongsToMany
    {
        return $this->belongsToMany(Domain::class, 'domain_formation', 'formation_id', 'domain_id')->withTimestamps();
    }
}
