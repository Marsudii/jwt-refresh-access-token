<?php

/*
 * This file is part of jwt-auth.
 *
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [

    'secret_access_token' => env('JWT_SECRET_ACCESS_TOKEN'),
    'secret_refresh_token' => env('JWT_SECRET_REFRESH_TOKEN'),

    'algo' => env('JWT_ALGO', 'HS256'),
];