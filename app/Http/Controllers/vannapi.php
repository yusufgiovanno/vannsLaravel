<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Employee;

class vannapi extends Controller
{
    public function fetchData(){
        $data = Employee::all();
        return $data;
    }

    public function fetchAPI(){
        $data = Http::get("https://reqres.in/api/users?page=1");
        return view('v_receiveApi', ['data' => $data['data']]);
    }

    public function cvd(){
        $data = Http::get('https://api.kawalcorona.com/indonesia/provinsi/');
        //return json_decode($data);
        return view('v_cvd', ['data' => json_decode($data)]);
    }

    public function pos(Request $req){
        $data = Http::get('https://kodepos.vercel.app/search?q=' . $req->kode);
        //return json_decode($data);
        return view('v_kodepos', ['data' => $data['data']]);
    }

}
