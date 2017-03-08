<?php 
namespace App;

use Illuminate\Notifications\Notifiable;
use Zizaco\Entrust\EntrustRole;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Role extends Authenticatable
{
	use Notifiable;
}