<?php

class DataText{
    
    # list of data tags
    private $textObject;

    # this function add text for that tag
    public function addText($id_tag,$textdata){
        $this->textObject[$id_tag] = $textdata;
    }

    # this function will show all data for each tag
    public function getAll(){
        return $this->textObject;
    }

}


?>