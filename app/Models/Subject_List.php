<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Subject_List extends Model   {
	protected $table = 'subject_list';
	//public $timestamps = false;
	protected $fillable = ['subject_name'];

}
