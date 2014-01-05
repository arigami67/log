<?php

class Apitablet
{
    public $xml;
    
    public function __constructor(){}
    
    public function setxml(SimpleXMLElement $xml){$this->xml = $xml;}
    public function getxml(){ return $this->xml;}
    public function setxmlindb(CActiveRecord $tablet, $tabletablet){
        foreach($tabletablet as $key=>$value){
                $tablet->$key = $value;
        }
        return $tablet->save();
        
    }
    
}