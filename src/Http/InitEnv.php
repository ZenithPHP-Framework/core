<?php

namespace ZenithPHP\Core\Http;

use Dotenv\Dotenv;

class InitEnv
{
    public static function load(string $projectRoot = null): void
    {
        // If no root path is provided, use the default assumption
        $projectRoot = $projectRoot ?? dirname(__DIR__, 4);

        $dotenv = Dotenv::createImmutable($projectRoot);
        $dotenv->load();

        // DB info using $_ENV
        define('DB_HOST', $_ENV['DB_HOST']);
        define('DB_USER', $_ENV['DB_USER']);
        define('DB_PASS', $_ENV['DB_PASS']);
        define('DB_NAME', $_ENV['DB_NAME']);

        // App info using $_ENV
        define('APP_NAME', $_ENV['APP_NAME']);
        define('APP_URL', $_ENV['APP_URL']);
        define('APP_VERSION', $_ENV['APP_VERSION']);

        // JWT info using $_ENV
        define('JWT_SECRET', $_ENV['JWT_SECRET']);
        define('JWT_ISSUER', $_ENV['JWT_ISSUER']);
    }
}
