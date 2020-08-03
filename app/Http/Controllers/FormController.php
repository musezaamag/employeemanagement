<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\employees;
use Carbon\Carbon;


class FormController extends Controller
{
    public function index()
    {
        return view('pages.form');
    }
    public function store()
    {
        $insert_employee = new employees();
        $data = request()->validate([
            'firstname' => 'required'
        ]);
        $insert_employee->firstname = request('firstname');
        $insert_employee->lastname = request('lastname');
        $insert_employee->birthday = request('birthday');
        $insert_employee->position = request('position');
        $insert_employee->age = Carbon::parse(request('birthday'))->age;

        $insert_employee->save();

        return ;
        
    }
    public function edit($element)
    {
        $employees = employees::find($element);
        return view('pages.edit',$employees);
    }
}
