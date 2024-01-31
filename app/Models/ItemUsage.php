<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ItemUsage extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded=[
        'id'
    ];

    protected $fillable = [
        'team_id',
        'code',
        'duration',
    ];

    public function team(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Team::class, 'team_id', 'id');
    }
}
