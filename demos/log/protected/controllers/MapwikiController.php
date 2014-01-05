<?php
class MapwikiController extends Controller
{
	#public $layout='column1';
        private $param;
        
        public function init(){
            Yii::import('application.models.mw.*');
            Yii::import('application.models.db.*');
            Yii::import('application.models.api.mapwiki.*');
            Yii::import('application.models.api.common.*');
            $this->param = new ParamMw(MapwikiDB::model()->findbyPK(1));
            
        }
        public function actionIndex(){
            $this->record($_POST);
        }
        public function record($post) {
            if(true) {
                $model = new RecordDB();
            }

            if (!empty($post['RecordDB'])) {
                
                $model->attributes= $post['RecordDB'];
                
                if($model->validate()){
                   $model->save();
                }
            }
            
            if(false){ # Записываем в базу
                $this->indb = new setVarsInDb();
            }
            $this->render('create', array('model'=> $model));
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