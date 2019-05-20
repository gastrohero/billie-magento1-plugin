<?php

class Billie_Core_Block_Adminhtml_Transaction_Log extends Mage_Adminhtml_Block_Widget_Grid_Container
{

    public function __construct()
    {
        $this->_blockGroup = 'billie_core';
        $this->_controller = 'adminhtml_transaction_log';
        $this->_headerText = $this->__('Billie Transaction Log');
        // $this->_addButtonLabel  = $this->__('Add Button Label');
        parent::__construct();
        $this->_removeButton('add');
    }


}

