<?php
$installer = $this;
$setup = new Mage_Eav_Model_Entity_Setup('core_setup');
$installer->startSetup();
$setup->addAttribute('catalog_product','product_video',array(
  'group' => 'General',
  'input' => 'text',
  'type' => 'varchar',
  'label' => 'Product Video Url',
  'visible' => 1,
  'required' => 0,
  'user_defined' => 1,
  'global' => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
  'note' => 'The youtube url'
));
$setup->addAttribute('catalog_product','product_video_description',array(
  'group' => 'General',
  'input' => 'textarea',
  'type' => 'varchar',
  'label' => 'Product Video Description',
  'visible' => 1,
  'required' => 0,
  'user_defined' => 1,
  'global' => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
  'note' => 'Enter a description to appear with the video'
));

$installer->endSetup();
