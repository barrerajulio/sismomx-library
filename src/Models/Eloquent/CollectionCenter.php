<?php
namespace CodeandoMexico\Sismomx\Core\Models\Eloquent;

use Illuminate\Database\Eloquent\Model;


/**
 * Class CollectionCenter
 * @package CodeandoMexico\Sismomx\Core\Models\Eloquent
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
