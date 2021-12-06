<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Role extends Model
{
    protected $guarded = ['id'];
    use HasFactory;

    public function users():BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }

    public function permissions():HasMany
    {
        return $this->hasMany(Permission::class);
    }
}
