<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\Province;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    protected $teachers;
    protected $province;
    protected $district;
    protected $v;

    public function __construct(Teacher $teachers, Province $province, District $district) {
        $this->v = [];
        $this->teachers = $teachers;
        $this->province = $province;
        $this->district = $district;
    }

    public function listTeacher() {
        $title = 'Danh sách giảng viên';
        $data = $this->teachers->getTeachers();

        $this->v['title'] = $title;
        $this->v['listTeacher'] = $data;

        return view('admin.teacher.list-teacher',$this->v);
    }

    public function filterTeacher() {

    }

    public function addTeacher(Request $request) {
        $title = 'Thêm giảng viên';
        $provinces = $this->province->getProvinces();

        $this->v['title'] = $title;
        $this->v['provinces'] = $provinces;

        return view('admin.teacher.add-teacher', $this->v);
    }

    public function saveNew(Request $request) {

    }

    public function editTeacher(Request $request,$slug) {

    }

    public function saveEdit(Request $request, $slug) {
        
    }

    public function deleteTeacher(Request $request, $slug) {

    }

}
