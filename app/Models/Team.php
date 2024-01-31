<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Team extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [
        'id'
    ];

    protected $fillable = [
        'name',
        'user_id',
        'score',
        'exp',
        'coin',
        'school',
        'progress',
        'progress_story',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function item(): BelongsToMany
    {
        return $this->belongsToMany(Item::class, 'team_items', 'team_id', 'item_id');
    }

    public function story(): BelongsToMany
    {
        return $this->belongsToMany(Story::class, 'team_stories', 'team_id', 'story_id');
    }

    public function result(): BelongsToMany
    {
        return $this->belongsToMany(Pos::class, 'results', 'team_id', 'pos_id');
    }

    public function itemusage(): HasMany
    {
        return $this->hasMany(ItemUsage::class);
    }
}
