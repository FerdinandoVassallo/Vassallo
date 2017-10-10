<?php
/**
 * Hello World
 */

/**
 * Hello World
 *
 * Main Helper
 * @author Ferdinando Vassallo <ferdinando.vassallo6@gmail.com>
 * @package Frontend
 * @version 0.1.0
 */
class Vassallo_Helloworld_Helper_Data extends Mage_Core_Helper_Abstract
{
    /**
     * getConfig
     *
     * @param string $config
     * @return mixed
     */
    public function getConfig($config)
    {
        return Mage::getStoreConfig('vassallo_helloworld/' . $config);
    }

    /**
     * isEnabled
     *
     * Returns true if this module is enabled
     * @return bool
     */
    public function isEnabled()
    {
        return $this->getConfig('conguration/enabled');
    }
}