<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Alias extends Model
{
    use HasFactory;

    protected $fillable = [
        'source'
    ];

    public $timestamps = false;

    public function addresses(): belongsToMany
    {
        return $this->belongsToMany(Address::class);
    }

    public function domain(): belongsTo
    {
        return $this->belongsTo(Domain::class);
    }
}
