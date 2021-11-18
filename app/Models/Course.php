<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $primaryKey = 'course_code';
    protected $keyType = 'string';

    protected $fillable = [
        'course_code',
        'course_name',
        'lecturer',
        'number_sks',
        'description'
    ];

    public function projects()
    {
        return $this->hasMany(Project::class, 'mata_kuliah', 'course_code');
    }
}
