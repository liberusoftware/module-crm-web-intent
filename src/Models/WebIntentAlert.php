<?php

declare(strict_types=1);

namespace Liberu\CRM\WebIntent\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Liberu\Foundation\Organizations\Models\Team;
use Illuminate\Database\Eloquent\Model;

/** @property int $team_id */
final class WebIntentAlert extends Model
{
    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }

    protected $table = 'crm_web_intent_alerts';

    protected $fillable = ['team_id', 'visitor_key', 'visit_id', 'severity', 'title', 'details', 'status', 'triggered_at', 'resolved_at', 'resolved_by'];

    protected function casts(): array
    {
        return ['triggered_at' => 'datetime', 'resolved_at' => 'datetime'];
    }
}
