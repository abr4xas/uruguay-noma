<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Location extends Model
{
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'name',
		'slug',
		'departament_id',
		'cp',
	];


	public function departaments(): BelongsTo
	{
		return $this->belongsTo(Departament::class);
	}
}
