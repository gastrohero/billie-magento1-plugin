<?php

class Billie_Core_Model_Observer
{
    const AUTOLOADER_FILE = 'lib/Billie/vendor/autoload.php';
    public function addAutoloader()
    {
        require_once Mage::getBaseDir('base') . DS . self::AUTOLOADER_FILE;
        return $this;
    }
}