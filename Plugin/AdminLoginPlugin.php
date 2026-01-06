<?php
namespace Moreira\AdminLoginTimeRestriction\Plugin;

use Magento\Backend\Model\Auth;
use Magento\Framework\Exception\LocalizedException;
use Moreira\AdminLoginTimeRestriction\Helper\Config;
use Magento\Authorization\Model\ResourceModel\Role\CollectionFactory;
use Magento\User\Model\UserFactory;
use Magento\Framework\Stdlib\DateTime\TimeZoneInterface;

class AdminLoginPlugin{

    private Config $config;
    private UserFactory $userFactory;
    private TimeZoneInterface $timezone;


    public function __construct(
        Config $config,
        UserFactory $userFactory,
        TimeZoneInterface $timezone
    ){
        $this->config = $config;
        $this->userFactory = $userFactory;
        $this->timezone = $timezone;
    }

    public function beforeLogin( Auth $subject, $username, $password){
     
        if(!$this->config->isEnabled()){
            return [$username, $password];
        }

        $user = $this->userFactory->create()->loadByUserName($username);
      
        if(!$user->getId()){

            return [$username, $password];
        }

        
        
            if(in_array((int)$user->getId(), $this->config->getBypassUsers(), true)){
                return [$username, $password];
            }else{

                $start = $this->config->getStartTime();
                $end = $this->config->getEndTime();

                if(!$start || !$end){
                return;
                 }

                $now = $this->timezone->date()->format('H:i');

                $allowed = $start <= $end ? ($now>= $start && $now<= $end) : ($now>= $start || $now<= $end);
        
                if(!$allowed){
            throw new LocalizedException(
                __('Admin access is restricted at this time.')
                );
                 }
            }
       
        
        return [$username, $password];
    }
}
?>