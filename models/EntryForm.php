<?php
/**
 * Created by PhpStorm.
 * User: Viktor
 * Date: 08.10.2018
 * Time: 11:52
 */

namespace app\models;


use yii\base\Model;

class EntryForm extends Model
{

    public $email;
    public $login;

    public function rules()
    {
        return [
            [['login', 'email'], 'required'],
            ['email', 'email'],
        ];
    }
}