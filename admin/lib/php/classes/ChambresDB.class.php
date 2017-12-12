<?php
class ChambresDB extends Chambres{
    private $_db;
    private $_typeArray = array();
    
    public function __construct(array $cnx) {
        $this->_db = $cnx;
    }
    
    public function getChambres(){
        try{
            $query ="SELECT * FROM CHAMBRE ORDER BY ID_CHAMBRE";
            $resultset = $this->_db->prepare($query);
            $resultset->execute();
            $data = $resultset->fetchAll();
            $resultset->execute();
        } catch (PDOException $e) {
            print $e->getMessage();
        }
        
        while($data = $resultset->fetch()){
            try{
                $_typeArray[] = new voyages($data);
            } catch (PDOException $e) {
                print $e->getMessage();
            }
        }
        return $_typeArray;
    }
}
