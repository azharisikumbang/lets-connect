<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Activity extends Model
{
    use HasFactory;

    protected $fillable = ['body', 'owner'];

    public function images(): HasMany
    {
        return $this->hasMany(ActivityImages::class);
    }

    public function owner(): BelongsTo
    {
        return $this->belongsTo(Community::class, 'owner');
    }

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class, 'commented_on');
    }
}
