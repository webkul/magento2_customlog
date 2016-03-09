<?php
/**
 * Webkul Software
 *
 * @category Magento
 * @package  Webkul_Customlog
 * @author   Webkul
 */
namespace Webkul\Customlog\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;

class Index extends Action
{
    /**
     * Logging instance
     * @var \Webkul\Modulename\Logger\Logger
     */
    protected $_logger;

    /**
     * @param Context $context
     * @param PageFactory $resultPageFactory
     */
    public function __construct(
        Context $context,
        \Webkul\Customlog\Logger\Logger $logger
    ) {
        $this->_logger = $logger;
        parent::__construct($context);
    }


    /**
     * Default customer account page
     *
     * @return \Magento\Framework\View\Result\Page
     */
    public function execute()
    {
        $this->_logger->info("Some text string data"); // log string Data to customfile.log
        //  Write Your Code Here
        echo "custom log file has been created please check customlog.log file in path var/log";
        die();
    }
}
