<?php
try{
    $installer = $this;
    $installer->startSetup();
    $installer->endSetup();
}catch(Excpetion $e){

    Mage::logException($e);
}