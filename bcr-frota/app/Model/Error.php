<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use OpenApi\Annotations as OA;

/**
 * @OA\Schema( 
 *   required={   
 *     "status",   
 *     "mensagem"
 *   }
 *  )
 */
class Error extends Model
{

    /**
     * Status code
     * @var string
     * @OA\Property(
     *   property="status",
     *   type="string",
     *   description="Código do status"
     * )
     */
    public $status;

    /**
     * Mensagem de error
     * @var string
     * @OA\Property(
     *   property="mensagem",
     *   type="string",
     *   description="Mensagem de error"
     * )
     */
    public $mensagem;
}
