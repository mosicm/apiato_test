<?php

/**
 * @apiGroup           Party
 * @apiName            deleteParty
 *
 * @api                {DELETE} /v1/parties/:id Endpoint title here..
 * @apiDescription     Endpoint description here..
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam           {String}  parameters here..
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
  // Insert the response of the request here...
}
 */

/** @var Route $router */
$router->delete('parties/{id}', [
    'as' => 'api_party_delete_party',
    'uses'  => 'Controller@deleteParty',
    'middleware' => [
      'auth:api',
    ],
]);
