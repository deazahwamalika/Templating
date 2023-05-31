<?php

namespace app\controllers;

use app\models\Profil_046;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\we\NotFoundHttpException;
use yii\filters\VerbFilter;

class Profil046Controller extends Controller
{
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Profil_046::find(),
        ]);
        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

}
