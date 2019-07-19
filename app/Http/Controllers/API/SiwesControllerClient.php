<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Application;

class SiwesControllerClient extends Controller
{
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

    public function it()
    {
        //
        return DB::table('users')->where('category', 'IT Engineer')->get();
    }



    public function management()
    {
        //
        return DB::table('users')->where('category', 'Management')->get();
    }

    public function accounting()
    {
        //
        return DB::table('users')->where('category', 'Accounting')->get();
    }

    public function design()
    {
        //
        return DB::table('users')->where('category', 'Design & Art')->get();
    }

    public function applyto(Request $request)
        {
            //       
            $this->validate($request, [
                'name' => 'required ',
                'school' => 'required ',
                'email' => 'required',
                'phone_number' => 'required',            
                'level' => 'required',
                'start_date' => 'required ',
                'end_date' => 'required',
                'yourself' => 'required',                    
            ]);

                Application::create($request->all());

        }
}
