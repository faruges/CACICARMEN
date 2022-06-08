<?php

/**
 * Created by Reliese Model.
 */

namespace App\Model;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Log
 * 
 * @property int $id
 * @property string $proceso
 * @property string $nameUser
 * @property int|null $reinscripcion_menor_id
 * @property int|null $inscripcion_menor_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property ReinscripcionMenor|null $reinscripcion_menor
 * @property InscripcionMenor|null $inscripcion_menor
 *
 * @package App\Model
 */
class Log extends Model
{
	protected $table = 'logs';

	protected $casts = [
		'reinscripcion_menor_id' => 'int',
		'inscripcion_menor_id' => 'int'
	];

	protected $fillable = [
		'proceso',
		'nameUser',
		'reinscripcion_menor_id',
		'inscripcion_menor_id'
	];

	public function reinscripcion_menor()
	{
		return $this->belongsTo(ReinscripcionMenor::class);
	}

	public function inscripcion_menor()
	{
		return $this->belongsTo(InscripcionMenor::class);
	}
}
