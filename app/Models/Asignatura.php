<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Asignatura
 *
 * @property $id
 * @property $nombAsignatura
 * @property $cantCreditos
 * @property $nombDocente
 * @property $prerrequisito
 * @property $cantHorasTA
 * @property $cantHorasTD
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Asignatura extends Model
{
    
    static $rules = [
		'nombAsignatura' => 'required',
		'cantCreditos' => 'required',
		'nombDocente' => 'required',
		'prerrequisito' => 'required',
		'cantHorasTA' => 'required',
		'cantHorasTD' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombAsignatura','cantCreditos','nombDocente','prerrequisito','cantHorasTA','cantHorasTD'];



}
