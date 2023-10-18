<?php
/**
 * Magiccart 

 */

namespace Magiccart\Magicmenu\Block\Adminhtml;

class Menu extends \Magento\Backend\Block\Widget\Grid\Container
{
    /**
     * Constructor.
     */
    protected function _construct()
    {
        $this->_controller = 'adminhtml_menu';
        $this->_blockGroup = 'Magiccart_Magicmenu';
        $this->_headerText = __('Menu Menu');
        $this->_addButtonLabel = __('Add New Menu');
        parent::_construct();
    }
}