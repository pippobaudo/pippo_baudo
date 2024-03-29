<?php
class DiscountsController extends AppController {

	var $name = 'Discounts';

	function index() {
		$this->Discount->recursive = 0;
		$this->set('discounts', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid discount', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('discount', $this->Discount->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Discount->create();
			if ($this->Discount->save($this->data)) {
				$this->Session->setFlash(__('The discount has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The discount could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid discount', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Discount->save($this->data)) {
				$this->Session->setFlash(__('The discount has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The discount could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Discount->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for discount', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Discount->delete($id)) {
			$this->Session->setFlash(__('Discount deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Discount was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function admin_index() {
		$this->Discount->recursive = 0;
		$this->set('discounts', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid discount', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('discount', $this->Discount->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Discount->create();
			if ($this->Discount->save($this->data)) {
				$this->Session->setFlash(__('The discount has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The discount could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid discount', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Discount->save($this->data)) {
				$this->Session->setFlash(__('The discount has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The discount could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Discount->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for discount', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Discount->delete($id)) {
			$this->Session->setFlash(__('Discount deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Discount was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
