<?php

namespace App\Http\Controllers;

use App\Exports\UsersExport;
use App\Imports\UsersImport;
use App\Models\User;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view('index', compact('users'));
    }

    public function export(){
        return Excel::download(new UsersExport, 'users.xlsx');
    }

    public function import(Request $request){
        Excel::import(new UsersImport, $request->file);
        return redirect('/');
    }
}
