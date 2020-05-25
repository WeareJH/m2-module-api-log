<?php declare(strict_types=1);

namespace Jh\ApiLog\Logger;

use Magento\Framework\Logger\Handler\Base;

class RequestHandlerWebApi extends Base
{
    protected $fileName = '/var/log/webapi.log';
}
