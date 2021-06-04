<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer_request;
use Illuminate\Support\Facades\DB;
use App\Providers\RouteServiceProvider;
use App\Models\customerRegistration;
//use Illuminate\Foundation\customer_registration;
use Illuminate\Support\Facades\Hash;

class Admin extends Controller
{
    //
    public function admin_Descision1()
    {
        return view("admin_Descision");
    }
    public function customer_view_response1()
        {
            $data= array(
                'users' => DB::table('customer_requests')->get()
            );
                return view("customer_view_response",$data);
        
        }
}
