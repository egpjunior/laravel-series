<?php

namespace App;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Http\Controllers\DB;
use Illuminate\Database\Eloquent\Model;

/**
 * 
 */
class Serie extends Model
{

	public $timestamps = false;
	protected $fillable = ['nome'];
}




