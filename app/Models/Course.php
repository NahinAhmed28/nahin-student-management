<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Course extends Model
{
    protected $guarded = ['id'];
    use HasFactory;

    public function institution(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Institution::class);
    }
    public function disciplines():BelongsToMany
    {
        return $this->belongsToMany(Discipline::class)->withPivot('course_id ','discipline_id ')->withTimestamps();
    }
 public function enrollments()
 {
        return $this->hasMany(Enrollment::class);
    }


}
