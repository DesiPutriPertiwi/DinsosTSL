<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DayasosController extends Controller
{
    public function index(){
        return view('user.dayasos.dayasos&fpm');
    }

    public function rinci(){
        return view('user.dayasos.dayasos&fpmRinci');
    }

}
