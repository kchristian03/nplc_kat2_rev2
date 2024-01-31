<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pos extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [
        'id'
    ];

    protected $fillable = [
        'coin_won',
        'coin_lost',
        'exp_won',
        'exp_lost',
        'score_won',
        'score_lost',
        'item_won',
        'item_rate',
        'room',
        'pos_name',
    ];

    public function team()
    {
        return $this->belongsToMany(Team::class, 'results', 'pos_id', 'team_id');
    }
}
