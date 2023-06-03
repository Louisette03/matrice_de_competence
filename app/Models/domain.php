<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Domain extends Model
{
    use HasFactory;

    /**
     * Get all of the modules for the domain
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function modules(): HasMany
    {
        return $this->hasMany(Module::class, 'domain_id', 'id');
    }

    /**
     * The formations that belong to the domain
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function formations(): BelongsToMany
    {
        return $this->belongsToMany(Formation::class, 'domain_formation', 'domain_id', 'formation_id')->withTimestamps();
    }
}
