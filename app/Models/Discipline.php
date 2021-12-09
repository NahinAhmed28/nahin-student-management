<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Discipline extends Model
{
    protected $guarded = ['id'];

    use HasFactory;

    public function courses():BelongsToMany
    {
        return $this->belongsToMany(Course::class)->withPivot('course_id ','discipline_id ')->withTimestamps();
    }
}
