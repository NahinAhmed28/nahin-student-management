<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Enrollment extends Model
{
    protected $guarded = ['id'];
    use HasFactory;


    public function user()
    {

        return $this->belongsTo(User::class);
    }

     public function course()
    {
        return $this->belongsTo(Course::class);
    }

}
