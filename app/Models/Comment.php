<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['body', 'commented_by', 'commented_on'];

    public function commented_by(): BelongsTo
    {
        return $this->belongsTo(Community::class, 'commented_by');
    }
}
