<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Courses;
class CourseController extends Controller
{
    protected $v;
    protected $courses;
    public function __construct(Courses $courses)
    {
        $this->courses = $courses;
        $this->v = [];
    }

    // public function index() {
    //     $title = 'Danh sách khóa học';
    //     $data = $this->courses->getCourses();
    //     dd($data);
    //     $this->v['title'] = $title;
    //     $this->v['listCourse'] = $data;
    //     return view('client.course.index', $this->v);
    // }

    public function detail($slug) {
        $title = $slug;
        $this->v['title'] = $title;
        return view('client.course.course-detail', $this->v);
    }

    public function listCourses() {
        $title = 'Danh sách khóa học';
        $data = $this->courses->getCourses();
        // dd($data);
        $this->v['title'] = $title;
        $this->v['listCourse'] = $data;
        return view('admin.course.list-course', $this->v);
    }

  
}
