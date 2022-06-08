<?php

/**
 * Created by Reliese Model.
 */

namespace App\Model;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class User
 * 
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Model
 */
class User extends Model
{
	protected $table = 'users';

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'name',
		'email',
		'password'
	];
}
