<?php


class Doghouse_Video_Block_Product extends Doghouse_Video_Block_Abstract {

  /**
   * Current selected product internal model cache
   * @var object
   */
  protected $_currentProduct = null;
  /**
 * Gets the current video url form the product.
 * @var string
 */

  /*
   * loads the current product
   *  @var object
   */
  public function getCurrentProduct(){
    if (is_null($this->_currentProduct)) {
      $this->_currentProduct = Mage::registry('current_product');
    }
    return $this->_currentProduct;
  }

}
