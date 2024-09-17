<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use Illuminate\Support\Facades\Auth;

class POSController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            return redirect('/dashboard');
        }
        return view('index');
    }

    public function login(Request $request)
    {

        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();


            return redirect()->intended('/dashboard');
        } else {
            return redirect('/')->with('error', 'Invalid username or password');
        }
    }


    function dashboard()
    {
        return view('dashboard');
    }

    function user()
    {
        return view('user_management');
    }

    function supplier()
    {
        return view('supplier_information');
    }

    function order_supplies()
    {
        return view('order_supplies');
    }

    function delivery()
    {
        return view('delivery_records');
    }

    function item_management()
    {
        return view('item_management');
    }

    function inventory_management()
    {
        return view('inventory_management');
    }

    function inventory_adjustment()
    {
        return view('inventory_adjustment');
    }

    function activity_log()
    {
        return view('activity_log');
    }

    function inventory_report()
    {
        return view('inventory_report');
    }

    function reorder_list_report()
    {
        return view('reorder_list_report');
    }

    function fast_moving_item_report()
    {
        return view('fast_moving_item_report');
    }

    function slow_moving_item_report()
    {
        return view('slow_moving_item_report');
    }

    function sales_report()
    {
        return view('sales_report');
    }

    function stock_movement_report()
    {
        return view('stock_movement_report');
    }

    function expiration_report()
    {
        return view('expiration_report');
    }

    function sales_return_report()
    {
        return view('sales_return_report');
    }

    function transaction_history_report()
    {
        return view('transaction_history_report');
    }

    function userInformation()
    {
        return view('user_account');
    }
}
