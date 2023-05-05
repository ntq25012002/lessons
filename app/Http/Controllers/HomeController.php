<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct() {

    }
    public function index() {
        $title = 'Trang chủ';
        return view('client.index',['title' => $title]);
    }
}
