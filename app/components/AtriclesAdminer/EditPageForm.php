<?php
use Nette\Forms\Form;

class EditPageForm extends Nette\Application\UI\Form {
    
    private $title, $text;
    
    /**
     * 
     * @param string $title
     * @param string $text
     */
    public function __construct($title, $text) {
        
        parent::__construct();
        
        $this->title = $title;
        $this->text = $text;
        
        $this->build();
        
    }
    
    private function build() {
        
        $this->addText('title', null, 40, 40) 
                ->setAttribute("class", "with-prompt")
                ->setAttribute("title", "Nadpis první stránky")
                ->setValue($this->title)
                ->setRequired('Vyplňte nadpis.');
        
        $this->addTextArea('text')
                ->setAttribute("style", "width:700px; height: 400px;")
                ->setDefaultValue($this->text)
                ->setRequired('Vyplňte obsah');
        
        $this->addSubmit('submit', 'Uložit');
  
    }
}