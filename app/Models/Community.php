<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Community extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'managed_by'
    ];

    // relations: community managed by a user
    public function manager(): BelongsTo
    {
        return $this->belongsTo(User::class, 'managed_by');
    }

    // relations: a community can connect to many communities
    public function communities(): BelongsToMany
    {
        return $this->belongsToMany(Community::class, 'affiliates', 'requestor', 'target');
    }
}
