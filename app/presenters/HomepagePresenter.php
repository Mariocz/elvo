<?php

/**
 * Homepage presenter.
 */
class HomepagePresenter extends BasePresenter {
    
    /** @var Nette\Database\Connection */
    private $db;

    /**
     *
     * @var Database\ElvoDao
     */
    private $dao;
    protected function startup()
    {
        parent::startup();
        
        // vytvoří instanci služby a uloží do vlastnosti presenteru
        $this->db = $this->context->database;
        $this->dao = $this->context->dao;
    }

    public function renderDefault() {
        $this->template->dao = $this->context->dao;
        $this->template->data = $this->dao->getPageData('main_page');
    }
}
