<?php

namespace app\modules\api\controllers;

use yii\rest\ActiveController;
use yii\web\Controller;
use app\models\Alunos;

/**
 * Default controller for the `api` module
 */
class DefaultController extends ActiveController
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public $modelClass = "app\models\Alunos";
    public function actionIndex()
    {

//        $api = new \RestClient([
//            'base_url'=>'http://localhost/cadastro-escola/web/api/',
//            'headers'=>[
//                'Accept'=>'application/json'
//            ]
//        ]);

     return $this->render('index');
   }
}
