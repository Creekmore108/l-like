<?php

namespace Creekmore108\LBlock\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Block extends Model
{
    use HasFactory;

    protected $table = 'blocks';

    protected $fillable = [
        'user_id',
        'blocking_id',
    ];

    public function blocking(): BelongsTo
    {
        return $this->belongsTo(config('auth.providers.users.model'), 'blocking_id');
    }

    public function blockers(): BelongsTo
    {
        return $this->belongsTo(config('auth.providers.users.model'), 'user_id');
    }
}
