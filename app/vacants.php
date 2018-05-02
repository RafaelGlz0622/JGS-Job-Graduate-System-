<?php

namespace Egresados;

use Illuminate\Database\Eloquent\Model;

class vacants extends Model
{
    //Table Name
	protected $table = "vacants";
   //Primary Key
	public $primaryKey = "id";
	//Timestamps
	public $timestamps = true;

}
