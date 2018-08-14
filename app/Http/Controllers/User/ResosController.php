<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ResosController extends Controller
{
    public function dataAbc(){
        return view('user.resos.data-abc');
    }

    public function dataLansia(){
        return view('user.resos.data-lansia');
    }

    public function dataAnak(){
        return view('user.resos.data-anak');
    }

    public function dataUap(){
        return view('user.resos.data-uap');
    }

    public function kemiskinan(){
        return view('user.resos.konten-kemiskinan');
    }

    public function kedisablititasan(){
        return view('user.resos.konten-kedisabilitasan');
    }

    public function keterlantaran(){
        return view('user.resos.konten-keterlantaran');
    }

    public function ketunaan(){
        return view('user.resos.konten-ketunaan');
    }

    public function korban(){
        return view('user.resos.konten-korban');
    }

    public function ktk(){
        return view('user.resos.konten-ktk');
    }

}
