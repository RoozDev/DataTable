<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index(){
        $users = User::query()->get()->all();
        return view('data_table.index',compact('users'));
    }
    public function DataTableNet(){
        $users = User::query()->get()->all();
        return view('data_table.datatable_net',compact('users'));
    }
}
