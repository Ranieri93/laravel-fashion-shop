<?php

namespace App\Http\Controllers;

use App\Clothe;
use Illuminate\Http\Request;

class ClotheController extends Controller
{
    public function index() {

        $vestiti = Clothe::all();
        $data = [
            'vestiti' => $vestiti
        ];
        return view('clothes', $data);
//        dd($vestiti);

    }
}
