<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property User $createdBy
 */
class Post extends Model
{
    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
