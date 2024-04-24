<?php

namespace Marsudi\JwtRefreshAccessToken;

use Firebase\JWT\JWT as FirebaseJWT;

class JWT
{

    public static function login(array $payload, $accessTokenEnv, $refreshTokenEnv, $algorithm)
    {
        $accessToken = FirebaseJWT::encode($payload, $accessTokenEnv, $algorithm);
        $refreshToken = FirebaseJWT::encode($payload, $refreshTokenEnv, $algorithm);
        return [
            "access_token" => $accessToken,
            "refresh_token" => $refreshToken
        ];
    }

    public static function register(array $data)
    {
        return $data;

    }

    public static function refresh(string $payload)
    {
        return $payload;
    }

    public static function logout(string $payload)
    {

    }

    public static function checkExpired(string $payload)
    {
        return $payload;

    }


    public static function endcode(string $payload)
    {
        return $payload;

    }
    public static function decode()
    {

    }
}