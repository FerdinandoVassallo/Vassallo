<?php
/**
 * Created by PhpStorm.
 * User: ferdinando
 * Date: 05/10/17
 * Time: 17.25
 */

class Vassallo_HelloWorld_block_Helloworld extends Mage_Core_Block_Template
{
    public function isEnabled(){
        return Mage::helper('vassallo_helloworld')->isEnabled();
}
    public function getMessage(){
        return Mage::helper('vassallo_helloworld')->getConfig('configuration/message');
}
}