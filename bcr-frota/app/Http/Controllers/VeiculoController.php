<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class VeiculoController extends Controller
{


    /**
     * @OA\GET(
     *     tags={"Veículo"},
     *     summary="Obtém a lista de veículo",
     *     description="Recupera a lista do veículo da frota",
     *     path="/veiculos",
     *     @OA\Response(response="200", description="A list with courses"),
     *     @OA\Response(
     *       response=422,
     *       description="O servidor entende o tipo de conteúdo da entidade da requisição, e a sintaxe da requisição esta correta, mas não foi possível processar as instruções presentes.",
     *       @OA\JsonContent(ref="#/components/schemas/Error")
     *   ),
     *   @OA\Response(
     *       response=401,
     *       description="Solicitação não foi aplicada porque não possui credenciais de autenticação válidas para o recurso de destino.",
     *       @OA\JsonContent(ref="#/components/schemas/Error")
     *   )
     * )
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Log::channel('logstash')->debug('Logging to logstash');
        //
    }

    /**
     * @OA\POST(
     *     tags={"Veículo"},
     *     summary="Grava veículo",
     *     description="Grava informações do veículo da frota",
     *     path="/veiculos",
     *     @OA\Response(response="200", description="A list with courses"),
     *     @OA\Response(
     *       response=422,
     *       description="O servidor entende o tipo de conteúdo da entidade da requisição, e a sintaxe da requisição esta correta, mas não foi possível processar as instruções presentes.",
     *       @OA\JsonContent(ref="#/components/schemas/Error")
     *   ),
     *   @OA\Response(
     *       response=401,
     *       description="Solicitação não foi aplicada porque não possui credenciais de autenticação válidas para o recurso de destino.",
     *       @OA\JsonContent(ref="#/components/schemas/Error")
     *   )
     * )
     * 
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * @OA\GET(
     *     tags={"Veículo"},
     *     summary="Obtém veículo",
     *     description="Recupera informações do veículo da frota",
     *     path="/veiculos/{id}",
     *     @OA\Response(response="200", description="A list with courses"),
     *     @OA\Response(
     *       response=422,
     *       description="O servidor entende o tipo de conteúdo da entidade da requisição, e a sintaxe da requisição esta correta, mas não foi possível processar as instruções presentes.",
     *       @OA\JsonContent(ref="#/components/schemas/Error")
     *   ),
     *   @OA\Response(
     *       response=401,
     *       description="Solicitação não foi aplicada porque não possui credenciais de autenticação válidas para o recurso de destino.",
     *       @OA\JsonContent(ref="#/components/schemas/Error")
     *   )
     * )
     * 
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     *   @OA\PUT(
     *     tags={"Veículo"},
     *     summary="Atualiza veículo",
     *     description="Atualiza informações do veículo da frota",
     *     path="/veiculos/{id}",
     *     @OA\Response(response="200", description="A list with courses"),
     *     @OA\Response(
     *       response=422,
     *       description="O servidor entende o tipo de conteúdo da entidade da requisição, e a sintaxe da requisição esta correta, mas não foi possível processar as instruções presentes.",
     *       @OA\JsonContent(ref="#/components/schemas/Error")
     *   ),
     *   @OA\Response(
     *       response=401,
     *       description="Solicitação não foi aplicada porque não possui credenciais de autenticação válidas para o recurso de destino.",
     *       @OA\JsonContent(ref="#/components/schemas/Error")
     *   )
     * )
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     *   @OA\DELETE(
     *     tags={"Veículo"},
     *     summary="Exclui o veículo",
     *     description="Exclui o veículo da frota",
     *     path="/veiculos/{id}",
     *     @OA\Response(response="200", description="A list with courses"),
     *     @OA\Response(
     *       response=422,
     *       description="O servidor entende o tipo de conteúdo da entidade da requisição, e a sintaxe da requisição esta correta, mas não foi possível processar as instruções presentes.",
     *       @OA\JsonContent(ref="#/components/schemas/Error")
     *   ),
     *   @OA\Response(
     *       response=401,
     *       description="Solicitação não foi aplicada porque não possui credenciais de autenticação válidas para o recurso de destino.",
     *       @OA\JsonContent(ref="#/components/schemas/Error")
     *   )
     * )
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
