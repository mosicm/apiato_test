<?php

/**
 * @apiGroup           Song
 * @apiName            getAllSongs
 *
 * @api                {GET} /v1/songs Endpoint title here..
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
$router->get('songs', [
    'as' => 'api_song_get_all_songs',
    'uses'  => 'Controller@getAllSongs',
    'middleware' => [
      'auth:api',
    ],
]);
