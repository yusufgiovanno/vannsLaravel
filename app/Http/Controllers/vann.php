<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Models\Employee;

class vann extends Controller
{
    public function index(){

        //Mengambil data dari database
        $employees = Employee::orderBy('id')->where('show', 'true')->get();

        //Mengirim data ke view v_data melalui array emp
        return view('v_data', ['emp' => $employees]);
    }

    public function insertion(Request $request){

        $emp = new Employee;
        $emp -> first_name = $request->input('fName');
        $emp -> last_name  = $request->input('lName');
        $emp -> picture    = $request->input('picture');
        $emp -> title      = $request->input('title');
        $emp -> password   = $request->input('password');
        $emp -> show       = 'true';

        $emp -> save();

        return $this->index();
    }

    public function edit($id){
        $data = Employee::findOrFail($id);
        return view('v_edit', ['data' => $data]);
    }

    public function update(Request $req){
        $data = Employee::find($req->id);

        $data -> first_name = $req->fName;
        $data -> last_name  = $req->lName;
        $data -> last_name  = $req->input('lName');
        $data -> picture    = $req->input('picture');
        $data -> title      = $req->input('title');
        
        $data->save();

        return redirect('employees');
    }

    public function delete($id){
        $data = Employee::findOrFail($id);

        $data->show = 'false';
        $data->save();

        return redirect('employees');

    }

    public function drop($id){
        $data = Employee::where('id', $id)->delete();

        return redirect('employees');

    }

    public function login(Request $req){
        $cred = Employee::where('title', $req->title)->first();

        if ($cred->title == $req->title AND $cred->password == $req->pwd){
            session(['logged' => 'true']);
            session(['foto' => $cred -> picture]);
            session(['title' => $cred -> title]);
            session(['nama' => $cred -> first_name . " " . $cred -> last_name]);
            return redirect('employees');
        } else {
            return redirect('login');
        }
    }

    public function logout(){
        session()->flush();
        return redirect('/');
    }
}