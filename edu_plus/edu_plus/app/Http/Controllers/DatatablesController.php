<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Http\Controllers\Carbon;
use App\User;
use App\Role;
use App\RoleUser;

class DatatablesController extends Controller
{
 //user datatables
    public function userData()
    {
    	 $users = User::select(['id', 'name', 'email', 'created_at','updated_at']);



       return Datatables::of($users)
			                 ->addColumn('action', function($user) {

			                 	$textDelete = "<form action='" . route("user.destroy", $user->id) . "' method='post'>";
			                 	$textDelete .= csrf_field() . method_field('delete');
								$textDelete .= "<a href='". route("user.edit", $user->id) ."' class=\"btn btn-xs btn-primary\"><i class=\"glyphicon glyphicon-edit\"></i></a>";
								$textDelete .= "<button type=\"submit\" onclick=\"return confirm('Are you sure ?')\" class=\"btn btn-xs btn-danger\"><i class=\"glyphicon glyphicon-remove\"></i></button>";
								$textDelete .= "</form>";

				                 return $textDelete;
			                 })
			                 ->make(true);
    }

// role datatables
     public function roleData()
    {
    	 $role = Role::select(['id', 'name','created_at','updated_at']);


       return Datatables::of($role)
			                 ->addColumn('action', function($role) {

			                 	$textDelete = "<form action='" . route("role.destroy", $role->id) . "' method='post'>";
			                 	$textDelete .= csrf_field() . method_field('delete');
								$textDelete .= "<a href='". route("role.edit", $role->id) ."' class=\"btn btn-xs btn-primary\"><i class=\"glyphicon glyphicon-edit\"></i></a>";
								$textDelete .= "<button type=\"submit\" onclick=\"return confirm('Are you sure ?')\" class=\"btn btn-xs btn-danger\"><i class=\"glyphicon glyphicon-remove\"></i></button>";
								$textDelete .= "</form>";

				                 return $textDelete;
			                 })
			                 ->make(true);
    }

 // role user
       public function roleUserData()
    {
    	 $roleUser = RoleUser::select(['user_id', 'role_id','created_at','updated_at']);


       return Datatables::of($roleUser)
			                 ->make(true);
    }

}
