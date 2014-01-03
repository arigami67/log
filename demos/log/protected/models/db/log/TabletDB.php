<?php
class TabletDB extends CActiveRecord
{
    
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }

    public function tableName()
    {
        return 'tablet';
    }
    public function getDbConnection(){
        return Yii::app()->logDB;
    }
}