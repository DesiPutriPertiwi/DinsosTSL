<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Uep;
use App\Models\Anak;
use App\Models\Lansia;

class ResosController extends Controller
{
    public function dataAbc(){
        return view('user.resos.data-abc');
    }

    public function dataLansia(){
        $lansia = Lansia::select()->paginate(10);
        return view('user.resos.data-lansia')->with(compact(['lansia', $lansia]));
    }

    public function dataAnak(){
        $anak = Anak::select()->paginate(10);
        return view('user.resos.data-anak')->with(compact(['anak', $anak]));
    }

    public function dataUep(){
        $uep=Uep::select()->paginate(10);
        return view('user.resos.data-uap')->with(compact(['uep',$uep]));
    }

    public function kemiskinan(){
        return view('user.resos.konten-kemiskinan');
    }

    public function kedisabilitasan(){
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

    public function pmks(){
        return view('user.resos.konten-pmks');
    }

    public function psks(){
        return view('user.resos.konten-psks');
    }
}
