<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Province extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $table = 'province';
    public function getProvinces() {
        $data = DB::table($this->table)->select('id','province_name')->get();
        return $data;
    }
}
