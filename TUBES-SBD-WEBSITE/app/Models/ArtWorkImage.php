<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

use Illuminate\Database\Eloquent\SoftDeletes;

class ArtWorkImage extends Model
{
    use HasFactory, SoftDeletes;

    protected $primaryKey = 'image_id';
    public $incrementing  = true;
    protected $keyType    = 'int';

    protected $fillable = [
        'art_work_id',
        'image_url',
        'is_primary',
        'display_order',
    ];

    protected $casts = [
        'is_primary' => 'boolean',
    ];

    // timestamps diaktifkan agar created_at & updated_at otomatis

    public function artWork(): BelongsTo
    {
        return $this->belongsTo(ArtWork::class, 'art_work_id');
    }

    public function getUrlAttribute(): ?string
    {
        return $this->image_url;
    }
}
