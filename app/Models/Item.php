<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [
        'id'
    ];

    protected $fillable = [
        'name',
        'code',
        'description',
        'duration',
        'price',
        'image_path',
    ];

    public function team(): BelongsToMany
    {
        return $this->belongsToMany(Team::class, 'team_items', 'item_id', 'team_id');
    }
}
