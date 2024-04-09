<?php

namespace Marsudi\JwtRefreshAccessToken;

use Firebase\JWT\JWT as FirebaseJWT;

class JWT
{
    public function __construct()
    {

    }

    public function loginJWT(array $payload, $accessTokenEnv, $refreshTokenEnv, $algorithm)
    {

        $accessToken = FirebaseJWT::encode($payload, $accessTokenEnv, $algorithm);
        $refreshToken = FirebaseJWT::encode($payload, $refreshTokenEnv, $algorithm);

        return [
            "access_token" => $accessToken,
            "refresh_token" => $refreshToken
        ];

    }

    public function refreshJWT()
    {

    }

    public function logoutJWT()
    {

    }

}