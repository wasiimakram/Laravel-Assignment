<?php

namespace App\Http\Controllers\Back;

use Auth;
use File;
use App\Mail\MassMail;
use App\Models\Back\Company;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\CompaniesRequest;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class CompaniesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        

        $title = 'Companies Listing';
        $data = Company::paginate(10);
        return view('back.companies.index', compact('title', 'data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CompaniesRequest $request)
    {
        $data = new Company();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->website = $request->website;
        if(isset($request->image_path) && !empty($request->image_path)){
            $img=md5($request->image_path->getClientOriginalName()).''.md5(time());
            $request->image_path->storeAs('public/companies', $img);
            $data->logo = $img;
        }
        $data->save();

        

        return response()->json(['status' => 'success', 'message' => 'Record added Successfully!']);
    }
    public function update(CompaniesRequest $request, $id)
    {
        // Apply Validations
        $request->validated();
        
        $data =  Company::find($request->id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->website = $request->website;
        if(isset($request->image_path) && !empty($request->image_path)){
            $img=md5($request->image_path->getClientOriginalName()).''.md5(time());
            $request->image_path->storeAs('public/companies', $img);
            $data->logo = $img;
        }
        $data->save();

        send_email_to_company($data->email);

        Session::flash('success','Record Updated Successfully!');
        return back();
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
        return Company::find($id);
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
        $data=Company::find($id);
        if( $data->logo != '')
        {
            Storage::delete($data->logo);
        }
        $data->delete();
        return response()->json(['status' => 'success', 'message' => 'Record Deleted Successfully!']);
    }
}
