<?php

class CreateForm extends CFormModel
{
        public $text;
        
        public function rules()
        {
                return array(
                        array('text'),
                );
        }
        public function attributeLabels(){}
}