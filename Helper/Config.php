<?php
namespace Moreira\AdminLoginTimeRestriction\Helper;

use Magento\Framework\App\Helper\AbstractHelper;

class Config extends AbstractHelper{
    const XML_ENABLED = 'admin_login_time/general/enabled';
    const XML_START_TIME = 'admin_login_time/general/start_time';
    const XML_END_TIME = 'admin_login_time/general/end_time';
    const XML_BYPASS_USERS = 'admin_login_time/general/bypass_users';

    public function isEnabled(){
        return $this->scopeConfig->isSetFlag(self::XML_ENABLED);
    }
    public function getStartTime(){
        return $this->scopeConfig->getValue(self::XML_START_TIME);
    }
    public function getEndTime(){
        return $this->scopeConfig->getValue(self::XML_END_TIME);
    }
    public function getBypassUsers(){
        $value = $this->scopeConfig->getValue(self::XML_BYPASS_USERS);
        return $value === ''? [] :array_map('intval', explode(',', $value));
    }
}
?>