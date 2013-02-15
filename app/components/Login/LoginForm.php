<?php

class LoginForm extends Nette\Application\UI\Form {

    public function __construct() {

        parent::__construct();

        $this->build();
    }

    private function build() {

        $this->addPassword('password')
                ->setAttribute('class', 'with-prompt')
                ->setAttribute('title', 'Zadejte přístupové heslo');
        $this->addSubmit('ok', 'Vstoupit');
    }

}