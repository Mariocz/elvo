<?php

class LoginForm extends Nette\Application\UI\Form {

	public function __construct() {

		parent::__construct();

		$this->build();
	}

	private function build() {

		$this->addPassword('password', 'Zadejte heslo:');
		$this->addSubmit('ok', 'Vstoupit');

	}

}