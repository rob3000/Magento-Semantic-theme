<?php

class Doghouse_Video_Block_Category extends Doghouse_Video_Block_Abstract {

  /*
   * Gets the current category
   * @var objext
   */
  protected $_currentCategory = null;
  /**
   * Get The current category and cache result
   * @return Object
   */
  public function getCurrentCategory() {
    if (is_null($this->_currentCategory)) {
      $this->_currentCategory = Mage::registry('current_category');
    }
    return $this->_currentCategory;
  }

}
