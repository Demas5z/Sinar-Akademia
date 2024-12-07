<?php
// app/Models/Schedule.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $fillable = [
        'semesters_id',
        'course_id',
        'sks',
        'Class',
        'day',
        'start_time',
        'end_time'
    ];

    public function semester()
    {
        return $this->belongsTo(Semester::class, 'semesters_id');
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}

// app/Models/Course.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = ['name', 'semester_id'];

    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }
}