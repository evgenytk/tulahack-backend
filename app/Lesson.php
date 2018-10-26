<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    public function teacher()
    {
    	return $this->belongsTo(User::class, 'teacher_id', 'id');
    }

    public function students()
    {
    	return $this->belongsToMany(
    		User::class,
    		'lesson_students',
    		'lesson_id',
    		'student_id'
    	);
    }

    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }
}
