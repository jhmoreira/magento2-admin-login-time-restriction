<?php
namespace Moreira\AdminLoginTimeRestriction\Model\Config\Source;

use Magento\Framework\Option\ArrayInterface;
use Magento\User\Model\ResourceModel\User\CollectionFactory;

class AdminRoles implements ArrayInterface{

    private CollectionFactory $collectionFactory;

    public function __construct(CollectionFactory $collectionFactory){
        $this->collectionFactory = $collectionFactory;
    }

    public function toOptionArray(){
        $options = [];

        foreach ($this->collectionFactory->create() as $user){
            $options[] = [
                'value' => $user->getId(),
                'label' => $user->getUsername()
            ];
        }
        return $options;
    }
}
?>