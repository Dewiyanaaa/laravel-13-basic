<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
#[Fillable(['name','department_id'])]


class Lecturer extends Model
{

// Daftarkan kolom yang ada di tabel database
    protected $fillable = ['name', 'department_id'];
    /** @use HasFactory<\Database\Factories\LecturerFactory> */
    use HasFactory;


    protected $with = ['department'];
    public function department(): BelongsTo
    {
        return $this->belongsTo(Department::class);
    }
}