<?php
App::uses('AppController', 'Controller');
/**
 * Indexes Controller
 *
 */
class IndexesController extends AppController {
    var $uses = array('Category', 'Scene');
    function index() {
        $categories = $this->Category->find('list');
        $scenes = $this->Scene->find('list');
        $this->set(compact('categories', 'scenes'));
    }
}
?>
