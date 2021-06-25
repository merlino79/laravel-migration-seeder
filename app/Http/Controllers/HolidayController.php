<?php

namespace App\Http\Controllers;
use\App\Holiday;
use Illuminate\Http\Request;

class HolidayController extends Controller
{
    public function index(){
      @holiday = Holiday;
      return view('holiday', ['holiday => $holiday']);
    }
}
