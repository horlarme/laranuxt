<?php

namespace App\Models;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\Experience
 *
 * @property int $id
 * @property string $company
 * @property string $position
 * @property Carbon $started_at
 * @property Carbon|null $stopped_at
 * @property string $description
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|Experience newModelQuery()
 * @method static Builder|Experience newQuery()
 * @method static Builder|Experience query()
 * @method static Builder|Experience whereCompany($value)
 * @method static Builder|Experience whereCreatedAt($value)
 * @method static Builder|Experience whereDescription($value)
 * @method static Builder|Experience whereId($value)
 * @method static Builder|Experience wherePosition($value)
 * @method static Builder|Experience whereStartedAt($value)
 * @method static Builder|Experience whereStoppedAt($value)
 * @method static Builder|Experience whereUpdatedAt($value)
 * @mixin Eloquent
 */
class Experience extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'stopped_at' => 'date',
        'started_at' => 'date'
    ];
}
