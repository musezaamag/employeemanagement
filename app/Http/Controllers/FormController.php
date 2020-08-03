<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\information;
use Carbon\Carbon;


class FormController extends Controller
{
    public function index()
    {
        return view('pages.form');
    }
    public function store()
    {
        $insert_information = new information();
        $data = request()->validate([
            'firstname' => 'required'
        ]);
        $insert_information->firstname = request('firstname');
        $insert_information->lastname = request('lastname');
        $insert_information->birthday = request('birthday');
        $insert_information->position = request('position');
        $insert_information->age = Carbon::parse(request('birthday'))->age;

        $insert_information->save();

        return ;
        
    }
    public function edit($element)
    {
        $information = information::find($element);
        return view('pages.edit',$information);
    }
}
