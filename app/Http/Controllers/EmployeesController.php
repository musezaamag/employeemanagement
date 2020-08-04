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
    public function index() //Function in index page retrieve data from model(database) and return data to home page.
    {
        $employees = employees::orderBy('id')->paginate(20); //orderby in and show only 20 data in 1 page
        $countemployee = employees::count(); //count how many employee
        return(view('pages.employees',[   
            'employees' => $employees,  
            'countemployee' => $countemployee
        ]));
    }
    public function byid($element){ //function recieve $id from route and return only that information
        $employees = employees::where('id','=',$element)->paginate(20);
        return view('pages.employees',[
            'employees' => $employees
        ]);
    }
    public function store() //Function store new employee to database
    {
        $insert_employees = new employees();
        //validate required
        $data = request()->validate([ 
            'firstname' => 'required',
            'lastname'  => 'required'
        ]);
        $insert_employees->firstname = request('firstname');
        $insert_employees->lastname = request('lastname');
        $insert_employees->birthday = request('birthday');
        $insert_employees->position = request('position');
        $insert_employees->age = Carbon::parse(request('birthday'))->age; //calculate age and input to database

        $insert_employees->save();

        $employees = employees::orderBy('id')->paginate(20); //retrieve data again after finished input data

        return view('pages.employees',[
            'employees' => $employees
        ]);
    }
    public function delete($id) //function remove data from database
    {
        $employees = employees::findOrFail($id); //just incase not found its gonna return 404
        $employees->delete();
        return redirect('/employees');
    }
    public function edit() //function to change database by id
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
