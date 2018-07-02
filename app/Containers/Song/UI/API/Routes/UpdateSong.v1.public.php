<?php

/**
 * @apiGroup           Song
 * @apiName            updateSong
 *
 * @api                {PATCH} /v1/songs/:id Endpoint title here..
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
$router->patch('songs/{id}', [
    'as' => 'api_song_update_song',
    'uses'  => 'Controller@updateSong',
    // 'middleware' => [
    //   'auth:api',
    // ],
]);
