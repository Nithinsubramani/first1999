<?php

namespace I95dev\Hello\Block;

/*
 * Webkul Hello Block
 */

class Hello extends \Magento\Framework\View\Element\Template
{
    /**
     * @return $this
     */
    protected function _prepareLayout()
    {
        return parent::_prepareLayout();
    }

    /**
     * getContentForDisplay
     * @return string
     */
    public function getContentForDisplay()
    {
        return __("hello nithin.");
    }
}
?>
