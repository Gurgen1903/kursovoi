<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Services\AdminServices;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(AdminServices $adminServices)
    {
        $total_users = $adminServices->getTotalUsers();
        $data_users = $adminServices->getAllDataUsers();
        return view('admin/adminHome',compact('total_users','data_users'));
    }

}