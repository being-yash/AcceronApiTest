<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $req)
    {

        $data = DB::table('employees')->get();
        return $data;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function search(Request $req)
    {

        // for search with id
        if (!empty($req->search)) {
            // code...
            $data = DB::table('employees')->where('employee_id',$req->search)->get();
            return $data;
        }elseif (!empty($req->job_title)) {
            // code...
            $data = DB::table('employees')->where('job_title',$req->job_title)->get();
            return $data;
        }elseif (!empty($req->department)) {
            // code...
            $data = DB::table('employees')->where('department',$req->department)->get();
            return $data;
        }elseif (!empty($req->gender)) {
            // code...
            $data = DB::table('employees')->where('gender',$req->gender)->get();
            return $data;
        }elseif (!empty($req->country)) {
            // code...
            $data = DB::table('employees')->where('country',$req->country)->get();
            return $data;
        }elseif (!empty($req->city)) {
            // code...
            $data = DB::table('employees')->where('city',$req->city)->get();
            return $data;
        }elseif (!empty($req->from_hiring_date) && !empty($req->to_hiring_date)) {
            // code...
            $data = DB::table('employees')
                    ->where('hire_date','>',$req->from_hiring_date)
                    ->where('hire_date','<',$req->to_hiring_date)
                    ->get();
            return $data;
        }else{
            return "No data provided";
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
