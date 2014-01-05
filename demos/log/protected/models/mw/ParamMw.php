<?php

class ParamMw{
    
    public $id;
    public $record;
    
    public function __construct(CActiveRecord $obj) {
        foreach($obj as $key=>$value){
            if(!property_exists(__CLASS__, $key)) continue;
            $this->$key = $value;
        }
        return 1;
    }
}