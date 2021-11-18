<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['code', 'project', 'semester', 'mata_kuliah', 'description'];

    public function course(){
        return $this->belongsTo(Course::class, 'mata_kuliah', 'course_code');
    }
}
