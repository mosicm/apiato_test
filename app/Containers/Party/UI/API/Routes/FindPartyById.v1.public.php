<?php

/**
 * @apiGroup           Party
 * @apiName            findPartyById
 *
 * @api                {GET} /v1/parties/:id Endpoint title here..
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
$router->get('parties/{id}', [
    'as' => 'api_party_find_party_by_id',
    'uses'  => 'Controller@findPartyById',
    'middleware' => [
      'auth:api',
    ],
]);
