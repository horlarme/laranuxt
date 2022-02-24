<?php

namespace App\Models;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\Skill
 *
 * @property int $id
 * @property string $title
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|Skill newModelQuery()
 * @method static Builder|Skill newQuery()
 * @method static Builder|Skill query()
 * @method static Builder|Skill whereCreatedAt($value)
 * @method static Builder|Skill whereId($value)
 * @method static Builder|Skill whereTitle($value)
 * @method static Builder|Skill whereUpdatedAt($value)
 * @mixin Eloquent
 */
class Skill extends Model
{
    use HasFactory;

    protected $guarded = [];
}
