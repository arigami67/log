<?php
##################################
# ������ ���� � ����
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
    # ����� �� �����
    private $name;
    # @info - os - ������������ �������
    private $os;
    # @info - nos - ���������� ����
    private $nos;
    # @info - ram - ����������� ������
    private $ram;
    # @info - bim - ���������� ������
    private $bim;
}