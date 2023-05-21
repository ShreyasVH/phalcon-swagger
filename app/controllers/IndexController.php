<?php

namespace app\controllers;

use OpenApi\Annotations as OA;

/**
 * @OA\Info(
 *     title="My API",
 *     version="1.0.0"
 * )
 */
class IndexController extends BaseController
{
    /**
     * @OA\Get(
     *     path="/api",
     *     summary="Get API endpoint",
     *     @OA\Parameter(
     *         name="input",
     *         in="query",
     *         description="Input parameter",
     *         required=true,
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Response(
     *         response="200",
     *         description="Successful response"
     *     )
     * )
     */
    public function getAction()
    {
        return [
            'input' => $this->request->getQuery('input')
        ];
    }

    /**
     * @OA\Post(
     *     path="/api",
     *     summary="Post API endpoint",
     *     @OA\Response(
     *         response="200",
     *         description="Successful response"
     *     )
     * )
     */
    public function postAction()
    {
        return [
            'input' => $this->request->getJsonRawBody(true)
        ];
    }

    /**
     * @OA\Put(
     *     path="/api",
     *     summary="Put API endpoint",
     *     @OA\Response(
     *         response="200",
     *         description="Successful response"
     *     )
     * )
     */
    public function putAction()
    {
        return [
            'input' => $this->request->getJsonRawBody(true)
        ];
    }

    /**
     * @OA\Delete(
     *     path="/api",
     *     summary="Delete API endpoint",
     *     @OA\Parameter(
     *         name="input",
     *         in="query",
     *         description="Input parameter",
     *         required=true,
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Response(
     *         response="200",
     *         description="Successful response"
     *     )
     * )
     */
    public function deleteAction()
    {
        return [
            'input' => $this->request->getQuery('input')
        ];
    }
}
