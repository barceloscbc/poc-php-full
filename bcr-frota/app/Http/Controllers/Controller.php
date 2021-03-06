<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use OpenApi\Annotations as OA;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    /**
     * @OA\OpenApi(
     *    @OA\Info(
     *      version="1.0.0",
     *      title="API para gestão de dados da frota",
     *      description="Esta api tem como objetivo fornecer recursos para manipular dados relacionados a frota da BCR.",
     *      @OA\Contact(
     *          email="ti@bcr.com.br"
     *      ),
     *      @OA\License(
     *          name="Apache 2.0",
     *          url="http://www.apache.org/licenses/LICENSE-2.0.html"
     *      )
     *   ),
     *    @OA\Server(
     *       url="{host}/bcr-frota/api/v1",
     *       description="OpenApi",
     *       @OA\ServerVariable(
     *          serverVariable="host",
     *          default="http://127.0.0.1:8000"
     *      )
     *    )
     *  ) 
     * 
     */

    /**
     * @OA\Response(
     *     response=422,
     *     description="Oservidor entende o tipo de conteúdo da entidade da requisição, e a sintaxe da requisição esta correta, mas não foi possível processar as instruções presentes.",
     *     @OA\MediaType(
     *         mediaType="application/json",
     *         @OA\Schema(ref="#/components/schemas/Error"),
     *     )
     * )
     * 
     * @OA\Response(
     *   response="product",
     *   description="All information about a product",
     *   @OA\JsonContent(ref="#/components/schemas/Error")
     * )
     */
}
