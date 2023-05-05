<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Cơ sở dữ liệu',
                'image_url' => 'hình ảnh',
                'teacher_id' => 1,
                'price' => 1690000,
                'view' => 10000,
                'description' => 'Mô tả cho khóa học cơ sở dữ liệu',
                'rating' => 4.5,
            ],
            [
                'name' => 'HTML5 & CSS3',
                'image_url' => 'hình ảnh',
                'teacher_id' => 4,
                'price' => 1490000,
                'view' => 19500,
                'description' => 'Mô tả cho khóa học HTML',
                'rating' => 4,
            ],
            [
                'name' => 'React',
                'teacher_id' => 3,
                'image_url' => 'hình ảnh react',
                'price' => 1990000,
                'view' => 8025,
                'description' => 'Mô tả cho khóa học react',
                'rating' => 4.8,
            ],
            [
                'name' => 'Javascript',
                'teacher_id' => 2,
                'image_url' => 'hình ảnh',
                'price' => 1590000,
                'view' => 13600,
                'description' => 'Mô tả cho khóa học JS',
                'rating' => 4.1,
            ],
            [
                'name' => 'PHP',
                'teacher_id' => 1,
                'image_url' => 'hình ảnh',
                'price' => 1550000,
                'view' => 16060,
                'description' => 'Mô tả cho khóa học cơ sở dữ liệu',
                'rating' => 5,
            ],
            [
                'name' => 'NoteJs',
                'teacher_id' => 4,
                'image_url' => 'hình ảnh nodejs',
                'price' => 1950000,
                'view' => 11800,
                'description' => 'Mô tả cho khóa học nodejs',
                'rating' => 3.9,
            ],
            [
                'name' => 'Laravel framework',
                'teacher_id' => 3,
                'image_url' => 'hình ảnh Laravel framework',
                'price' => 1810000,
                'view' => 11000,
                'description' => 'Mô tả cho khóa học Laravel framework',
                'rating' => 4.6,
            ],
        ];

        DB::table('courses')->insert($data);
    }
}
