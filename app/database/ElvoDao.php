<?php

namespace Database;

use Nette;

/**
 * Description of ElvoDao
 *
 * @author mario
 */
class ElvoDao extends \Nette\Object {
    
    /**
     *
     * @var type Nette\Database\Connection
     */
    protected $connection;
    
    public function __construct(Nette\Database\Connection $db) {
        $this->connection = $db;
    }
    
    public function updatePage($page, $data) {
        $this->connection->table('pages')->where('id', $page)->update($data);
    }
    
    public function getPageData($page) {
        return $this->connection->table('pages')->where('id', $page)->fetch();
    }
}

?>
