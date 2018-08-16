<?php
/**
 * Created by PhpStorm.
 * User: joaob
 * Date: 16/08/2018
 * Time: 16:39
 */

namespace app\controllers;


use yii\rest\ActiveController;

class RestController extends ActiveController
{
    public $modelClass = "app\models\aluno";
}