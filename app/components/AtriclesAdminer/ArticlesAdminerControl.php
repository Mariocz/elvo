<?php

/*
 * TODO
 * 
 * DB tabulka aktuality, rozhejbat editaci hlavni stranky
 * 
 */

class ArticlesAdminerControl extends \Nette\Application\UI\Control {

    public function __construct() {
        parent::__construct();
    }

    public function render() {

        $this->template->setFile(__DIR__ . '/articlesAdminer.latte');
        $this->template->render();
    }

    protected function createComponentAddArticleForm() {

        $form = new AddArticleForm();
        $form['submit']->onClick[] = callback($this, 'addArticleSubmitClicked');

        return $form;
    }

    public function addArticleSubmitClicked(\Nette\Forms\Controls\SubmitButton $button) {

        $values = $button->form->values;

            $password = $values['title'];
            $text = $values['text'];
    }

}