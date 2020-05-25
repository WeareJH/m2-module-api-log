<?php declare(strict_types=1);

namespace Jh\ApiLog\Logger;

use Magento\Framework\Logger\Handler\Base;

/**
 * @author Michael Woodward <michael@wearejh.com>
 */
class RequestHandlerGraphQL extends Base
{
    protected $fileName = '/var/log/graphql.log';
}
