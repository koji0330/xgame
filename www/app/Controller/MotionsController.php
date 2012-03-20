<?php
App::uses('AppController', 'Controller');
/**
 * Motions Controller
 *
 * @property Motion $Motion
 */
class MotionsController extends AppController {


/**
 * index method
 *
 * @return void
 */
    public function index() {
        $this->Motion->recursive = 0;
        $this->set('motions', $this->paginate());
    }

/**
 * view method
 *
 * @param string $id
 * @return void
 */
    public function view($id = null) {
        $this->Motion->id = $id;
        if (!$this->Motion->exists()) {
            throw new NotFoundException(__('Invalid motion'));
        }
        $this->set('motion', $this->Motion->read(null, $id));
    }

/**
 * add method
 *
 * @return void
 */
    public function add() {
        if ($this->request->is('post')) {
            $this->Motion->create();
            if ($this->Motion->save($this->request->data)) {
                $this->Session->setFlash(__('The motion has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The motion could not be saved. Please, try again.'));
            }
        }
        $categories = $this->Motion->Category->find('list');
        $scenes = $this->Motion->Scene->find('list');
        $this->set(compact('categories', 'scenes'));
    }

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
    public function edit($id = null) {
        $this->Motion->id = $id;
        if (!$this->Motion->exists()) {
            throw new NotFoundException(__('Invalid motion'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Motion->save($this->request->data)) {
                $this->Session->setFlash(__('The motion has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The motion could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->Motion->read(null, $id);
        }
        $categories = $this->Motion->Category->find('list');
        $scenes = $this->Motion->Scene->find('list');
        $this->set(compact('categories', 'scenes'));
    }

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
    public function delete($id = null) {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        $this->Motion->id = $id;
        if (!$this->Motion->exists()) {
            throw new NotFoundException(__('Invalid motion'));
        }
        if ($this->Motion->delete()) {
            $this->Session->setFlash(__('Motion deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Motion was not deleted'));
        $this->redirect(array('action' => 'index'));
    }
/**
 * admin_index method
 *
 * @return void
 */
    public function admin_index() {
        $this->Motion->recursive = 0;
        $this->set('motions', $this->paginate());
    }

/**
 * admin_view method
 *
 * @param string $id
 * @return void
 */
    public function admin_view($id = null) {
        $this->Motion->id = $id;
        if (!$this->Motion->exists()) {
            throw new NotFoundException(__('Invalid motion'));
        }
        $this->set('motion', $this->Motion->read(null, $id));
    }

/**
 * admin_add method
 *
 * @return void
 */
    public function admin_add() {
        if ($this->request->is('post')) {
            $this->Motion->create();
            if ($this->Motion->save($this->request->data)) {
                $this->Session->setFlash(__('The motion has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The motion could not be saved. Please, try again.'));
            }
        }
        $categories = $this->Motion->Category->find('list');
        $scenes = $this->Motion->Scene->find('list');
        $this->set(compact('categories', 'scenes'));
    }

/**
 * admin_edit method
 *
 * @param string $id
 * @return void
 */
    public function admin_edit($id = null) {
        $this->Motion->id = $id;
        if (!$this->Motion->exists()) {
            throw new NotFoundException(__('Invalid motion'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Motion->save($this->request->data)) {
                $this->Session->setFlash(__('The motion has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The motion could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->Motion->read(null, $id);
        }
        $categories = $this->Motion->Category->find('list');
        $scenes = $this->Motion->Scene->find('list');
        $this->set(compact('categories', 'scenes'));
    }

/**
 * admin_delete method
 *
 * @param string $id
 * @return void
 */
    public function admin_delete($id = null) {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        $this->Motion->id = $id;
        if (!$this->Motion->exists()) {
            throw new NotFoundException(__('Invalid motion'));
        }
        if ($this->Motion->delete()) {
            $this->Session->setFlash(__('Motion deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Motion was not deleted'));
        $this->redirect(array('action' => 'index'));
    }

    public function json(){
        $this->autoRender = false;
        $this->layout = "ajax";
        //$this->RequestHandler->setContent('json');
        //$this->RequestHandler->respondAs('application/json; charset=UTF-8');
        $this->Motion->recursive = 0;
        if(isset($this->params['url']['data']['scene'])){
            $scene = $this->params['url']['data']['scene'];
        }else{
            $scene = null;
        }
        if(isset($this->params['url']['data']['category'])){
            $category = $this->params['url']['data']['category'];
        }else{
            $category = null;
        }
        $motions = $this->Motion->find('list',
            array(
                'fields' => 'name',
                'conditions' => array(
                    'Motion.category_id' => $category
                )
            )
        );
        echo json_encode(array_values($motions));
        exit;
    }
}
