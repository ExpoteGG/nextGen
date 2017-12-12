<?php
class Vue_chambresDB{
    private $_db;
    function __construct($_db){
        $this->_db = $_db;
    }
    
    //liste des voyages par id
    function getVue_chambresType($id){
        try{
            $query = "SELECT * FROM VUE_CHAMBRES WHERE ID_CHAMBRE=:id_chambre";
            $resultset = $this->_db->prepare($query);
            $resultset->bindValue(':id_chambre',$id);
            $resultset->execute();
            $data = $resultset->fetchAll();
            $resultset->execute();
        } catch (PDOException $e) {
            print $e->getMessage();
        }
        
        while($data = $resultset->fetch()){
            try{
                $_infoArray[] = $data;
            } catch (PDOException $e) {
                print $e->getMessage();
            }
        }
        return $_infoArray;
    }
    
    function getVue_chambres(){
        try{
            $query = "SELECT * FROM VUE_CHAMBRES ORDER BY NOM";
            $resultset = $this->_db->prepare($query);
            $resultset->execute();
            $data = $resultset->fetchAll();
            $resultset->execute();
        } catch (PDOException $e) {
            print $e->getMessage();
        }
        
        while($data = $resultset->fetch()){
            try{
                $_infoArray[] = $data;
            } catch (PDOException $e) {
                print $e->getMessage();
            }
        }
        return $_infoArray;
    }
    
    function getVue_chambresSelect($id){
        try{
            $query = "SELECT * FROM VUE_CHAMBRES where id_chambre=:id_chambre";
            $resultset = $this->_db->prepare($query);
            $resultset->bindValue(':id_chambre',$id);
            $resultset->execute();
            $data = $resultset->fetchAll();
            $resultset->execute();
        } catch (PDOException $e) {
            print $e->getMessage();
        }
        while($data = $resultset->fetch()){
            try{
                $_infoArray[] = $data;
            } catch (PDOException $e) {
                print $e->getMessage();
            }
        }
        return $_infoArray;
    }
}

