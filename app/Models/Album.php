<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Album
 *
 * @property $id
 * @property $titulo
 * @property $artista_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Artista $artista
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Album extends Model
{
    
    static $rules = [
		'titulo' => 'required',
		'artista_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['titulo','artista_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function artista()
    {
        return $this->hasOne('App\Models\Artista', 'id', 'artista_id');
    }
    

}
