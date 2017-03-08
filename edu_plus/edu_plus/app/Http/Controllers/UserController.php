<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.user.list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = hash('md5', $request->password);
            $user->first_name = $request->first_name;
            $user->last_name = $request->last_name;
            $user->is_men = $request->gender;
            $user->date_of_birth = $request->birthday;
            $user->address = $request->address;
            $user->save();
            if(isset($request->luu_tao_moi))
            {
              return redirect()->route('user.create');
                
            }
            else if(isset($request->luu))
            {
                return redirect()->route('user.index');
                
            }
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = User::find($id);
        return view('admin.user.add',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
     
            $user = User::find($id);
            $user->name = $request->name;
            $user->email = $request->email;
            // $user->password = hash('md5', $request->password);
            $user->first_name = $request->first_name;
            $user->last_name = $request->last_name;
            $user->is_men = $request->gender;
            $user->date_of_birth = $request->birthday;
            $user->address = $request->address;
            $user->save();
            return redirect()->route('user.index');
        
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('user.index');
    }
}
