<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class District extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $table = 'district';
    public function getDistricts($provinceId) {
        $data = DB::table($this->table)
                ->select('id','province_id','district_name')
                ->where('province_id', $provinceId)
                ->get();

        return $data;
    }

}
