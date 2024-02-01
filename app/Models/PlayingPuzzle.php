<?php

namespace App\Models;

use App\Models\Team;
use App\Models\Puzzle;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PlayingPuzzle extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [
        'id'
    ];

    protected $fillable = [
        'team_id',
        'puzzle_id',
        'duration',
    ];

    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class, 'team_id', 'id');
    }

    public function puzzle(): BelongsTo
    {
        return $this->belongsTo(Puzzle::class, 'puzzle_id', 'id');
    }
}
