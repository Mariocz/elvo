<?php

class AdminPresenter extends BasePresenter {

    /** @var Nette\Database\Connection */
    private $db;

    protected function startup() {
        parent::startup();

        // vytvoří instanci služby a uloží do vlastnosti presenteru
        $this->db = $this->context->database;
    }

    public function renderDefault() {
        if (!$this->user->isLoggedIn()) {
            $this->redirect('Admin:login');
        }
    }

    protected function createComponentLogin() {

        return new LoginControl($this->user);
    }

    public function actionLogout() {

        $this->user->logout();

        $this->redirect('Homepage:');
    }

}
