<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Auth;
use App\Users;


class CustomerController extends Controller
{
    public function index()
    {
        return view('pages.customer.main');
    }  
    
}