<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Providers\RouteServiceProvider;
use App\Models\customerRegistration;
//use Illuminate\Foundation\customer_registration;
use Illuminate\Support\Facades\Hash;
//use App\customer_registrations;
class car_repair_controller extends Controller
{
    //
    public function home()
    {
        return view("index");
    }
    public function Customer_registration()
    {
        return view("Customer_registration");
    }
    public function customeregister()
    {
        return view("customer_insert");
    }

public function viewCustomer()
    {   $data= array(
        'users' => DB::table('customer_registrations')->get()
    );
        return view("customer_view",$data);
        //$users=DB::select('SELECT id,fname,lname,mobile FROM customer_registrations');
        //return view("customer_view");
    }

    public function admin()
    {
        return view("login_admin");
    }
    public function check_login(Request $check)
    {
       $user= $check->username1;
        $pass=$check->password1;

        $session = customerRegistration::where($user=='username')->where($pass=='password')->get();
        if(count($session)>0)
        {
            $check->session->put('username',$session[0]->id);
            $check->session->put('password',$session[0]->name);
            return redirect('customer_view');
        }
        else
        {
            return redirect('login_admin')
            ->with('msg','email or password is incorect');
        }
    }

    public function Customer1(Request $request)
    {
        $object = new customerRegistration();
        $object->fname=$request->fname;
        $object->lname=$request->lname;
        $object->address=$request->address;
        $object->mobile=$request->mobile;
        $object->username=$request->username;
        $object->password=$request->password;
        $object->save();
        if($object)
        {
            return redirect("customer_insert")->with('msg','Account created successful');
        }
    }
    
    
}
