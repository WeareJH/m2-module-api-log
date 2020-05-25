<?php declare(strict_types=1);

namespace JH\ApiLog\Plugin;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\App\FrontControllerInterface;
use Magento\Framework\App\RequestInterface;
use Magento\Webapi\Controller\Rest;
use Psr\Log\LoggerInterface;

/**
 * @author Michael Woodward <michael@wearejh.com>
 */
class LogPayload
{
    /**
     * @var ScopeConfigInterface
     */
    private $scopeConfig;

    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * @var string
     */
    private $statusConfigPath;

    /**
     * @var string
     */
    private $logMessagePrefix;

    public function __construct(
        ScopeConfigInterface $scopeConfig,
        LoggerInterface $logger,
        string $statusConfigPath,
        string $logMessagePrefix
    ) {
        $this->scopeConfig = $scopeConfig;
        $this->logger = $logger;
        $this->statusConfigPath = $statusConfigPath;
        $this->logMessagePrefix = $logMessagePrefix;
    }

    public function beforeDispatch(FrontControllerInterface $subject, RequestInterface $request)
    {
        if (!$this->scopeConfig->getValue($this->statusConfigPath)) {
            return;
        }

        $this->logger->debug($this->logMessagePrefix);
    }
}
