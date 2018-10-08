<?php
/**
 * Created by PhpStorm.
 * User: Viktor
 * Date: 08.10.2018
 * Time: 13:24
 */

namespace app\controllers;


use app\models\Country;
use yii\data\Pagination;
use yii\web\Controller;

class CountryController extends Controller
{
    public function actionIndex()
    {
        $query = Country::find();

        $pagination = new Pagination(
            [
                'defaultPageSize' => 5,
                'totalCount' => $query->count(),
            ]
        );

        $countries = $query->orderBy("name")
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('index',[
           'countries' => $countries,
            'pagination' => $pagination,
        ]);
    }
}