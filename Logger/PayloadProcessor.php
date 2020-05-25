<?php declare(strict_types=1);

namespace Jh\ApiLog\Logger;

/**
 * @author Michael Woodward <michael@wearejh.com>
 */
class PayloadProcessor
{
    public function __invoke(array $record)
    {
        if (in_array($_SERVER['REQUEST_METHOD'], ['POST', 'PUT'])) {
            $record['extra']['payload'] = file_get_contents('php://input');
        }

        return $record;
    }
}
