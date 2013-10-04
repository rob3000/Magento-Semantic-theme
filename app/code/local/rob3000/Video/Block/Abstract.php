<?php
class Doghouse_Video_Block_Abstract extends Mage_Core_Block_Template {



  /*
   * Returns the video url from the category attribute
   * @var string
   */
  protected $_videoUrl = null;
  /*
   * Gets the video id so we can manually construct the iframe
   * @string
   */
  protected $_videoId = null;


  /*
   * Get the video url based on Product or category
   */
  public function getVideoUrl(){
    if($this->getCurrentCategory()){
      return $this->_videoUrl = $this->getCurrentCategory()->getCatalogVideo();
    }
    if($this->getCurrentProduct()){
      return $this->_videoUrl = $this->getCurrentProduct()->getProductVideo();
    }

  }
  /*
   * Generates the html markup for the template.
   * @var string
   */
  public function generateVideo(){
    if($this->getVideoUrl()){
      $url_string = $this->getVideoUrl();
      $url_parse = parse_url($url_string);
      parse_str($url_parse['query'],$options);
      if(array_key_exists('v',$options)){
         $this->videoMarkup = $options['v'];
      }
      return $this->videoMarkup;
    }
  }

  public function getVideoDescription(){
    if($this->getCurrentProduct()->getProductVideoDescription()){
      return $this->_videoDescription = $this->getCurrentProduct()->getProductVideoDescription();
    }
  }



}
