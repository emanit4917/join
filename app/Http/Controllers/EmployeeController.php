<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index(){
        $data = Employee::with('salary')->with('department')->get();
       return view('salary.index',compact('data'));
    }
}
