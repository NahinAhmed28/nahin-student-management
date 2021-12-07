<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Permission extends Model
{
    protected $guarded = ['id'];
    use HasFactory;

    public function roles():HasMany
    {
        return $this->hasMany(Role::class);
    }
}
