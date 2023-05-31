<?php

namespace app\controllers;
use app\models\Matakuliah;
use yii\data\ActiveDataProvider;

class MatakuliahController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Matakuliah::find()
        ]);
        return $this->render('index', [
            'dataProvider' => $dataProvider
        ]);
    }
    
    

}
