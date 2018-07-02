<?php

/**
 * @apiGroup           Song
 * @apiName            createSong
 *
 * @api                {POST} /v1/songs Endpoint title here..
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
$router->post('songs', [
    'as' => 'api_song_create_song',
    'uses'  => 'Controller@createSong',
    // 'middleware' => [
    //   'auth:api',
    // ],
]);
