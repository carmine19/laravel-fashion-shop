<?php

namespace App\Http\Controllers;

use App\Dress;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {

        $all_dress = Dress::all();

        $data = [

            'dresses' => $all_dress,

            ];
       return view('home', $data);
    }
}
