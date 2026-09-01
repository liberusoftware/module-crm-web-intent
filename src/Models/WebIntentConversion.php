<?php

declare(strict_types=1);

namespace Liberu\CRM\WebIntent\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Liberu\Foundation\Organizations\Models\Team;
use Illuminate\Database\Eloquent\Model;

final class WebIntentConversion extends Model
{
    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }

    protected $table = 'crm_web_intent_conversions';

    protected $fillable = ['team_id', 'visitor_key', 'visit_id', 'target_type', 'target_id', 'actor_id', 'status', 'metadata'];

    protected function casts(): array
    {
        return ['metadata' => 'array'];
    }
}
