<?php

namespace App\Http\Controllers;

use App\Models\District;
use Illuminate\Http\Request;

class DistrictController extends Controller
{
    //
    protected $district;
    public function __construct(District $district) {
        $this->district = $district;
    }
    public function getDistrict(Request $request) {
        if(isset($request->province_id) && !empty($request->province_id)) {
            $provinceId = $request->province_id;
            $districts = $this->district->getDistricts($provinceId);
            $districtRendered = view('templates.district-option',['districts' => $districts])->render();
           
            return response()->json([
                'status' => 200,
                'message' => 'success',
                'districts' => $districts,
                'districtRendered' => $districtRendered,
            ]);
        }else {
            return response()->json([
                'status' => 500,
                'message' => 'error',
            ]);
        }
    }
}
