<?php
class LogController extends Controller
{
	public $layout='column1';

        public function init(){
            Yii::import('application.models.db.*');
            Yii::import('application.models.api.log.*');
        }
        public function actionIndex(){
            $filexml = Yii::app()->basePath.'\\data\\'.Yii::app()->params->mdir.'test.xml';
            $this->AddTablet($filexml);
        }
        
        public function AddTablet($filexml){
            if(true){ # @info - объ€вление переменных
                $TabletDB=new TabletDB;
                $Apitablet = new Apitablet;
                $Tabletablet = new Tabletablet;
                $filexml= file_get_contents($filexml);
                $xml = new SimpleXMLElement($filexml);
            }
            if(true){ # @info - помещаем xml в контейнер
                
                $Apitablet->setxml($xml);
                foreach($Apitablet->getxml() as $key=>$value){
                    foreach($value as $k=>$v){
                        $Tabletablet->set($k, $v);
                    }
                };
            }
            $Apitablet->setxmlindb($TabletDB, $Tabletablet->get());
        }

	public function actionError()
	{
	    if($error=Yii::app()->errorHandler->error)
	    {
	    	if(Yii::app()->request->isAjaxRequest)
	    		echo $error['message'];
	    	else
                        return print_r($error);
	        	#$this->render('error', $error);
	    }
	}
}