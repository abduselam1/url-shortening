<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Url extends Model
{
    use HasFactory;

    public function getRouteKeyName()
    {
        return 'slug';
    }

    protected $fillable = [
        'destination',
        'slug',
        'views',
        'user_id',
        'expiration_date',
        'last_accessed_at'
    ];

    protected $appends = ['shortened_url'];

    public function getShortenedUrlAttribute(){

        return url($this->slug);
    }

    
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
