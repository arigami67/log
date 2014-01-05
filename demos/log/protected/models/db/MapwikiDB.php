<?php
class MapwikiDB extends CActiveRecord
{
    public $text;
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }

    public function tableName()
    {
        return 'mapwiki';
    }
    public function getDbConnection(){
        return Yii::app()->logDB;
    }

}