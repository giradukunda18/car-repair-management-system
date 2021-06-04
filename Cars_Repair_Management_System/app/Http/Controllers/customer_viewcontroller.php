<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Providers\RouteServiceProvider;
use App\Models\customer_request;
use Illuminate\Foundation\customer_registration;
use Illuminate\Support\Facades\Hash;

class customer_viewcontroller extends Controller
{
    //
    public function customer_index1()
    {
        return view("customer_index");
    } 
    public function created_acc1()
    {
        return view("created_acc");
    }
    public function customer_login1()
    {
        return view("customer_login");
    }
    public function customer_request_mechanics1()
    {
        return view("customer_request_mechanics");
    }
    public function customer_request_mechanics2(Request $request)
    {
        $object = new customer_request();
        $object->v_name=$request->vname;
        $object->v_plate_number=$request->pnumber;
        $object->v_model=$request->model;
        $object->v_problem=$request->problem;
        $object->status='Pending';
        $object->save();
        if($object)
        {
            return redirect("customer_index")->with('message','Account created successful');
        }}
        public function customer_view_response1()
        {
            $data= array(
                'users' => DB::table('customer_requests')->get()
            );
                return view("customer_view_response",$data);
        
        }
    }
    


