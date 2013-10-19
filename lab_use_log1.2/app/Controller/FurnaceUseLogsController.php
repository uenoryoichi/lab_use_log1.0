<?php
App::uses('AppController', 'Controller');
/**
 * FurnaceUseLogs Controller
 *
 * @property FurnaceUseLog $FurnaceUseLog
 * @property PaginatorComponent $Paginator
 */
class FurnaceUseLogsController extends AppController {

	public  $uses = array('FurnaceUseLog','User');
	
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
		$this->FurnaceUseLog->recursive = 0;
		$this->set('furnaceUseLogs', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->FurnaceUseLog->exists($id)) {
			throw new NotFoundException(__('Invalid furnace use log'));
		}
		$options = array('conditions' => array('FurnaceUseLog.' . $this->FurnaceUseLog->primaryKey => $id));
		$this->set('furnaceUseLog', $this->FurnaceUseLog->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->FurnaceUseLog->create();
			if ($this->FurnaceUseLog->save($this->request->data)) {
				$this->Session->setFlash(__('The furnace use log has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The furnace use log could not be saved. Please, try again.'));
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
		if (!$this->FurnaceUseLog->exists($id)) {
			throw new NotFoundException(__('Invalid furnace use log'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->FurnaceUseLog->save($this->request->data)) {
				$this->Session->setFlash(__('The furnace use log has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The furnace use log could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('FurnaceUseLog.' . $this->FurnaceUseLog->primaryKey => $id));
			$this->request->data = $this->FurnaceUseLog->find('first', $options);
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
		$this->FurnaceUseLog->id = $id;
		if (!$this->FurnaceUseLog->exists()) {
			throw new NotFoundException(__('Invalid furnace use log'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->FurnaceUseLog->delete()) {
			$this->Session->setFlash(__('The furnace use log has been deleted.'));
		} else {
			$this->Session->setFlash(__('The furnace use log could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
