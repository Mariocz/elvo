<?php
use Nette\Forms\Form;

class AddArticleForm extends Nette\Application\UI\Form {
    
    public function __construct() {
        
        parent::__construct();
        
        $this->build();
        
    }
    
    private function build() {
        
        $this->addText('title','Nadpis:')
                ->setRequired('Vyplňte nadpis.');
        
        $this->addTextArea('text', 'Obsah:')
                ->setRequired('Vyplňte obsah');
        
        $this->addSubmit('submit', 'Přidat aktualitu');
        
    }
    
}