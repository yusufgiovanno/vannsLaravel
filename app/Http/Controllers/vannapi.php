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
        //return $data;
        return view('v_receiveApi', ['data' => $data['data']]);
    }
}
