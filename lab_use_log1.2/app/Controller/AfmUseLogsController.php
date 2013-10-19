<?php
App::uses('AppController', 'Controller');
/**
 * AfmUseLogs Controller
 *
 * @property AfmUseLog $AfmUseLog
 * @property PaginatorComponent $Paginator
 */
class AfmUseLogsController extends AppController {

	public $uses = array('AfmUseLog','User');
	
	/**
	 * Components
	 *
	 * @var array
	 */
	public $components = array('Paginator');

	/**
	 * index method
	 *
	 * @return void
	*/
	public function index() {
		$this->AfmUseLog->recursive = 0;
		$this->set('afmUseLogs', $this->Paginator->paginate());
	}

	/**
	 * view method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function view($id = null) {
		if (!$this->AfmUseLog->exists($id)) {
			throw new NotFoundException(__('Invalid Afm use log'));
		}
		$options = array('conditions' => array('AfmUseLog.' . $this->AfmUseLog->primaryKey => $id));
		$this->set('afmUseLog', $this->AfmUseLog->find('first', $options));
	}

	/**
	 * add method
	 *
	 * @return void
	 */
	public function add() {
		if ($this->request->is('post')) {
			$this->AfmUseLog->create();
			if ($this->AfmUseLog->save($this->request->data)) {
				$this->Session->setFlash(__('The afm use log has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The afm use log could not be saved. Please, try again.'));
			}
		}
		$users = $this->User->find('list');
		$this->set(compact('users'));
	}

	/**
	 * edit method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function edit($id = null) {
		if (!$this->AfmUseLog->exists($id)) {
			throw new NotFoundException(__('Invalid afm use log'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->AfmUseLog->save($this->request->data)) {
				$this->Session->setFlash(__('The afm use log has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The afm use log could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('AfmUseLog.' . $this->AfmUseLog->primaryKey => $id));
			$this->request->data = $this->AfmUseLog->find('first', $options);
		}
		$users = $this->User->find('list');
		$this->set(compact('users'));
			}

	/**
	 * delete method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function delete($id = null) {
		$this->AfmUseLog->id = $id;
		if (!$this->AfmUseLog->exists()) {
			throw new NotFoundException(__('Invalid afm use log'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->AfmUseLog->delete()) {
			$this->Session->setFlash(__('The afm use log has been deleted.'));
		} else {
			$this->Session->setFlash(__('The afm use log could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
