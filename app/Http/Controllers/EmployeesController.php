<?php

namespace App\Http\Controllers;

use App\employees;
use Carbon\Carbon;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //protected $table = 'employeess';
        $employees = employees::orderBy('id')->paginate(20);
        $countemployee = employees::count();
        //return($employees);
        return(view('pages.employees',[
            'employees' => $employees,
            'countemployee' => $countemployee
        ]));
    }
    public function byid($element){
        $employees = employees::where('id','=',$element)->paginate(20);
        return view('pages.employees',[
            'employees' => $employees
        ]);
    }
    public function store()
    {
        $insert_employees = new employees();
        $data = request()->validate([
            'firstname' => 'required',
            'lastname'  => 'required'
        ]);
        $insert_employees->firstname = request('firstname');
        $insert_employees->lastname = request('lastname');
        $insert_employees->birthday = request('birthday');
        $insert_employees->position = request('position');
        $insert_employees->age = Carbon::parse(request('birthday'))->age;

        $insert_employees->save();

        $employees = employees::orderBy('id')->paginate(20);

        return view('pages.employees',[
            'employees' => $employees
        ]);
    }
    public function delete($id)
    {
        $employees = employees::findOrFail($id);
        $employees->delete();
        return redirect('/employees');
    }
    public function edit()
    {
        $id = request('id');
        $employees = employees::findOrFail($id);
        $employees->firstname = request('firstname');
        $employees->lastname = request('lastname');
        $employees->birthday = request('birthday');
        $employees->position = request('position');

        $employees->save();

        return redirect('/employees');
    }
}
