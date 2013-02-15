<?php

/*
 * TODO
 * 
 * DB tabulka aktuality, rozhejbat editaci hlavni stranky
 * 
 */

class PageAdminerControl extends \Nette\Application\UI\Control {

    /**
     * @var Database\ElvoDao
     */
    private $dao;

    /**
     * 
     * @param Database\ElvoDao $dao
     */
    public function __construct(Database\ElvoDao $dao) {
        parent::__construct();

        $this->dao = $dao;
    }

    public function render() {
        $this->template->setFile(__DIR__ . '/pageAdminer.latte');
        $this->template->render();
    }

    protected function createComponentEditPageForm() {
        $page = $this->dao->getPageData('main_page');
        $form = new EditPageForm($page['title'], $page['text']);
        $form['submit']->onClick[] = callback($this, 'editPageSubmitClicked');

        return $form;
    }

    public function editPageSubmitClicked(\Nette\Forms\Controls\SubmitButton $button) {


        $this->dao->updatePage('main_page', $button->form->values);
        
    }

}