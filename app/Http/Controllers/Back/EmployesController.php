<?php

namespace App\Http\Controllers\Back;

use File;
use Image;
use App\Mail\MassMail;
use App\Models\Back\User;
use App\Models\Back\Agent;
use App\Models\Back\Company;
use App\Models\Back\Employe;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\EmployesRequest;
use Illuminate\Support\Facades\Session;

class EmployesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        

        $title = 'All Employes';
        $data = Employe::with('company')->paginate(10);
        return view('back.employes.index', compact('title', 'data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        $title = 'Add New Employe';
        $companies=Company::all();
        return view('back.employes.create', compact('title','companies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmployesRequest $request)
    {
        // Apply Validations
        $request->validated();
        $data = new Employe();
        $data->first_name = $request->first_name;
        $data->last_name = $request->last_name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->company_id = $request->company_id;
        
        $data->save();
        Session::flash('success','New Employe Added Successfully!');
        return redirect(route('employes.index'));
    }
    public function update(EmployesRequest $request, $id)
    {
        // Apply Validations
        $request->validated();
        $data = Employe::find($id);
        $data->first_name = $request->first_name;
        $data->last_name = $request->last_name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->company_id = $request->company_id;
        
        $data->save();
        Session::flash('success','Employe Updated Successfully!');
        return redirect(route('employes.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = 'Edit Employe Record';
        $data=Employe::where('id',$id)->first();
        $companies=Company::all();
        return view('back.employes.edit', compact('title','data','companies'));
    }
 
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user=Employe::find($id);
        $user->delete();
        return response()->json(['status' => 'success', 'message' => 'Record Deleted Successfully!']);
    }
}
