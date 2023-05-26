<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use Illuminate\Http\Request;
use Session;
use function Symfony\Component\Console\Style\success;

class CustomerAuthController extends Controller
{
    private $customer, $email, $result = [];
    public function login()
    {
        return view('website.customer.login');
    }

    public function newLogin(Request $request)
    {
        $this->customer = Customer::where('email', $request->email)->first();
        if($this->customer)
        {
            if(password_verify($request->password, $this->customer->password))
            {
                Session::put('customer_id', $this->customer->id);
                Session::put('customer_name', $this->customer->name);
                return redirect('/customer/dashboard');
            }
            else
            {
                return back()->with('message', 'Password is invalid');
            }
        }
        else
        {
            return back()->with('message', 'Email address is invalid');
        }
    }

    public function logOut()
    {
        Session::forget('customer_id');
        Session::forget('customer_name');
        return redirect('/');
    }

    public function newCustomer(Request $request)
    {
        $this->customer             = new Customer();
        $this->customer->name       = $request->name;
        $this->customer->email      = $request->email;
        $this->customer->mobile     = $request->mobile;
        $this->customer->password   = bcrypt($request->password);
        $this->customer->save();

        Session::put('customer_id', $this->customer->id);
        Session::put('customer_name', $this->customer->name);
        return redirect('/customer/dashboard');
    }

    public function dashboard()
    {
        return view('website.customer.index', [
            'orders' => Order::where('customer_id', session('customer_id'))->get(),
        ]);
    }

    public function customerEmailCheck()
    {
        $this->email = $_GET['email'];

        $this->customer = Customer::where('email', $this->email)->first();
        if($this->customer)
        {
            $this->result = [
                'message' => 'Email address already Exist',
                'success' => false,
            ];
        }
        else
        {
            $this->result = [
                'message' => 'Email address available',
                'success' => true,
                ];
        }
        return response()->json($this->result);
    }
}
