<?php
##################################
# Данные идут в Базу
##################################
class Tabletablet
{
    public function set($name, $value){
       if(!property_exists(__CLASS__, $name)) return false;
       
       $this->$name = $value;
    }
    public function get(){
        return get_object_vars($this);
    }
    # Поиск по имени
    private $name;
    # @info - os - Операционная системы
    private $os;
    # @info - nos - Количество ядер
    private $nos;
    # @info - ram - Оперативная память
    private $ram;
    # @info - bim - Встроенная память
    private $bim;
}