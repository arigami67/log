<?php

class setVarsInDb
{
    public function setvars(CActiveRecord $db, $vars){
        foreach($vars as $key=>$value){
                $db->$key = $value;
        }
        return $db->save();
        
    }
    
}