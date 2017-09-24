<?php

namespace CodeandoMexico\Sismomx\Core\Models\Eloquent;

use Illuminate\Database\Eloquent\Model;


/**
 * User: @fabianjuarezmx
 * Date: 9/23/17
 */
class CollectionCenter extends Model
{
    /**
     * @var string
     */
    protected $table = 'collection_center';

    /**
     * Campos donde no se permite la asignacion masiva
     * @var array
     */
    protected $guarded = [];
}
