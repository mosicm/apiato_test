<?php

/**
 * @apiGroup           Song
 * @apiName            deleteSong
 *
 * @api                {DELETE} /v1/songs/:id Endpoint title here..
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
$router->delete('songs/{id}', [
    'as' => 'api_song_delete_song',
    'uses'  => 'Controller@deleteSong',
    // 'middleware' => [
    //   'auth:api',
    // ],
]);
