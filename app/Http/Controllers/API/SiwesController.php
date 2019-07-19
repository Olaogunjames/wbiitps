<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Application;

class SiwesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:api');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function updatecompany(Request $request, $id)
    {
        //       
        $user = User::findOrFail($id);                  
       

        $user->name = $request->name;       
        $user->company_name = $request->company_name;
        $user->email = $request->email;  
        $user->location = $request->location;       
        $user->description = $request->description;      
                   
        $user->update();

    }

    public function applications(){
        return DB::table('applications')->where('user_id', Auth::user()->id)->get();
    }

    public function accept($id){
        $apply = Application::findOrFail($id);

        $apply->feedback = "Accepted";

        $apply->update();

    }

    public function reject($id){
        $apply = Application::findOrFail($id);

        $apply->feedback = "Rejected";

        $apply->update();

    }
}
