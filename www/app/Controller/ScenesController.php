<?php
App::uses('AppController', 'Controller');
/**
 * Scenes Controller
 *
 * @property Scene $Scene
 */
class ScenesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Scene->recursive = 0;
		$this->set('scenes', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Scene->id = $id;
		if (!$this->Scene->exists()) {
			throw new NotFoundException(__('Invalid scene'));
		}
		$this->set('scene', $this->Scene->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Scene->create();
			if ($this->Scene->save($this->request->data)) {
				$this->Session->setFlash(__('The scene has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The scene could not be saved. Please, try again.'));
			}
		}
		$motions = $this->Scene->Motion->find('list');
		$this->set(compact('motions'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Scene->id = $id;
		if (!$this->Scene->exists()) {
			throw new NotFoundException(__('Invalid scene'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Scene->save($this->request->data)) {
				$this->Session->setFlash(__('The scene has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The scene could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Scene->read(null, $id);
		}
		$motions = $this->Scene->Motion->find('list');
		$this->set(compact('motions'));
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
		$this->Scene->id = $id;
		if (!$this->Scene->exists()) {
			throw new NotFoundException(__('Invalid scene'));
		}
		if ($this->Scene->delete()) {
			$this->Session->setFlash(__('Scene deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Scene was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Scene->recursive = 0;
		$this->set('scenes', $this->paginate());
	}

/**
 * admin_view method
 *
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->Scene->id = $id;
		if (!$this->Scene->exists()) {
			throw new NotFoundException(__('Invalid scene'));
		}
		$this->set('scene', $this->Scene->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Scene->create();
			if ($this->Scene->save($this->request->data)) {
				$this->Session->setFlash(__('The scene has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The scene could not be saved. Please, try again.'));
			}
		}
		$motions = $this->Scene->Motion->find('list');
		$this->set(compact('motions'));
	}

/**
 * admin_edit method
 *
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->Scene->id = $id;
		if (!$this->Scene->exists()) {
			throw new NotFoundException(__('Invalid scene'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Scene->save($this->request->data)) {
				$this->Session->setFlash(__('The scene has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The scene could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Scene->read(null, $id);
		}
		$motions = $this->Scene->Motion->find('list');
		$this->set(compact('motions'));
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
		$this->Scene->id = $id;
		if (!$this->Scene->exists()) {
			throw new NotFoundException(__('Invalid scene'));
		}
		if ($this->Scene->delete()) {
			$this->Session->setFlash(__('Scene deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Scene was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
