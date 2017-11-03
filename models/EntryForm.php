<?php
/**
 * Created by PhpStorm.
 * User: wjg
 * Date: 2017/11/2
 * Time: 17:27
 */

namespace app\models;

use yii\base\Model;

class EntryForm extends Model
{
    public $name;
    public $email;

    /**
     *  form-data validate
     */
    public function rules()
    {
//        return parent::rules(); // TODO: Change the autogenerated stub
        return [
            [['name', 'email'], 'required'],
            ['email', 'email'],
        ];
    }
}