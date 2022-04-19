<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Map extends Model
{
    use HasFactory;

	protected $fillable = [
		'name',
		'address_address',
		'address_latitude',
		'address_longitude',
		'phone',
		'mobile',
	]; // model_anchor

	protected $table = "maps";
}
