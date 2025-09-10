<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course2Progress extends Model
{
    use HasFactory;

    protected $table = 'course2_progress';

    protected $fillable = [
        'course2_id', 'user_id', 'completed'
    ];

    public function course()
    {
        return $this->belongsTo(Course2::class, 'course2_id');
    }
}
