<?php

class AdminPresenter extends BasePresenter {
    

    protected function startup() {
        parent::startup();
    }

    public function renderDefault() {
        if (!$this->user->isLoggedIn()) {
            $this->redirect('Admin:login');
        }
    }

    protected function createComponentLogin() {
        return new LoginControl($this->user);
    }

    protected function createComponentPageAdminer() {
        return new PageAdminerControl($this->context->dao);
    }
    
        public function actionLogout() {

        $this->user->logout();

        $this->redirect('Homepage:');
    }

}
