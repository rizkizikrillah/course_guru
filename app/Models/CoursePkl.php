<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoursePkl extends Model
{
    use HasFactory;

    protected $table = 'CoursePkls'; // pastikan sesuai nama tabel

    protected $fillable = [
        'parent_id',
        'section',
        'slug',
        'title',
        'content',
        'link',
        'videoLink',
        'order',
        'is_quiz',
        'quiz_question',
        'quiz_options',
        'quiz_answer',
    ];

    protected $casts = [
        'quiz_options' => 'array',
    ];

    public function parent()
    {
        return $this->belongsTo(CoursePkl::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(CoursePkl::class, 'parent_id')->orderBy('order');
    }
}
