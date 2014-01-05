<?php
class RecordDB extends CActiveRecord
{
    public $text;
    
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }

    public function tableName()
    {
        return 'record';
    }
    public function getDbConnection(){
        return Yii::app()->logDB;
    }
    
    public function rules()
    {
        $rules=parent::rules();
        return CMap::mergeArray($rules, array(
            array('text', 'required'),
        ));
        
    }
    public function attributeLabels()
    {
        return array(
            'text'    => 'Текст',
        );
    }
    public function safeAttributes()
    {
        return array(
            'text',
        );
    }
}