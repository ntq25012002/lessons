<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $table->string('name');
        // $table->string('email')->unique();
        // $table->string('phone')->unique();
        // $table->string('address')->nullable();
        // $table->date('date_of_birth')->nullable();
        $data = [
            [
                'name' => 'Nguyễn Văn Tèo',
                'major' => 'Software Engineer',
                'avatar_url' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Finkythuatso.com%2Fhinh-anh-dep%2Fanh-dai-dien-fb-hai-huoc-3801.html&psig=AOvVaw1wqAp53SUJlCazxtjh5pIw&ust=1683125957637000&source=images&cd=vfe&ved=0CBEQjRxqFwoTCPCvuvjy1v4CFQAAAAAdAAAAABAE',
                'email' => 'teonv@gmail.com',
                'phone' => '0964540635',
                'address' => 'Thạch Thất, Hà Nội',
                'description' => 'Giảng viên ưu tú',
            ],
            [
                'name' => 'Sô bin Sầm Sơn',
                'major' => 'Software Engineer',
                'avatar_url' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fthuthuatphanmem.vn%2Fhinh-anh-che-mat-tham-hai-huoc%2F&psig=AOvVaw1wqAp53SUJlCazxtjh5pIw&ust=1683125957637000&source=images&cd=vfe&ved=0CBEQjRxqFwoTCPCvuvjy1v4CFQAAAAAdAAAAABAZ',
                'email' => 'sobin@gmail.com',
                'phone' => '0336360976',
                'address' => 'Thanh Hóa',
                'description' => 'Giảng viên ưu tú 2*',
            ],
            [
                'name' => 'Nguyễn Công Tú',
                'major' => 'Software Engineer',
                'avatar_url' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fhaycafe.vn%2Favatar-hai%2F&psig=AOvVaw1wqAp53SUJlCazxtjh5pIw&ust=1683125957637000&source=images&cd=vfe&ved=0CBEQjRxqFwoTCPCvuvjy1v4CFQAAAAAdAAAAABAh',
                'email' => 'tunc@gmail.com',
                'phone' => '0333733335',
                'address' => 'TP Hồ Chí Minh',
                'description' => 'Giảng viên ưu tú 1*',
            ],
            [
                'name' => 'Đỗ Đại Học',
                'major' => 'Software Engineer',
                'avatar_url' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fnhadepso.com%2Fhinh-anh-avatar-hai-huoc%2F&psig=AOvVaw1wqAp53SUJlCazxtjh5pIw&ust=1683125957637000&source=images&cd=vfe&ved=0CBEQjRxqFwoTCPCvuvjy1v4CFQAAAAAdAAAAABAJ',
                'email' => 'hocdd@gmail.com',
                'phone' => '0336350963',
                'address' => 'Cà Mau',
                'description' => 'Giảng viên ưu tú 4*',
            ],
            [
                'name' => 'Nguyễn Trung Anh',
                'major' => 'Software Engineer',
                'avatar_url' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fkhoinguonsangtao.vn%2Fanh-meme-meo%2F&psig=AOvVaw1wqAp53SUJlCazxtjh5pIw&ust=1683125957637000&source=images&cd=vfe&ved=0CBEQjRxqFwoTCPCvuvjy1v4CFQAAAAAdAAAAABAR',
                'email' => 'anhnt@gmail.com',
                'phone' => '0336350961',
                'address' => 'Cà Mau',
                'description' => 'Giảng viên ưu tú 4*',
            ],
            
        ];

        DB::table('teachers')->insert($data);
    }
}
