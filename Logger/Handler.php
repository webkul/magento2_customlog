<?php
/**
 * Webkul Software
 *
 * @category Magento
 * @package  Webkul_Customlog
 * @author   Webkul
 */
namespace Webkul\Customlog\Logger;

class Handler extends \Magento\Framework\Logger\Handler\Base
{
    /**
     * Logging level
     * @var int
     */
    protected $loggerType = Logger::INFO;

    /**
     * File name
     * @var string
     */
    protected $fileName = '/var/log/customfile.log';
}