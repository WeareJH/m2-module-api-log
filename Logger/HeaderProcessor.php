<?php declare(strict_types=1);

namespace Jh\ApiLog\Logger;

class HeaderProcessor
{
    public function __invoke(array $record)
    {
        $record['extra']['headers'] = [
            'content_type' => $_SERVER['HTTP_CONTENT_TYPE'] ?? null,
            'authorization' => $_SERVER['HTTP_AUTHORIZATION'] ?? null,
            'accept' => $_SERVER['HTTP_ACCEPT'] ?? null,
        ];

        return $record;
    }
}
