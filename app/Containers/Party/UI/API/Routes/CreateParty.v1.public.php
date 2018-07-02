<?php

/**
 * @apiGroup           Party
 * @apiName            createParty
 *
 * @api                {POST} /v1/parties Endpoint title here..
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
$router->post('parties', [
    'as' => 'api_party_create_party',
    'uses'  => 'Controller@createParty',
    'middleware' => [
      'auth:api',
    ],
]);
