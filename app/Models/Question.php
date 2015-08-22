<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Question extends Model   {
	protected $table = 'question';
	//public $timestamps = false;
	protected $fillable = ['subject','q_description', 'q_opt_1', 'q_opt_2', 'q_opt_3', 'q_opt_4', 'q_ans'];

}
