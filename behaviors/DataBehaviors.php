<?php

namespace app\behaviors;
use yii\base\Behavior;
use yii\db\ActiveRecord;


class DataBehaviors extends Behavior
{

    public function events(){
     return [
         ActiveRecord::EVENT_AFTER_FIND =>'converterDataBr',
         ActiveRecord::EVENT_BEFORE_INSERT =>'converterDataSql',
         ActiveRecord::EVENT_BEFORE_UPDATE =>'converterDataSql'
     ];
    }

    public function converterDataSql($evento){
        $data = $this->owner->nascimento;
        $arr = explode('/',$data);
        if($this->owner->timestamp ==  null){
            $this->owner->timestamp = time();
        }

        $this->owner->nascimento = $arr[2].'-'.$arr[1].'-'.$arr[0];
    }

    public function converterDataBr($evento){
        $data = $this->owner->nascimento;
        $arr = explode('-', $data);
        $this->owner->nascimento = $arr[2].'/'.$arr[1].'/'.$arr[0];
    }


}