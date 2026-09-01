<?php

declare(strict_types=1);

namespace Liberu\CRM\WebIntent\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Liberu\Foundation\Organizations\Models\Team;
use Illuminate\Database\Eloquent\Model;

final class WebIntentConsent extends Model
{
    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }

    protected $table = 'crm_web_intent_consents';

    protected $fillable = ['team_id', 'visitor_key', 'purpose', 'status', 'policy_version', 'granted_at', 'revoked_at'];

    protected function casts(): array
    {
        return ['granted_at' => 'datetime', 'revoked_at' => 'datetime'];
    }
}
