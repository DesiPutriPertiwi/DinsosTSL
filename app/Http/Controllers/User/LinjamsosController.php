<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LinjamsosController extends Controller
{
    public function index(){
        return view('user.linjamsos.linjamsos');
    }
}
