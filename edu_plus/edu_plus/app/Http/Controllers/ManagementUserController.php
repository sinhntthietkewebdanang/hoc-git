<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ManagementUserController extends Controller
{
   
    public function getList()
    {
       return view('admin.user.list');
    }

     public function addNew()
    {
       return view('admin.user.add');
    }
}
