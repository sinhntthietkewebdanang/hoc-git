<?php 
namespace App;

use Illuminate\Notifications\Notifiable;
use Zizaco\Entrust\EntrustRole;
use Illuminate\Foundation\Auth\User as Authenticatable;

class RoleUser extends Authenticatable
{
	use Notifiable;
	protected $table = 'role_user';
}