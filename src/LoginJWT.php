<?php

namespace Marsudi\JwtRefreshAccessToken;

use Firebase\JWT\JWT as FirebaseJWT;

class LoginJWT
{


    public function loginJWT(array $payload, $accessTokenEnv, $refreshTokenEnv, $algorithm)
    {
        $accessToken = FirebaseJWT::encode($payload, $accessTokenEnv, $algorithm);
        $refreshToken = FirebaseJWT::encode($payload, $refreshTokenEnv, $algorithm);
        return [
            "access_token" => $accessToken,
            "refresh_token" => $refreshToken
        ];

    }
}