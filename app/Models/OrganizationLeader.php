<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids; // Pastikan ini di-import
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrganizationLeader extends Model
{
    /** @use HasFactory<\Database\Factories\OrganizationLeaderFactory> */
    use HasFactory, HasUuids; // TAMBAHKAN HasUuids DI SINI

    protected $fillable = ['leader_name', 'organization_id'];

    public function organization(): BelongsTo
    {
        // Pastikan nama class diawali huruf besar Organization
        return $this->belongsTo(Organization::class);
    }
}