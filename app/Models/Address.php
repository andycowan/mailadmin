<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'password'
    ];

    public $timestamps = false;

    public function aliases(): belongsToMany
    {
        return $this->belongsToMany(Alias::class);
    }

    public function domain(): belongsTo
    {
        return $this->belongsTo(Domain::class);
    }
}
