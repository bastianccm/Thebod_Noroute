<?php

class Thebod_Noroute_IndexController extends Mage_Core_Controller_Front_Action {
    public function indexAction() {
        $this->loadLayout(array('default', 'noroute'));

        $this->renderLayout();
    }
}