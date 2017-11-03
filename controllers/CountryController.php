<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/3
 * Time: 14:34
 */

namespace app\controllers;

use app\models\Country;
use yii\data\Pagination;
use yii\web\Controller;

class CountryController extends Controller
{
    /*
     * get the countries data from ActiveRecord class.
     */
    public function actionIndex()
    {
        $query = Country::find();

        /*
         *  set the pagination poperties about the query operation.
         */
        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);

        $countries = $query->orderBy('name')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('index', [
            'countries' => $countries,
            'pagination' => $pagination,
        ]);
    }
}