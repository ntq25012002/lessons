<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Teacher extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'teachers';

    public function getTeachers($filter = []) {
        $query = DB::table('teachers')
                ->leftJoin('courses', 'teachers.id', '=', 'courses.teacher_id');
        
        if(!empty($filter)) {
            $query = $query->where($filter);
        }
        $data = $query->select('teachers.*', DB::raw('count(courses.id) as course_count'))
                ->groupBy('teachers.id')
                ->get();
        return $data;
    }

    public function saveTeacher($request) {

    }
}
