<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Module extends Model
{
    use HasFactory;

    /**
     * Get the domain that owns the module
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function domain(): BelongsTo
    {
        return $this->belongsTo(Domain::class, 'domain_id', 'id');
    }

    /**
     * The projects that belong to the module
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function projects(): BelongsToMany
    {
        return $this->belongsToMany(Project::class, 'module_project', 'module_id', 'project_id');
    }

    /**
     * The users that belong to the module
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function knowledgeLevels(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'knowledge_levels', 'module_id', 'user_id')->withPivot('level')->withTimestamps();
    }
}
