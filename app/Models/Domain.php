<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Domain extends Model
{
    use HasFactory;

    public $fillable = [
        'name'
    ];

    public $timestamps = false;

    public function addresses(): hasMany
    {
        return $this->hasMany(Address::class);
    }

    public function aliases(): hasMany
    {
        return $this->hasMany(Alias::class);
    }
}
