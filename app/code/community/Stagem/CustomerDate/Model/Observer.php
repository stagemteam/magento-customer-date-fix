<?php

/**
 * @author StageM Team
 * @copyright Copyright (c) 2020 StageM (https://www.stagem.com.ua)
 * @package Stagem_CustomerDate
 */
class Stagem_CustomerDate_Model_Observer
{
    public function hookToChangeCustomerCreatedAt(Varien_Event_Observer $observer)
    {
        $customer = $observer->getEvent()->getCustomer();
        if ($customer->isObjectNew()) {
            $customer->setCreatedAt(Varien_Date::now());
        }
    }
}
