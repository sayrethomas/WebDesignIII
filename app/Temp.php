<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Temp extends Model
{
    //Table Name
	protected $table = 'temps';
	//Primary Key
	public $primaryKey = 'id';
	//Timestamps
	public $timestamps = true;
}
