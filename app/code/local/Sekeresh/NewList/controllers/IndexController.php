<?php
class Sekeresh_NewList_IndexController extends Mage_Core_Controller_Front_Action {

    public function listAction(){
        $this->loadLayout();

        $block = $this->getLayout()->createBlock(
            'sekeresh_newlist',
            'newlist',
            array('template'=>'sekeresh/newlist'));
    $this->getLayout()->getBlock('content')->append($block);

        $this->renderLayout();
    }
 }