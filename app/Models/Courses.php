<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Courses extends Model
{
    use HasFactory;

    // public $fillable = ['name','slug','parent_id'];
    protected $guarded = [];
    protected $table = 'courses';

    public function getCourses($filter = []) {
        $query = DB::table($this->table)
                ->leftJoin('lessons', 'courses.id', '=', 'lessons.course_id')
                ->join('teachers', 'courses.teacher_id', '=', 'teachers.id')
                ->where('courses.deleted_at','=', null);

        if(!empty($filter)) {
            $query =  $query->where($filter);
        }

        $data = $query->select('courses.*', 'teachers.name as teacher_name', DB::raw('count(lessons.id) as lesson_count'))
                ->groupBy('courses.id')
                ->get();
        return $data;
    }

    public function saveCourses($request) {

    }

}
