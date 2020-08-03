<?php

namespace App\Http\Controllers;

use App\information;
use Carbon\Carbon;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //protected $table = 'informations';
        $information = information::orderBy('id')->paginate(20);
        $countemployee = information::count();
        //return($information);
        return(view('pages.information',[
            'information' => $information,
            'countemployee' => $countemployee
        ]));
    }
    public function byid($element){
        $information = information::where('id','=',$element)->paginate(20);
        return view('pages.information',[
            'information' => $information
        ]);
    }
    public function store()
    {
        $insert_information = new information();
        $data = request()->validate([
            'firstname' => 'required',
            'lastname'  => 'required'
        ]);
        $insert_information->firstname = request('firstname');
        $insert_information->lastname = request('lastname');
        $insert_information->birthday = request('birthday');
        $insert_information->position = request('position');
        $insert_information->age = Carbon::parse(request('birthday'))->age;

        $insert_information->save();

        $information = information::orderBy('id')->paginate(20);

        return view('pages.information',[
            'information' => $information
        ]);
    }
    public function delete($id)
    {
        $information = information::findOrFail($id);
        $information->delete();
        return redirect('/information');
    }
    public function edit()
    {
        $id = request('id');
        $information = information::findOrFail($id);
        $information->firstname = request('firstname');
        $information->lastname = request('lastname');
        $information->birthday = request('birthday');
        $information->position = request('position');

        $information->save();

        return redirect('/information');
    }
}
