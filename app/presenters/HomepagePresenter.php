<?php

/**
 * Homepage presenter.
 */
class HomepagePresenter extends BasePresenter {
    
    /** @var Nette\Database\Connection */
    private $db;


    protected function startup()
    {
        parent::startup();
        
        // vytvoří instanci služby a uloží do vlastnosti presenteru
        $this->db = $this->context->database;
    }

    public function renderDefault() {
    }
}
