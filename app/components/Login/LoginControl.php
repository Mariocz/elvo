<?php

class LoginControl extends \Nette\Application\UI\Control {

    /**
     * @var Nette\Web\User
     */
    private $user;

    public function __construct(Nette\Security\User $user) {

        parent::__construct();
        $this->user = $user;
    }

    public function render() {

        $this->template->setFile(__DIR__ . '/login.latte');
        $this->template->render();
    }

    protected function createComponentLoginForm() {

        $form = new LoginForm;
        $form['ok']->onClick[] = callback($this, 'loginFormOkClicked');

        return $form;
    }

    public function loginFormOkClicked(\Nette\Forms\Controls\SubmitButton $button) {

        $values = $button->form->values;

        try {

            $this->user->login($values['password']);
            $this->user->setExpiration(0, TRUE);
            $this->presenter->redirect('admin:');
        } catch (\Nette\Security\AuthenticationException $e) {

            $this->presenter->flashMessage($e->getMessage(), 'error');
        }
    }

}