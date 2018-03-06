<?php
namespace Weblips\Menu\Model;

use Monolog\Logger;
use Magento\Framework\Logger\Handler\Base;

class DebugHandler extends Base {

    protected $fileName = '/var/log/debug_custom.log';
    
    protected $loggerType = Logger::DEBUG;
}
