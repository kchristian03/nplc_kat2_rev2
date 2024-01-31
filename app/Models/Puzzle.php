<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Puzzle extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [
        'id'
    ];

    protected $fillable = [
        'pos_code',
        'score_won',
        'score_lost',
        'score_mid',
        'code_won',
        'code_lost',
        'code_mid',
        'entry_coin',
        'entry_exp',
        'forfitable',
        'max_team',
        'time',
        'room',
        'pos_name',
        'pic_committee',
    ];
}
