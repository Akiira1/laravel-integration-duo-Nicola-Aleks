<?php

namespace App\Models;

use App\Http\Controllers\UserController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

	protected $fillable = [
		'name',
	]; // model_anchor

	protected $table = "roles";

	public function user()
	{
		return $this->hasMany(User::class);
	}
}
