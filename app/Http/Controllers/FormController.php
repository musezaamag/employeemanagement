<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\employees;
use Carbon\Carbon;


class FormController extends Controller
{
    public function index() //Function control return to form page.
    {
        return view('pages.form');
    }
    public function edit($element) //Function to pass variable to edit page.
    {
        $employees = employees::find($element);
        return view('pages.edit',$employees);
    }
}
